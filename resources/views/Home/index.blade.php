@extends('Layouts.menu')

@section('title', "Inicio")

@section('styles')
    <link href="{{ URL:: asset('css/home_index.css')}}" rel="stylesheet">
@endsection

@section('scripts')
    
@endsection

@section('body')

<div class="contenedor">

<div style="margin-bottom: 50px; margin-top:50px">
<h1>Bienvenidos a la pagina de inicio</h1>
<hr>
</div>

<div class="contenedor">
<h3 style="color:red;">Integrantes</h3>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Carnet</strong></td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gerald Ramirez</td>
                <td>B86389</td>
            </tr>
            <tr>
                <td>Ever Machado</td>
                <td>B91212</td>
            </tr>
            <tr>
                <td>Jafet Hernandez</td>
                <td>B81212</td>
            </tr>
        </tbody>
</table>
</div>

</div>

@endsection