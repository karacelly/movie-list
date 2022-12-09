$(document).ready(function () {
    $("#openModal").on("click", function (e) {
        $("#modal").removeClass("invisible");
    });
    $(".closeModal").on("click", function (e) {
        $("#modal").addClass("invisible");
    });
});
