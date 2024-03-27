<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Temperatures;
use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    function getTemperature()
    {
        // variabel di php tidak perlu tipe data,
        // nama variable diawali tanda $
        // mengambil semua data temperature
        $temperature = Temperatures::all();
        // mengambalikan response dalam bentuk JSON
        // dan status code 200
        return response()->json([
            "message"   => "Data temeperature berhasil diambil",
            "data"      => $temperature
        ], 200);
    }
}