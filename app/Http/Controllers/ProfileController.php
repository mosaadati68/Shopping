<?php

namespace App\Http\Controllers;

use App\Card;
use App\Order;
use App\Product;
use App\Profile;
use App\Wishlist;
use DemeterChain\C;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::where('user_id', Auth::id())->first();
        $orders = Order::where('user_id', Auth::id())->get();
        $lastWishlists = Wishlist::where('user_id', Auth::id())->get();
        $wishlists = Collection::make([]);
        foreach ($lastWishlists as $lastWishlist) {
            $product = Product::where('id', $lastWishlist->product_id)->get();
            $wishlists->push($product);
        }
        return view('profile', ['profile' => $profile, 'wishlists' => $wishlists, 'orders' => $orders]);
    }

    public function editProfile()
    {
        $userProfile = Profile::where('user_id', Auth::id())->first();
        return view('additionalinfo', ['userProfile' => $userProfile]);
    }

    public function uploadAvatar(Request $request)
    {
        $avatar = $request->file('file');
        $user = Auth::user();
        $avatarName = $user->id . '_avatar' . time() . '.' . $avatar->getClientOriginalExtension();
        $profile = Profile::where('user_id', $user->id)->first();
        $profile->avatar = '/images/avatar/' . $avatarName;
        $profile->save();
        $avatar->move('images/avatar/', $avatarName);
        return response(['success' => 'You have successfully upload image.', 'path' => '/images/avatar/' . $avatarName]);
    }

    public function saveProfile(Request $request)
    {
        $userProfile = Profile::where('user_id', Auth::id())->first();
        if (!$userProfile) {
            $profile = new Profile();
            $profile->user_id = Auth::id();
            $profile->first_name = $request->get('first_name');
            $profile->last_name = $request->get('last_name');
            $profile->email = $request->get('email');
            $profile->contact_no = $request->get('contact_no');
            $profile->national_code = $request->get('national_code');
            $profile->card_number = $request->get('card_number');
            $profile->newsletters = $request->get('newsletters');
            $card_number = new Card();
            $card_number->card_number = $request->get('card_number');
            $card_number->user_id = Auth::id();
            $card_number->save();

            $profile->avatar = '/img/products/img-1.jpg';
            $profile->save();
            return back();
        } else {
            $userProfile->user_id = Auth::id();
            $userProfile->first_name = $request->get('first_name');
            $userProfile->last_name = $request->get('last_name');
            $userProfile->email = $request->get('email');
            $userProfile->contact_no = $request->get('contact_no');
            $userProfile->national_code = $request->get('national_code');
            $userProfile->card_number = $request->get('card_number');
            $userProfile->newsletters = $request->get('newsletters');
            $card = Card::where('user_id', Auth::id())->first();
            $card->card_number = $request->get('card_number');
            $card->user_id = Auth::id();
            $card->save();

            $userProfile->avatar = '/img/products/img-1.jpg';
            $userProfile->save();
            return back();
        }
    }

    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success' => $imageName]);
    }

    public function fileDestroy(Request $request)
    {
        $filename = $request->get('filename');
        ImageUpload::where('filename', $filename)->delete();
        $path = public_path() . '/images/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
}


