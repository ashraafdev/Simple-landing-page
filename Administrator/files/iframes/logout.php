
<?php
  session_start();
  session_destroy();
  echo '<script>localStorage.setItem("status","logout")</script>';
?>