@extends('canevas')
@section('content')


<form action="/chat" method="post">
    @csrf
    <label for="channel">Choose a channel:</label>

    <select name="channel" id="channel-select" method="post">
        @foreach ($channels as $channel)
        <option value="{{$channel->id}}">{{$channel->name}} </option>
        @endforeach
    </select>

    <label for=> login: </label>
    <input type="text" name="login" id="login-select" method="post"><br>

    <input type="submit" value="Submit">
</form>

@endsection