$(document).ready(function () {
    $(".openModal").on("click", function (e) {
        $(".modal").removeClass("invisible");
    });
    $(".closeModal").on("click", function (e) {
        $(".modal").addClass("invisible");
    });

    $(".open").on("click", function (e) {
        $(this)
            .closest(".watchlist-row")
            .find(".modal")
            .removeClass("invisible");
    });
});
