@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seja Bem Vindo</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <h3>Editais Abertos:</h3>
                        <br>
                        
                        
                        <a href="{{ url('select-process') }}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Saiba Mais</a>
                    </div>
                   
                     
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
