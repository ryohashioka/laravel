<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * 指定された車の情報を表示
     *
     * @param  String  $name
     * @return \Illuminate\View\View
     */
    public function show($name)
    {
        $users = DB::select('SELECT * FROM users WHERE id = 1');
        \Log::debug($users);

        if($name==="aaa") {
            return view('greeting', [
                'name' => "ハリアー",
                'x' => "1560",
                'y' => "1700",
                'z' => "5000",
            ]);
        } else {
            return view('greeting', ['name' => "huga"]);
        }
    }
}
