var token = $('meta[name="csrf-token"]').attr("content");

function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

$(window).on("load", function () {
    setTimeout(removeLoader, 2000);
    $(".modal").modal({ backdrop: "static ", keyboard: false });
});

function removeLoader() {
    $("#loadingDiv").fadeOut(500, function () {
        // fadeOut complete. Remove the loading div
        $("#load-background").remove(); //makes page more lightweight
        $("#loadingDiv").remove(); //makes page more lightweight
        $("body").css("overflow", "visible");
    });
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imagePreview").css(
                "background-image",
                "url(" + e.target.result + ")"
            );
            $("#imagePreview").hide();
            $("#imagePreview").fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function () {
    readURL(this);
});

function displayAlert(msgText, cssClass) {
    $('#message-alert').show();
    $('#message-alert-text').text(msgText)
    $('#message-alert-text').addClass(cssClass)
    setTimeout(hideAlert, 3000);
}

function hideAlert() {
    $('#message-alert').hide();

}
