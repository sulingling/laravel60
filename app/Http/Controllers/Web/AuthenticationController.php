<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AuthenticationController extends Controller {
    public function getSocialRedirect($account) {
        try {
            return Socialite::with($account)->redirect();
        } catch (\InvalidArgumentException $e) {
            return redirect('/login');
        }
    }
}