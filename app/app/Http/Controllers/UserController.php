<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * 指定ユーザーのプロファイルを表示
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // DB::table('users')
        //       ->where('id', $id)
        //       ->delete();
        // DB::table('users')->insert(
        //     [
        //         'name' => 'Ryo Hashioka',
        //         'email' => 'hashioka@example.com',
        //         'password' => 'hogehoge',
        //     ]
        // );
        $users = DB::table('users')
                    // ->where('name', 'like', '%e%')
                    ->get();
        $user = DB::table('users')
                    ->where('name', 'Kelley Goldner')
                    ->first();

        return view('mypage', [
            'user' => $user,
            'users' => $users
        ]);
    }
}
