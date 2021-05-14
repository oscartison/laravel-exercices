@extends('canevas')
@section('content')
<label for="pet-select">Choose a student:</label>

<select name="course" id="course-select" method="get">
    @foreach ($students as $student)
    <option value="{{$student->id}}">{{$student->id}} {{$student->name}} {{$student->credits}}</option>
    @endforeach
</select>
<div id="msg"></div>
<script>
    $(document).ready(function() {
        $("#course-select").change(function() {
            $("#msg").empty();
            $value = $("#course-select").val();
            $.get("pae/students/" + $value, function(jsData, status) {
                let pae = jsData["pae"];
                for (i = 0; i < pae.length; i++) {
                        $("#msg").append("<p>" + "name: " + pae[i]["name"]+" lib: " + pae[i]["lib"] +" credits: " +  pae[i]["credits"] + "</p>");
                    }
            });
        });
    });
</script>




@endsection