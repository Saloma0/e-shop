@extends('layouts.app')
@section('content')

@for($i=0;$i<count($results);$i++)

@foreach($results as $result)
<h1>Nome:</h1>
{{$result[$i]['name']}} 
<br>

@endforeach

@endfor

@endsection

