<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function listMenu()
    {
        $data['menu'] = Menu::all();
        $menu = Menu::all();
        return view('welcome', $data);
    }
}
