<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class FipeService
{
    const URL = 'https://parallelum.com.br/fipe/api/v1/carros/marcas/';

    public function getMarcas()
    {
        $uri = self::URL;
        $response = Http::get($uri);

        return $response->json();
    }

    public function getModelos($marca)
    {
        $uri = self::URL . $marca . '/modelos';
        $response = Http::get($uri);

        return $response->json()['modelos'];
    }

    public function getAnos($marca, $modelo)
    {
        $uri = self::URL . $marca . '/modelos/' . $modelo . '/anos';
        $response = Http::get($uri);

        return $response->json();
    }

    public function getCarDetails($marca, $modelo, $ano)
    {
        // URL da API da FIPE
        $url = self::URL . $marca . '/modelos/' . $modelo . '/anos/' . $ano;

        // Faz a solicitação à API da FIPE
        $response = Http::get($url);

        // Converter a resposta JSON em um array associativo PHP
        $carDetails = $response->json();

        return $carDetails;
    }





}
