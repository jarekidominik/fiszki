@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Sprawdź się !</div>

                <div class="panel-body">

                    @if(!isset($exam)) 
                    {{ Form::open(array('action' => array('ExamsController@newExam'))) }}

                    <div class="form-group">
                        <input type="submit" name="newTesthh" id="newTesthh" class="btn btn-success btn-lg btn-block" value="Nowy test"/>
                    </div>
                    {{ Form::close() }}
                    @endif
                    @if(isset($exam))
                    {{ Form::open(array('action' => array('ExamsController@checkExam'))) }}
                    <div class="form-group">
                        <div class="row text-right">
                            <label  class="col-md-4 control-label">Poprawne odpowiedzi:</label>
                            <label  class="col-md-2 control-label">{{$exam->correct_words}}</label>
                            <label  class="col-md-4 control-label">Niepoprawne odpowiedzi:</label>
                            <label  class="col-md-2 control-label">{{$exam->incorrect_words}}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <label  class="col-md-4 control-label">Podaj tłumaczenie poniższego zwrotu:</label>
                            <input type="hidden" name="id" id="id" value="{{$exam->id}}" class="form-control">
                            <label for="idiom" class="col-md-12">{{$idiom->idiom_en}}</label>
                            <input type="hidden" name="idiom_en" value="{{$idiom->idiom_en}}"/>
                            <input type="hidden" name="idiom_pl" value="{{$idiom->idiom_pl}}"/>
                        </div>                       
                        <input type="text" name="idiom_answer" id="id_idiom_answer" value="" title="Wpisz tłumaczenie" class="col-md-10 form-control" style="margin-bottom: 15px">                                                                  
                        <input type="submit" name="newTesthh" id="newTesthh" class="btn btn-check btn-lg btn-block" value="Sprawdź"/>                                                    
                    </div>
                    {{ Form::close() }} 


                    {{ Form::open(array('action' => array('ExamsController@endExam'))) }} 
                    <input type="hidden" name="id" id="id" value="{{$exam->id}}" class="form-control">

                    <div class="form-group">
                        <input type="submit" name="newTesthh" id="newTesthh" class="btn btn-success btn-lg btn-block" value="Zakończ test"/>
                    </div>   
                    {{ Form::close() }}
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


