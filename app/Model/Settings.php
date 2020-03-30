<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Settings extends Model
{
    public static function infoSekolah()
    {
        $data = DB::table('infoschools')->first();
        return $data;
    }
}
