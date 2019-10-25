<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

    /**
     *  获取用户一条信息
     * @author sulingling
     * @DateTime 2019-10-25
     * @version  [version]
     * @return   [type]     [description]
     */
    public static function getUserOne($providerId = '', $account = '') {
        return self::where('provider_id', '=', $providerId)
            ->where('provider', '=', $account)
            ->first();
    }

    public static function userSetSave($socialUser) {
        $modle              = new self();
        $modle->name        = $socialUser->getName();
        $modle->email       = $socialUser->getEmail() == '' ? '' : $socialUser->getEmail();
        $modle->avatar      = $socialUser->getAvatar();
        $modle->password    = '';
        $modle->provider    = $account;
        $modle->provider_id = $socialUser->getId();
        return $modle->save();
    }
}