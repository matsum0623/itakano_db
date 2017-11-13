$(function(){
	$("ul.gl_menu").hide();
	$(".menu").click(function(){
		$(this).toggleClass("menuOpen").next().slideToggle();
	});
});

$(function(){
$('a[href^=#]').click(function(){
var speed = 500;
var href= $(this).attr("href");
var target = $(href == "#" || href == "" ? 'html' : href);
var position = target.offset().top;
$("html, body").animate({scrollTop:position}, speed, "swing");
return false;
});
});


//トップへ戻るボタン
$(function() {
    var topBtn = $('#to_top');   
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});