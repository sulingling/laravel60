<?php
namespace app\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AppController extends Controller {
    public function getApp() {
        return view('app');
    }

    public function getLogin() {
        echo "123";die;
        return view('login');
    }
}