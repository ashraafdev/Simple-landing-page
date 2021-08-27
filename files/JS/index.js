////// index.js //////
////// Write By Ashraf Hebboul //////

$(window).on('load',function(){

  var iframe = $('#Frame');

  iframe.contents().find('.change_Iframe').click(function() {

    $('#Frame').attr('src','files/iframes/form.php');

  });
});
