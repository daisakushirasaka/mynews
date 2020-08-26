<?php

/*
1,ControllerとRoutingについてわからないことを書き出してメンターに質問してみましょう。
2,Controllerの役割について、説明してください。

3,ControllerとRoutingの役割について、説明してください。

*/

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //Action追加
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}


?>