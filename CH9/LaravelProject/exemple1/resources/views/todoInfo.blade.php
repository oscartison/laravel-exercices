@extends('canevas')
@section('content')
@foreach ($todo as $tache)
    <h1>Tâche : {{$tache->name}}</h1>
    <p>{{$tache->description}}</p>
    <a href="/todos">Retourner au menu</a>
    @endforeach
@endsection
