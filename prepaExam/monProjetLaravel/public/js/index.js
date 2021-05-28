function load() {
    $("#msg").empty();
    $value = $("#course-select").val();
    $.get("pae/students/" + $value, function(jsData, status) {
        let pae = jsData["pae"];
        for (i = 0; i < pae.length; i++) {
                $("#msg").append(`<p id=${pae[i]["name"]}>` + "name: " + pae[i]["name"]+" lib: " + pae[i]["lib"] +" credits: " +  pae[i]["credits"] + "</p>");

            }
    });
    $(document).on('click','p',function(){
        deleteCourse($(this).attr('id'))
     });
}

function deleteCourse($course) {
    $value = $("#course-select").val();
    console.log($value);
}


$(document).ready(function() {
    load();
    $("#course-select").change(function() {
        load();
    });
    
});

