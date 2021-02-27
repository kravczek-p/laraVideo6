@extends('layouts.app')
@section('title')
    Все сообщения
@endsection
@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $el)
        <div class="alert alert-info ">
            <h3>{{$el->name}}</h3>
             <p>{{$el->email}}</p>
            <p><small>{{$el->subject}}</small></p>
        </div>
    @endforeach

@endsection


