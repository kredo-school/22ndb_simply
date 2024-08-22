
$(document).ready(function() {
    $("#image-upload").change(function() {
        readURL(this);
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $("#image-icon").hide();
            $("#current-image").hide();
            $("#image-preview").attr("src", e.target.result);
            $("#image-preview").show();
        };

        reader.readAsDataURL(input.files[0]);
    }
}
