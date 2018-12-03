<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $email = $request->get('email');
        if (!Newsletter::isSubscribed($email)) {
            Newsletter::subscribePending($email);
            return response()->json('عضویت شما با موفقیت ثبت گردید.');
        }
        return response()->json('ایمیل وارد شده در خبرنامه ثبت شده است.');
    }
}
