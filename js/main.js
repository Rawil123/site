
$(document).ready(function() {

/*tabs*/
(function($){
    jQuery.fn.lightTabs = function(options){
           var createTabs = function(){
            tabs = this;
            i = 0;
 
            showPage = function(i){
                $(tabs).children("div").children("div").hide();
                $(tabs).children("div").children("div").eq(i).show();
                $(tabs).children("ul").children("li").removeClass("active");
                $(tabs).children("ul").children("li").eq(i).addClass("active");
            }
 
            showPage(0);               
 
            $(tabs).children("ul").children("li").each(function(index, element){
                $(element).attr("data-page", i);
                i++;
            });
 
            $(tabs).children("ul").children("li").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });
        };
        return this.each(createTabs);
    };
})(jQuery);
$("#tabs").lightTabs();
	
/*multy vie*/

//Активное изображение по умолчанию 
var imgs = $('.multy  img');
$(imgs).addClass('activeImg');
removeImg('.activeImg','.topDescr > img');

$('.multy  img').click(function() {

    
    //Ставим флажок активности изображения
    $('.multy  img').removeClass('activeImg');
    $(this).addClass('activeImg');

    //Заменяем изоброжение в топе на активное
    var src = $(this).attr('src');
    var mainImg = $('.topDescr > img');

    // Скрипт происходит если это 2 разных изображения
    if (src != mainImg.attr('src')) { 
        removeImg('.activeImg','.topDescr > img',500);
    }
});

//Навигация при помощи стрелок 
$('.next').click(function() {
    var next = $('.activeImg').next();
    if (next[0].tagName == 'IMG') {
        $('.multy  img').removeClass('activeImg');
        $(next).addClass('activeImg');

        removeImg('.activeImg','.topDescr > img',500);
    }

});

$('.back').click(function() {
    var prev = $('.activeImg').prev();
    if (prev[0].tagName == 'IMG') {
        $('.multy  img').removeClass('activeImg');
        $(prev).addClass('activeImg');
        
        removeImg('.activeImg','.topDescr > img',500);
    }
});

//Увеличение элемента
fullscreen('.topDescr > img');
//Show filter
$('#showleFilter').click(function() {
    var $this = $('#filter');
    var theClass = $this.attr('class');
    if (theClass != 'active') {
        $this.css({'left':'1%','transform':'scale(1)','opacity':'1'});
        $this.toggleClass('active');
    }
    else {
        $this.css({'left':'-100%','transform':'scale(0)','opacity':'0'});
        $this.toggleClass('active');
    }
})




/**/
});

/*ajax*/
function query(name,data) {

    var count = query.count++;


    var str = '';


    $.each(data.split('.'), function(k,v) {
        str += '&'+ v + '=' +$('#'+v).val();
    });
        str += '&'+ name + '=' + name;

    $.ajax({
        url:'../php/main.php',
        type: 'POST',
        data:  str,
        cache: false,
        success : function(data) {
            
            console.log(data);
             $(".error").text(data).fadeIn();

             setTimeout(function() {
                $(".error").fadeOut();
             },5000);

        }
    })


}