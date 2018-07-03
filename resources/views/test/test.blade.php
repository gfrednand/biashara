@extends('layouts.app')
@section('content')
<div class="jumbotron ">
    @foreach($name as $n)
<h3><a href="#">{{$n->name}}</a></h3>
    <small>Written On: {{$n->created_at}}</small>
    @endforeach
     
</div>

@endsection
