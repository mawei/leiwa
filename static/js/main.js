$(function () {
    $('.style3_qhtl  a').click(function () {
        var index = $(this).index();
        $(this).addClass('ahover').siblings().removeClass('ahover');
        $(".style3_qhcon").eq(index).show().addClass('active').siblings().removeClass('active').hide();
    });

    $(".topbtn").click(function () {
        $('body,html').animate({scrollTop: 0}, 1000);
    })




});