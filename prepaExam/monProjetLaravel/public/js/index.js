function load() {
    $(".sub").remove();
    $value = $("#course-select").val();
    $.get("pae/students/" + $value, function (jsData, status) {
        let pae = jsData["pae"];
        for (i = 0; i < pae.length; i++) {
            $("#msg").append(`<div class="sub"> <p id=${pae[i]["name"]}>` + "name: " + pae[i]["name"] + " lib: " + pae[i]["lib"] + " credits: " + pae[i]["credits"] + "</p></div>");

        }
    });
    $(document).on('click', 'p', function () {
        deleteCourse($(this).attr('id'))
    });
}

function deleteCourse($course) {
    $value = $("#course-select").val();
    console.log($value);
    $.post(`/pae/students/delete/${$value}/${$course}`, {
        id: $value, course: $course
    },
        function (data, status) { $(`#${$course}`).remove(); })
}


$(document).ready(function (e) {
    load();
    $("#course-select").change(function () {
        load();      
    });

});

