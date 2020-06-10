
    // jQuery('.atp-call a').attr('data-name', '/');
var modal = document.getElementById('FormModalATP');
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
jQuery('.close-crm-modal').click(function () {
    modal.style.display = 'none';
});

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return;
}

var formcrm_hoten = getCookie('hoten');
var formcrm_sdt = getCookie('sdt');
// jQuery('.btn-check-down,.btn-checkdown a').click(function () {
//     if (formcrm_hoten !== undefined && formcrm_sdt !== undefined) {
//         window.open('/download/' + jQuery(this).data('id'), '_blank');
//     } else {
//         jQuery('#SubmitFormATP').text('Tải Phần Mềm');
//         jQuery('#FormModalATP .formRight h4').text('Đăng ký tải phần mềm ATP Software');
//         modal.style.display = 'block';
//         jQuery('#idproduct').val(jQuery(this).data('id'));
//         jQuery('#formnameproduct').val(jQuery(this).data('name'));
//     }
// });
// jQuery('.btn-form-crm,.btn-formcrm a').click(function () {
//     jQuery('#SubmitFormATP').text('Mua Phần Mềm');
//     jQuery('#FormModalATP .formRight h4').text('Đăng ký mua phần mềm ATP Software');
//     modal.style.display = 'block';
//     jQuery('#idproduct').val('');
//     jQuery('#formnameproduct').val(jQuery(this).data('name'));
// });
// jQuery("#FormCRMATP").submit(function (event) {
//     event.preventDefault();
//     jQuery.ajax({
//         type: 'POST',
//         url: og_ajax_object.ajax_url,
//         data: new FormData(this),
//         processData: false,
//         contentType: false,
//         dataType: 'json',
//         beforeSend: function () {
//             jQuery('#SubmitFormATP').text('Đang gửi ...');
//         },
//         success: function (result) {
//             console.log(result);
//             if (result.status == 'success') {
//                 if (result.idproduct != '') {
//                     window.open('/download/' + result.idproduct, '_blank');
//                     setTimeout(function () {
//                         window.location.href = ""
//                     }, 2000);
//                 } else {
//                     alert('Nhân viên ATP sẽ liên lạc hỗ trợ anh/chị trong ít phút!!!');
//                     window.location.href = "";
//                 }
//             } else {
//                 window.location.href = "https://atpsoftware.vn/lien-he";
//             }
//         },
//         error: function (ResultError) {
//             console.log(ResultError);
//         },
//     });
// });
//
// (function (w, d, s, l, i) {
//     w[l] = w[l] || [];
//     w[l].push({
//         'gtm.start':
//             new Date().getTime(), event: 'gtm.js'
//     });
//     var f = d.getElementsByTagName(s)[0],
//         j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
//     j.async = true;
//     j.src =
//         'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
//     f.parentNode.insertBefore(j, f);
// })(window, document, 'script', 'dataLayer', 'GTM-TWN77TT');
//
// var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
// (function () {
//     var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
//     s1.async = true;
//     s1.src = 'https://embed.tawk.to/560fb9c63e33bee649f598d6/1blfpntq9';
//     s1.charset = 'UTF-8';
//     s1.setAttribute('crossorigin', '*');
//     s0.parentNode.insertBefore(s1, s0);
// })();
    $('#BigAIO .box-hover .button-quick a').click(function () {
        $('#PopupProduct').removeClass('hide');
        $('.popup-content').addClass('hide');
        $('#BigAIOPopup').removeClass('hide');

        var employee_id = $(this).attr("id");
        $.get('shop/detail/'+ employee_id , function (data) {
            console.log(data);
            $('#contentDetailProduct').html(data['html']);

        });
    });

    $('.close-popup a').click(function () {
        $('#PopupProduct').addClass('hide');
        $('.popup-content').addClass('hide');
    });
