// // $('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$(window).on('load', function(){
  setTimeout(removeLoader, 2000); //wait for page load PLUS two seconds..
// console.log("Page Load...!");
});
function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#load-background" ).remove(); //makes page more lightweight 
      $( "#loadingDiv" ).remove(); //makes page more lightweight
      $('body').css("overflow", "visible"); 
  });  
}


