<?php
/*
 * @Discription: 登录
 * @Author: 徐卫东
 * @Date: 2019-06-24 16:03:24
 * @LastEditors: 徐卫东
 * @LastEditTime: 2019-07-24 18:29:52
 */

namespace App\Http\Controllers\Home\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Huoshaotuzi\Sociate\Sociate;
class LoginController extends Controller
{
    /**
     * @discription: 
     * @param {type} 
     * @return: 
     * @Author: 徐卫东
     */
    public function index()
    {
        return view('home.auth.login');
    }
    /**
     * @discription: 登录回调
     * @param {type} 
     * @return: 
     * @Author: 徐卫东
     */
    public function qq()
    {
        $sociate = new Sociate();
        $driver = $sociate->driver('qq');
        $accessToken = $driver->getAccessToken();
        $user = $driver->getUserInfo($accessToken);
        dd($user);
    }
}
