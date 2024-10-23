$(document).ready(function() {
    $("form").on("submit", function() {
        var username = $("#username").val();
        var password = $("#password").val();

        if (username == "" || password == "") {
            alert("All fields must be filled out");
            return false;
        }
    });
});
