////// dashboard.js //////
////// Write By Ashraf Hebboul //////

$(window).on('load',function(){

  $('#changeToUsers').click(function() {

    $('#Frame').attr('src','files/iframes/admins-management.php');

  });

  $('#changeToData').click(function() {

    $('#Frame').attr('src','files/iframes/collected-data.php');
    
  });

  $('#logout').click(function() {

    $('#Frame').attr('src','files/iframes/logout.php');
    
  });


  var seconds = 0;

  setInterval(function() {

    seconds++;

    if (localStorage.getItem('moveToAddAdmin') === 'True') {

      $('#Frame').attr('src','files/iframes/add-admin.php');
      localStorage.clear();

    }

    if (localStorage.getItem('status') === 'logout') {
      location.href = '/win a macbook project/administrator/admin.php';
      localStorage.clear();
    }
  
  }, 500);

});
