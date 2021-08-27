
function deleteUser() {
  location.href = "deleteUser.php";
}

function addCookie(cookie_name) {
  cookie_name = cookie_name.toString();
  document.cookie = "username="+cookie_name;
  deleteUser();
}