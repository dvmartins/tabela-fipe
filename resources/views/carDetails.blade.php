@extends('layouts.default')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-4">
    <div class="text-lg font-semibold mb-4">
        Descrição do Veículo
    </div>
    <div class="pb-4">
        <table class="table-auto">
            <tr>
                <td class="font-semibold">TipoVeiculo:</td>
                <td>{{ $carDetails['TipoVeiculo'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">Valor:</td>
                <td>{{ $carDetails['Valor'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">Marca:</td>
                <td>{{ $carDetails['Marca'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">Modelo:</td>
                <td>{{ $carDetails['Modelo'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">AnoModelo:</td>
                <td>{{ $carDetails['AnoModelo'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">Combustível:</td>
                <td>{{ $carDetails['Combustivel'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">CódigoFipe:</td>
                <td>{{ $carDetails['CodigoFipe'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">MêsReferencia:</td>
                <td>{{ $carDetails['MesReferencia'] }}</td>
            </tr>
            <tr>
                <td class="font-semibold">SiglaCombustível:</td>
                <td>{{ $carDetails['SiglaCombustivel'] }}</td>
            </tr>
        </table>
    </div>
    <div class="text-center mt-4 space-x-4">
        <button onclick="redirectToHome()" class="px-4 py-2 bg-green-500 text-white rounded mr-4">Voltar</button>
        <button class="px-4 py-2 bg-blue-500 text-white rounded" onclick="printPage()">Imprimir</button>
    </div>
</div>


<script>
    function printPage() {
        window.print();
    }
</script>

<script>
    function redirectToHome() {
        window.location.href = '/cars';
    }
</script>

@endsection
