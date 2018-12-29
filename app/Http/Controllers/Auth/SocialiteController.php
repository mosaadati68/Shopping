<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Auth;

class SocialiteController extends Controller
{
    /**
     **_ Redirect the user to the OAuth Provider.
     * _**
     **_ @return Response
     * _**/
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * _ Obtain the user information from provider.  Check if the user already exists in our
     * _ database by looking up their provider_id in the database.
     * _ If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * _ redirect them to the authenticated users homepage.
     * _
     * _ @return Response
     * _/
     * public function handleProviderCallback($provider)
     * {
     * $user = Socialite::driver($provider)->user();
     *
     * $authUser = $this->findOrCreateUser($user, $provider);
     * Auth::login($authUser, true);
     * return redirect($this->redirectTo);
     * }
     *
     * /**
     * _ If a user has registered before using social auth, return the user
     * _ else, create a new user object.
     * _ @param  $user Socialite user object
     * _ @param $provider Social auth provider
     * _ @return  User
     */
    public function handleProviderCallback($provider)
    {
        try {
            $Github_User = Socialite::driver($provider)->user();
            dd($Github_User);
            $authUser = User::where('provider_id', $Github_User->id)->first();
            if ($authUser) {
                Auth::loginUsingId($authUser->id);
                return redirect()->route('home');
            }else {
                $createdUser = User::create([
                    'name' => $Github_User->name ? $Github_User->name : $Github_User->nickname,
                    'email' => $Github_User->email,
                    'password' => Hash::make('secret'),
                    'provider' => $provider,
                    'provider_id' => $Github_User->id
                ]);
                Auth::loginUsingId($createdUser->id);
                return redirect()->route('home');
            }
        } catch (Exception $e) {
            return redirect()->route('home');
        }
    }
}
