@extends('canevas')
@section('content')
<style>
  p {
    color: red;
    margin: 5px;
    cursor: pointer;
  }
  p:hover {
    background: yellow;
  }
  </style>
<label for="pet-select">Choose a student:</label>

<select name="course" id="course-select" method="get">
    @foreach ($students as $student)
    <option value="{{$student->id}}">{{$student->id}} {{$student->name}} {{$student->credits}}</option>
    @endforeach
</select>
<div id="msg"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/index.js') }}"></script>



@endsection