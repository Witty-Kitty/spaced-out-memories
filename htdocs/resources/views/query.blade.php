@extends('main')

@section('content')

{{--{!! Form::open(array('action' => 'spacedController@postQuery')) !!}--}}
<form method="POST" action="spacedController@postQuery">

<input type="date" id="query"><br><br>

<input type="submit" value="Search">

</form>

{{--{{!! Form::close() }}--}}

@stop