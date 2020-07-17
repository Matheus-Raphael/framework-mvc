@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-deck">
                    <div class="card text-white bg-danger">
                        <div class="card-header text-center">Estudos atrasados</div>
                        <div class="card-body">
                            <p class="card-text text-center">@if(isset($estudosAtrasados)) {{ $estudosAtrasados }} @else 0 @endif</p>
                        </div>
                    </div>
                    <div class="card text-white bg-primary">
                        <div class="card-header text-center">Estudos em andamento</div>
                        <div class="card-body">
                            <p class="card-text text-center">@if(isset($estudosAndamento)) {{ $estudosAndamento }} @else 0 @endif</p>
                        </div>
                    </div>
                    <div class="card text-white bg-success">
                        <div class="card-header text-center">Estudos concluídos</div>
                        <div class="card-body">
                            <p class="card-text text-center">@if(isset($estudosConcluidos)) {{ $estudosConcluidos }} @else 0 @endif</p>
                        </div>
                    </div>
                </div>

                <!-- <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Você está logado! -->

            </div>
        </div>
    </div>
</div>
</div>
@endsection