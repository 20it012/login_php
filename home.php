<?php
  session_start();
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<h1> Good Morning Everyone</h1>

<a href="php/logout.php?logout_id=<?php echo $_SESSION['unique_id'] ?>" class="logout">Logout</a>
