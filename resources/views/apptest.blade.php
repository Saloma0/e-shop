@extends('layouts.app')
@section('content')

@foreach($apiArray as $api)

<h1>Nome:</h1>
{{$api['price']}} 
<br>


@endforeach

@endsection

