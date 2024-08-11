@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <button class="bnt btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#createGame">Vytvořit hru</button>
    
    <!-- Modal -->
    <div
        class="modal fade"
        id="createGame"
        tabindex="-1"
        role="dialog"
        aria-labelledby="createGameLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createGameLabel">
                        Vytvořit hru
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">Opravdu si přejete vytvořit novou hru?</div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Zrušit
                    </button>
                    <button id="createGameSubmision" type="button" class="btn btn-primary">Potvrdit</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script type="module">
        $(document).ready(function () {
            $('#createGameSubmision').click(function () {
                const action = window.routes.game.create;
                window.location.href = action;
            });
        });
    </script>
@stop
