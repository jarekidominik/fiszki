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
                    <div class="form-group">
                        <label for="idiom_en">Idiom angielski</label>
                        <input type="text" name="idiom_en" id="idiom_en" class="form-control">
                    </div>
                        
                    <div class="form-group">
                        <label for="idiom_pl">Idiom polski</label>
                        <input type="text" name="idiom_pl" id="idiom_pl" class="form-control">
                    </div>
                        
                    <div class="form-group">   
                        <label for="use_example_en">Użycie angielskie</label>
                        <input type="text" name="use_example_en" id="use_example_en" class="form-control">
                    </div>
                        
                    <div class="form-group">
                        <label for="use_example_pl">Użycie polskie</label>
                        <input type="text" name="use_example_pl" id="use_example_pl" class="form-control">
                    </div>
                        
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block">
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection