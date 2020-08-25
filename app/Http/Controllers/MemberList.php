<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;

class MemberList extends Controller
{
    /**
     * 顯示應用程式的所有使用者列表。
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return view('home.index', ['users' => $users]);
    }
}