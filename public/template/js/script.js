$(document).ready(function() {
    window.onscroll = function () {
        stickyheader()
    };
    var header = document.getElementById("masthead");
    var headers = document.getElementById("header");
    var sticky = header.offsetHeight;

    function stickyheader() {
        if (window.pageYOffset > sticky) {
            headers.classList.add("sticky");
        } else {
            headers.classList.remove("sticky");
        }
    }

    var acounter = 0;
    $('#BigAIO .box-hover .button-quick a').click(function () {
        $('#PopupProduct').removeClass('hide');
        $('.popup-content').addClass('hide');
        $('#BigAIOPopup').removeClass('hide');


    });
    $('.close-popup a').click(function () {
        $('#PopupProduct').addClass('hide');
        $('.popup-content').addClass('hide');
    });
    $('.search-button a').on('click', function (event) {
        event.stopPropagation();
        $("#SearchFrom").slideToggle();
    });
    $('body').click(function (event) {
        if (!$('#SearchFrom').is(event.target) && $('#SearchFrom').has(event.target).length === 0) {
            $('#SearchFrom').slideUp();
        }
    });
    $('.mobile-menu-buttons a,.closemenu a,.content-menu a').click(function () {
        $("#MenuMobile").toggle("slide");
    });
    $("#ATPLeadForm").submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "/api_sendsms.php",
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#AjaxLoader").removeClass("hide");
            },
            success: function () {
                $("#AjaxLoader").addClass("hide");
                $("#AjaxMessages").removeClass("hide");
                $("#AjaxMessages").html("Đăng ký thành công. Chúng tôi sẽ liên hệ với bạn ngay!");
                location.href = "/thanh-toan";
            },
            error: function () {
                $("#AjaxLoader").addClass("hide");
                $("#AjaxMessages").removeClass("alert-success hide");
                $("#AjaxMessages").addClass("alert-danger");
                $('#AjaxMessages').html('Đăng ký thất bại. Hãy liên hệ bộ phận kỹ thuật!');
                location.href = "/lien-he";
            }
        });
    });
    $('#header a[href*="#"]').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000, 'linear');
    });
    /*
    ======================================
    [ Support Online ]
    ======================================
    */
    $(document).ready(function () {

        $('a.btn-support').click(function (e) {
            e.stopPropagation();
            $('.support-content').slideToggle();
        });
        $('.support-content').click(function (e) {
            e.stopPropagation();
        });
        $(document).click(function () {
            $('.support-content').slideUp();
        });
    });
});
