<?php

namespace App\Http\Controllers;

use App\Services\FipeService;
use Illuminate\Http\Request;


class FipeController extends Controller
{
    protected $fipeService;

    public function __construct(FipeService $fipeService)
    {
        $this->fipeService = $fipeService;
    }

    public function index()
    {
        $marcas = $this->fipeService->getMarcas();

        return view('cars', ['marcas' => $marcas]);
    }

    public function getModelos($marca)
    {
        $modelos = $this->fipeService->getModelos($marca);

        return response()->json($modelos);
    }

    public function getAnos($marca, $modelo)
    {
        $anos = $this->fipeService->getAnos($marca, $modelo);

        return response()->json($anos);
    }

    public function getCarDetails(Request $request)
    {
        $marca = $request->input('marca');
        $modelo = $request->input('modelo');
        $ano = $request->input('ano');

        $carDetails = $this->fipeService->getCarDetails($marca, $modelo, $ano);

        return view('carDetails', ['carDetails' => $carDetails]);
    }
}
