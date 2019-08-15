<?php
 session_start();
?>
<!DOCTYPE html>  
<head>
  <title>Administrator logs in.</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>li {list-style: none;}</style>
</head>
<body>
  <h2>Administrator sign in</h2>
  <ul>
    <form name="display" action="administratorLogIn.php" method="POST" >
      <li>Account:</li>
      <li><input type="number" name="id" /></li>
      <li>Password:</li>
      <li><input type="text" name="password" /></li>
      <li><input type="submit" name="submit" /></li>
    </form>
  </ul>
  <?php
    $db     = pg_connect("host=localhost port=5432 dbname=CrowdFunding user=postgres password=370305");	
    $result = pg_query($db, "SELECT * FROM administrators WHERE administrators.account_id = '$_POST[id]'");
    $row    = pg_fetch_assoc($result);
    if (isset($_POST['submit'])) {
      if ($row == null) {
  			echo "Account Cannot Be Found!";
      } else {
        $passwordInDatabase = "$row[password]";
        $enteredPassword = "$_POST[password]";
        $_SESSION['administratorID'] = $ID;
        if ($passwordInDatabase == $enteredPassword) {
          echo '<meta http-equiv="refresh" content="0; URL= administrator.php" />';
        } else {
          echo "Wrong Password!";
        }
      }
    }
    ?>  
</body>
</html>
