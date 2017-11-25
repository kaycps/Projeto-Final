@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">SelectProcess {{ $selectprocess->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/select-process') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/select-process/' . $selectprocess->id . '/edit') }}" title="Edit SelectProcess"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('selectprocess' . '/' . $selectprocess->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete SelectProcess" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $selectprocess->id }}</td>
                                    </tr>
                                    <tr><th> DataInicio </th><td> {{ $selectprocess->dataInicio }} </td></tr><tr><th> DataFim </th><td> {{ $selectprocess->dataFim }} </td></tr><tr><th> Ativo </th><td> {{ $selectprocess->ativo }} </td></tr><tr><th> Descrição </th><td> {{ $selectprocess->descrição }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
