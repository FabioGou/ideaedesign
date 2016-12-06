@extends('master')

@section('conteudo')

    <div class="row">
        <div class="col-md-12 topo">
            <div class="row">
                <div class="col-md-10 col-md-offset-9">
                    {{link_to('login', 'Acessar', ['class'=>'btn btn-primary btn-lg'])}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1 corpo">
            <h1>{{$env}}</h1>
            <div class="texto">Sistema Web</div>
        </div>
    </div>

@stop