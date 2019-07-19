<?php
/*
 * @Discription: 登录
 * @Author: 徐卫东
 * @Date: 2019-06-24 16:03:24
 * @LastEditors: 徐卫东
 * @LastEditTime: 2019-07-19 09:35:39
 */

namespace App\Http\Controllers\Home\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function callback()
    {
        return view('welcome');
    }
}
