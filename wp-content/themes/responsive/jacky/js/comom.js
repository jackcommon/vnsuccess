;(function($, win){

  
  $(function(){
    var pathname = $(location).attr("href") ; 

    $(".related_stories").find(".related ul li").each(function() {
      var position =  $(this).children().attr("href");
      

      if( position == pathname ) {

        $(this).css( "display" , "none" );
      };
    });
  });

}(jQuery, window)); 