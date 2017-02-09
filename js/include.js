function removeImg(activeImg,mainImg,delay) {
    var src = $(activeImg).attr('src');
    var mainImg = $(mainImg);



    mainImg.fadeOut(delay);
    setTimeout(function() {mainImg.attr('src',src);},500);
    mainImg.fadeIn(delay);
}
//Выйти из полноэкранного режима
function exitFull(what) {
	$('#exitFull').click(function() {
		$('#fullBg').remove();
		$(what).toggleClass('fullImg');
	})
}
//Войти в полноэкранный режим 
function fullscreen(what) {
	var fullHtml = "<div id='fullBg'><span id='exitFull'></span></div>";
	$(what).click(function() {
		$('body').append(fullHtml);
		$(what).toggleClass('fullImg');
		console.log($(what));
		exitFull(what);
	})
}