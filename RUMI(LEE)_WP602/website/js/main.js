$(document).ready(function() {
    $(window).scroll(function() {

        if ($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
            if ($('.space').attr("class").indexOf("slide") < 0)
                $('.space').addClass('slide');
        } else {
            if ($('.space').attr("class").indexOf("slide") > 0)
                $('.space').removeClass('slide');
        }
    });
});

$("#myModal5").on('hidden.bs.modal', function(e) {
    $("#myModal5 iframe").attr("src", $("#myModal5 iframe").attr("src"));
});
