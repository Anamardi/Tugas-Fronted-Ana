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
    
    function updateTemperature(Request $request, $id){

        $temperature = Temperature::findOrFail($id);
        $temperature->update($request->only(['New value']));
        $temperature->save();

        return response()->json([
            "message"   => "Data temperature berhasil diupdate",
            "data"      => $temperature
        ], 201);
    }

    function destroyTemperature($id){

        $temperature = Temperature::findOrFail($id);
        $temperature->delete();

        return response()->json([
            "message"   => "Data temperature berhasil didelete",
            "data"      => $temperature
        ], 201);
    }
}