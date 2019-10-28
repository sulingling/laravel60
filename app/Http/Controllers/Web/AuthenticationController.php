<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller {

    public function getSocialRedirect($account) {
        try {
            return Socialite::with($account)->redirect();
        } catch (\InvalidArgumentException $e) {
            return redirect('/login');
        }
    }

    public function getSocialCallback($account) {
        echo $account;die;
        $socialUser = Socialite::driver('github')->user();
        echo "<pre>";
        print_r($socialUser);die;
        // 从第三方 OAuth 回调中获取用户信息
        // $socialUser = Socialite::with($account)->user();
        // echo "<pre>";
        // print_r($socialUser->token);die;
        // // 在本地 users 表中查询该用户来判断是否已存在
        // $getUserOne = Users::getUserOne($socialUser->id, $account);
        // if (empty($getUserOne)) {
        //     // 如果该用户不存在则将其保存到 users 表
        //     $getUserOne = Users::userSetSave($socialUser);
        // }

        // // 手动登录该用户
        // Auth::login($user);

        // // 登录成功后将用户重定向到首页
        // return redirect('/');
    }
}