@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Witaj !</div>

                <div class="panel-body">
                    @if (Auth::guest())
                    Witaj w aplikacji Fiszki. Zaloguj się na swoje konto lub założ nowe.
                    @endif
                    
                    @if (!Auth::guest())
                    Baw się dobrze.
                    @endif
            </div>
        </div>
    </div>
</div>
@endsection
