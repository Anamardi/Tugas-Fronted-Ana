<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Temperature;
use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    function getTemperature()
    {

        $temperature = Temperature::all();

        return response()->json([
            "message"   => "Data temeperature berhasil diambil",
            "data"      => $temperature
        ], 200);
    }

    function insertTemperature(Request $request){
        
        $value = $request->temperature;

        $temperature = Temperature::create([
            'value' => $value
        ]);

        return response()->json([
            "message"   => "Data temperature berhasil ditambahkan",
            "data"      => $temperature
        ], 201);
    }

    function putTemperature(Request $request){
        $value = $request->temperature;

        $temperature = Temperature::create([
            'value' => $value
        ]);
        return response()->json([

        ], 201);
    }
}