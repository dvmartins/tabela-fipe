@extends('layouts.default')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Consulta Tabela Fipe</h1>
    <form id="carForm" action="/cars/search" method="get" class="space-y-4">
        <div class="flex items-center space-x-4">
            <div class="w-1/6">
                <label for="marca" class="block">Marca:</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="marca" name="marca">
                    @foreach ($marcas as $marca)
                        <option value="{{ $marca['codigo'] }}">{{ $marca['nome'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-1/6">
                <label for="modelo" class="block">Modelo:</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="modelo" name="modelo"></select>
            </div>
            <div class="w-1/6">
                <label for="ano" class="block">Ano:</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="ano" name="ano"></select>
            </div>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Pesquisar</button>
    </form>

    <div class="mt-8">
        <table class="table-auto w-full" id="resultado">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700" scope="col">Marca</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700" scope="col">Modelo</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-700" scope="col">Ano</th>
                </tr>
            </thead>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#marca').change(function() {
                var marca = $(this).val();

                // Buscar modelos
                $.get('/api/modelos/' + marca, function(data) {
                    var select = $('#modelo');
                    select.empty();

                    $.each(data, function(index, value) {
                        select.append('<option value="' + value.codigo + '">' + value.nome + '</option>');
                    });

                    // Disparar o evento change para preencher os anos
                    select.trigger('change');
                });
            });

            $('#modelo').change(function() {
                var marca = $('#marca').val();
                var modelo = $(this).val();

                // Buscar anos
                $.get('/api/anos/' + marca + '/' + modelo, function(data) {
                    var select = $('#ano');
                    select.empty();

                    $.each(data, function(index, value) {
                        select.append('<option value="' + value.codigo + '">' + value.nome + '</option>');
                    });
                });
            });

            // Disparar o evento change para preencher os modelos e anos
            $('#marca').trigger('change');

            // Evento de envio do formulário
            $('#carForm').submit(function(e) {
                e.preventDefault();

                // Adicionar uma nova linha à tabela com os valores dos campos selecionados
                $('#resultado').append('<tr><td>' + $('#marca option:selected').text() + '</td><td>' + $('#modelo option:selected').text() + '</td><td>' + $('#ano option:selected').text() + '</td></tr>');
            });

            $('#carForm').submit(function(e) {
                e.preventDefault();

                var marca = $('#marca').val();
                var modelo = $('#modelo').val();
                var ano = $('#ano').val();

                // Redirect to the car details page
                window.location.href = '/cars/details?marca=' + marca + '&modelo=' + modelo + '&ano=' + ano;
            });
       });
    </script>
@endsection
