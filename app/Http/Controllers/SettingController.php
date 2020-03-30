<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use App\Model\Settings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function infoSekolah()
    {
        $data['menu'] = Menu::all();
        $data['info_sekolah'] = Settings::infoSekolah();
        return view('website.info-sekolah', $data);
    }
}
