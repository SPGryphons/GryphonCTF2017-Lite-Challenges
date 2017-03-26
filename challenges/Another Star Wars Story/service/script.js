$(".alert").find(".close").on("click", function(e) {
    event.stopPropagation();
    event.preventDefault();
    $(this).closest(".alert").slideUp(400);
});

function redirect() {
    setTimeout(function() {
        window.location.href = atob("Y29udHJvbHBhbmVsLmh0bWw=")
    }, 2000)
}

function rebootbar() {
    var percent = 0;
    var percentIncrement = setInterval(function() {
        percent++;
        $("#rebootbar").css('width', percent + '%').attr('aria-valuenow', percent).text(percent + "%");
    }, 10000 / 100);

    var clear = setInterval(function() {
        if (percent >= 100) {
            clearInterval(percentIncrement);
            $("#rebootdone").slideDown('400');
            setTimeout(function() {
                window.location.replace("controlpanel.html");
            }, 2000);
        }
    }, 100);
}
