<?php

namespace App\Http\Controllers\Order;

use App\Address;
use App\Payment;
use App\Profile;
use App\User;
use App\Wishlist;
use Carbon\Carbon;
use Cart;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Zarinpal\Zarinpal as Zarinpal;
use App\Order;

class OrderController extends Controller
{
    protected $MerchantID = '43ddc9f4-70f3-11e7-a2d3-000c295eb8fc'; //Required

    public function __construct()
    {
    }

    public function checkout(Request $request)
    {

//        $print_invoice = $request->get("print-invoice");
//        $transmission_type = $request->get("transmission-type");
//        $shipping_time = $request->get("shipping-time");
//        $order = $this->addOrder($print_invoice,$transmission_type,$shipping_time);
//        $payment = $this->newPayment($order->id);
//        Cart::destroy();
//        \Mail::to($request->user())
//            ->queue(new OrderPlaced($order));
        return redirect()->route('payment');
    }

    private function addOrder($print_invoice,$transmission_type,$shipping_time)
    {
        $cartItem = [];
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->amount = str_replace(',', '', \Cart::total());
        $order->print_invoice = $print_invoice;
        $order->transmission_type = $transmission_type;
        $order->shipping_time = $shipping_time;
        $order->order_number = 'SHP-' . strtoupper(Str::random(11));
        $order->dead_line = Carbon::now()->addHours(6);
        $carts = Cart::content();
        foreach ($carts as $cart) {
            array_push($cartItem, $cart);
        }
        $order->cart = $cartItem;
        $order->count_cart = Cart::count();
        $order->save();
        return $order;
    }

    public function shipping()
    {
        $user = Auth::user();
        $addresses = $user->addresses()->get();
//        dd($carts);
        return view('shipping', compact('addresses'));
    }

    public function delete()
    {
        $orders = Order::where('dead_line', '<', Carbon::now())->get();
        if (count($orders) > 0) {
            foreach ($orders as $order) {
                $order->delete();
            }
        }
        return response(['message' => 'سفارش مورد نظر حذف گردید.']);
    }

    private function newPayment($order_id)
    {
        $payment = new Payment();
        $payment->user_id = auth()->user()->id;
        $payment->gateway_id = 1;
        $payment->order_id = $order_id;
        $payment->account_name = 'ZarinPal';
        $payment->account_no = '6037701143628508';
        $payment->amount = str_replace(',', '', \Cart::total());
        $payment->currency = 'Toman';
        $payment->paid = 0;
        $payment->save();

        $order = Order::findOrFail($order_id);
        $order->payment_id = $payment->id;
        $order->save();
    }

    public function show_payment()
    {
        return view('payment');
    }

    public function payment($order_id)
    {
        $zarinpal = new Zarinpal($this->MerchantID);

        $order = Order::where('id', $order_id)->first();
        $payment = Payment::where('id', $order->payment_id)->first();
        $amount = $payment->amount;
        $description = 'توضیحات تراکنش تستی'; // Required
        $email = auth()->user()->email; // Optional
        $profile = Profile::where('user_id', Auth::id())->first();
        $contact_no = $profile->contact_no;
        $calbackUrl = 'http://localhost:8000/payment/checker'; // Required
        $results = $zarinpal->request(
            $calbackUrl,
            $amount,
            $description,
            $email,
            $contact_no
        );
        if (isset($results['Authority'])) {
            $payment->transaction_no = $results['Authority'];
            $payment->save();
            $zarinpal->redirect();
        }
    }

    public function checker()
    {
        $zarinpal = new Zarinpal($this->MerchantID);
        $Authority = request('Authority');
        $payment = Payment::where('transaction_no', $Authority)->firstOrFail();
        $authority = $payment->transaction_no;
        $result = $zarinpal->verify('OK', $payment->amount, $authority);
//        return var_dump($result);
        if ($result["Status"] == 'success') {
            $payment->RefID = $result["RefID"];
            $payment->save();
            return redirect('thank-you')->with(['success' => 'سفارش با موفقیت پرداخت گردید.']);
        } else {
            return redirect('thank-you')->with(['error' => 'پرداخت شما با خطا مواجهه شد.']);
        }
    }
}