
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
$('.multy  img').click(function() {
    var object = $('.topDescr > img');
    var atribut = $(this).attr("src");
    var delay = 300;

        
        object.attr("src",atribut);

});
$('.back').click(function() {

});






/**/
});

/*ajax*/

function query(name,data) {

    var str = '';


    $.each(data.split('.'), function(k,v) {
        str += '&'+ v + '=' +$('#'+v).val();
    });

    $.ajax({
        url:'../php/main.php',
        type: 'POST',
        data:  str,
        cache: false,
        success : function(data) {

            var dataSplit = data.split('~');

            var errorId = $( " .error ").each(function() {});

            for (var i = 1; i <= dataSplit.length; i+=3) {
                var errorText = [dataSplit[i]]
                
            }
            var errorName = for (var i = 2; i <= dataSplit.length; i+=3) {
                
            }
            console.log(errorName)
            for (var i = 3; i <= dataSplit.length; i+=3) {
                
            }


            for (var i = 0; i < dataSplit.length; i++) {
                 for (var j = 0; j < errorId.length; j++) {
                    if (dataSplit[i] == errorId[j].id) {
                       
                    }
                }
            }
    }

    })
}
/**/