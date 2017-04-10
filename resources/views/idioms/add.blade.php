@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj nowy idiom</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    {{ Form::open(array('action' => array('IdiomsController@newIdiom'))) }}
                    {{ Form::label('idiom_en', 'Idiom') }}
                    {{ Form::text('idiom_en') }}
                    {{ Form::label('use_example_en', 'Przykład użycia') }}
                    {{ Form::text('use_example_en') }}
                    {{ Form::label('idiom_pl', 'Idiom') }}
                    {{ Form::text('idiom_pl') }}
                    {{ Form::label('use_example_pl', 'Przykład użycia') }}
                    {{ Form::text('use_example_pl') }}

                    {{ Form::submit('Click Me!') }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection