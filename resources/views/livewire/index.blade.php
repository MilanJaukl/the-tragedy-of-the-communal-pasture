@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>


    <x-adminlte-card title="Lightblue Card" theme="lightblue" theme-mode="outline"
    icon="fas fa-lg fa-envelope" header-class="text-uppercase rounded-bottom border-info"
    removable>
    A removable card with outline lightblue theme...
</x-adminlte-card>

<div class="position-absolute start-50 top-50">
    <x-adminlte-alert theme="danger" title="Danger">
        Danger theme alert!
    </x-adminlte-alert>
</div>
@stop

@section('footer')



@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
