@extends('canevas')
 @section('title', 'TODO')
 @section('content')
 <h1>À faire...</h1>
 @if (count($todos) === 0)
 <p>Rien pour le moment ;)</p>
 @else
 <ul>
 @foreach ($todos as $todo)
 <li><a href="/todos/{{$todo->id}}">{{$todo->name}}</a></li>
 @endforeach
 <ul>
 @endif
 @endsection