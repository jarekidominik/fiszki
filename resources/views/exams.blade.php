@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    {{ Form::open(array('action' => array('ExamsController@newExam'))) }} 

                    <div class="form-group">
                        <input type="submit" name="newTesthh" id="newTesthh" class="btn btn-success btn-lg btn-block" value="Nowy test"/>
                    </div>
                    {{ Form::close() }}



                    {{ Form::open(array('action' => array('ExamsController@endExam'))) }} 
                    
                    <?php
                    if (isset($exam)) {
?>
                        <input type="text" name="id" id="id" value="{{$exam->id}}" class="form-control">
  <?php   }
                    ?>
                    <div class="form-group">
                        <input type="submit" name="newTesthh" id="newTesthh" class="btn btn-success btn-lg btn-block" value="Zakończ test"/>
                    </div>
                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


