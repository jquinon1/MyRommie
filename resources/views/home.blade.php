@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bievenido</div>

                <div class="panel-body">
                    {{ Auth::user()->nombre ." ". Auth::user()->apellido }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
