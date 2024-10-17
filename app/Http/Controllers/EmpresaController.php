<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function obtenerRatios($symbol)
{
    $client = new \GuzzleHttp\Client([
        'verify' => false // Deshabilitar la verificación SSL
    ]);
    $apiKey = env('ALPHA_VANTAGE_API_KEY');
    $url = "https://www.alphavantage.co/query?function=OVERVIEW&symbol={$symbol}&apikey={$apiKey}";

    try {
        $response = $client->get($url);
        $data = json_decode($response->getBody()->getContents(), true);

        return view('empresa.ratios', ['data' => $data]);

    } catch (\Exception $e) {
        return response()->json(['error' => 'No se pudieron obtener los datos: ' . $e->getMessage()], 500);
    }
}

}
