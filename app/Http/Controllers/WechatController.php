<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WechatController extends Controller
{
    public function serve()
    {
        Log::info('request arrived.');

        $server = app('easywechat.official_account')->getServer();

        $server->with(function($message){
            return "欢迎关注 lmdfx！";
        });

        return $server->serve();
    }
}
