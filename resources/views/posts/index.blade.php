@extends('layouts.app')
@section('content')
<div class="jumbotron text-center">
    @if(count($posts)>1)
    <ul class="list-group">
        @foreach($posts as $post)
        <li class="list-group-item">{{$post}}</li>
        @endforeach
    </ul>
    @else
        <p>No Posts Found</p>
    @endif
      
@endsection