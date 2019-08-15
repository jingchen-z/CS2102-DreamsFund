<?php
 session_start();
?>
<!DOCTYPE html>  
<head>
  <title>Administrator modifies database.</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>li {list-style: none;}</style>
</head>
<body>
  <?php
    $id = $_SESSION['administratorID'];
    echo "<li>Administrator Account:$id</li> <br />
    <li>Database: CrowdFunding</li>";
  ?>
  <ul>
    <form name="display" action="administrator.php" method="POST" >
      <li><a href="create.php">Create Entries</a></li>
      <br />
      <li><a href="modify.php">Modify Entries</a></li>
      <br />
      <li><a href="delete.php">Delete Entries</a></li>
    </form>
  </ul>
</body>
</html>
