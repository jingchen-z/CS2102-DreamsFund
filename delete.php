<?php
 session_start();
?>
<!DOCTYPE html>  
<head>
  <title>Administrator deletes entries.</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>li {list-style: none;}</style>
</head>
<body>
  <h2>Delete Entries:</h2>
  <li><a href="administrator.php">Back</a></li>
  <ul>
    <form name="display" action="delete.php" method="POST" >
      <div class="row form-group">
				<div class="col-md-6">
						<label for="table">Table</label>
				</div>
				<div class="col-md-12">
					<select id="table" name="table">
					  <option value="users">users</option>
					  <option value="project_initiated_by">project_initiated_by</option>
						<option value="administrators">administrators</option>
					</select>
				</div>
			</div>
      <li><input type="submit" name="submit" /></li>
    </form>
  </ul>
  <?php
    $db     = pg_connect("host=localhost port=5432 dbname=CrowdFunding user=postgres password=370305");	
    $tableName = "$_POST[table]";
    if (isset($_POST['submit'])) {
      if ($tableName == "users") {
  			echo "<ul><form name='update' action='delete.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li> 
    	  <li>email:</li>  
    	  <li><input type='text' name='email'/></li>  
    	  <li><input type='submit' name='delete' value = 'Delete'/></li>
    	  </form>  
    	  </ul>";
      }
      if ($tableName == "project_initiated_by") {
  			echo "<ul><form name='update' action='delete.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li> 
    	  <li>projectid:</li>  
    	  <li><input type='number' name='projectid'/></li>
    	  <li><input type='submit' name='delete' value = 'Delete'/></li>  
    	  </form>  
    	  </ul>";
      }
      /*
      if ($tableName == "category") {
  			echo "<ul><form name='update' action='delete.php' method='POST' >
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li>
    	  <li>category_name:</li>  
    	  <li><input type='text' name='category_name'/></li>
    	  <li><input type='submit' name='delete' value = 'Delete'/></li>
    	  </form>  
    	  </ul>";
      }
      */
      if ($tableName == "administrators") {
  			echo "<ul><form name='update' action='delete.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li> 
    	  <li>accountid:</li>  
    	  <li><input type='text' name='accountid'/></li>
    	  <li>password:</li>  
    	  <li><input type='text' name='password'/></li>
    	  <li><input type='submit' name='delete' value = 'Delete'/></li>  
    	  </form>  
    	  </ul>";
      }
    }
    
    if (isset($_POST['delete'])) {
      if ($_POST[table] == "users") {
        $result = pg_query($db, "UPDATE users
            SET is_active = 'FALSE'
            WHERE email = '$_POST[email]'"); 
				if (!$result) {
          echo "Delete failed!";
        } else {
          echo "Delete successful!";
        }
      }
      
      if ($_POST[table] == "project_initiated_by") {
        $result = pg_query($db, "UPDATE project_initiated_by 
            SET status = 'DISABLED'
            WHERE	project_id = '$_POST[projectid]'");
				if (!$result) {
          echo "Delete failed!";
        } else {
          echo "Delete successful!";
        }
      }
      /*
      if ($_POST[table] == "category") {
        $result = pg_query($db, "UPDATE category 
            SET is_active = 'FALSE' 
            WHERE category_name = '$_POST[category_name]'"); 
				if (!$result) {
          echo "Delete failed!";
        } else {
          echo "Delete successful!";
        }
      }
      */
      if ($_POST[table] == "administrators") {
        $result = pg_query($db, "UPDATE administrators 
            SET is_active = 'FALSE'
            WHERE account_id = '$_POST[Uaccountid]'"); 
				if (!$result) {
          echo "Delete failed!";
        } else {
          echo "Delete successful!";
        }
      }
    }
    ?>  
</body>
</html>
