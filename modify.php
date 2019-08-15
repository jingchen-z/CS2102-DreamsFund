<?php
 session_start();
?>
<!DOCTYPE html>  
<head>
  <title>Administrator updates entries.</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <style>li {list-style: none;}</style>
</head>
<body>
  <h2>Update Entries:</h2>
  <li><a href="administrator.php">Back</a></li>
  <ul>
    <form name="display" action="modify.php" method="POST" >
      <div class="row form-group">
				<div class="col-md-6">
						<label for="table">Table</label>
				</div>
				<div class="col-md-12">
					<select id="table" name="table">
					  <option value="users">users</option>
					  <option value="project_initiated_by">project_initiated_by</option>
						<option value="fund">fund</option>
						<option value="category">category</option>
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
  			echo "<ul><form name='update' action='modify.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li> 
    	  <li>email:</li>  
    	  <li><input type='text' name='email'/></li>  
    	  <li><input type='submit' name='next' value = 'Next'/></li>
    	  </form>  
    	  </ul>";
      }
      if ($tableName == "project_initiated_by") {
  			echo "<ul><form name='update' action='modify.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li> 
    	  <li>projectid:</li>  
    	  <li><input type='number' name='projectid'/></li>
    	  <li><input type='submit' name='next' value = 'Next'/></li>  
    	  </form>  
    	  </ul>";
      }
      
      if ($tableName == "fund") {
  			echo "<ul><form name='update' action='modify.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li> 
    	  <li>transaction_id:</li>  
    	  <li><input type='number' name='transaction_id'/></li>  
    	  <li><input type='submit' name='next' value = 'Next'/></li>  
    	  </form>  
    	  </ul>";
      }
      
      if ($tableName == "category") {
  			echo "<ul><form name='update' action='modify.php' method='POST' >
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li>
    	  <li>category_name:</li>  
    	  <li><input type='text' name='category_name'/></li>
    	  <li><input type='submit' name='next' value = 'Next'/></li>
    	  </form>  
    	  </ul>";
      }
      
      if ($tableName == "administrators") {
  			echo "<ul><form name='update' action='modify.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='table' value = '$tableName'/></li> 
    	  <li>accountid:</li>  
    	  <li><input type='text' name='accountid'/></li>
    	  <li>password:</li>  
    	  <li><input type='text' name='password'/></li>
    	  <li><input type='submit' name='next' value = 'Next'/></li>  
    	  </form>  
    	  </ul>";
      }
    }
    
    if (isset($_POST['next'])) {
      if ($_POST[table] == "users") {
        $result = pg_query($db, "SELECT * FROM users where email = '$_POST[email]'");
        $row    = pg_fetch_assoc($result);
        echo "<ul><form name='update' action='modify.php' method='POST' >
    			<li>Table:</li>  
      	  <li><input type='text' name='Table' value = '$tableName'/></li>
      	  <li>email:</li>  
      	  <li><input type='text' name='Uemail' value = '$row[email]' /></li>  
      	  <li>password:</li>  
      	  <li><input type='text' name='Upassword' value = '$row[password]'/></li>  
      	  <li>transaction_password</li>
      	  <li><input type='text' name='Ut_password' value = '$row[transaction_password]'/></li>  
      	  <li>first_name:</li>  
      	  <li><input type='text' name='Ufirst_name' value = '$row[first_name]'/></li>
      	  <li>last_name:</li>  
      	  <li><input type='text' name='Ulast_name' value = '$row[last_name]'/></li>
      	  <li>location(optional):</li>  
      	  <li><input type='text' name='Ulocation' value = '$row[location]'/></li>
      	  <li><input type='submit' name='update' value = 'Update'/></li>
      	  </form>  
      	  </ul>";
      }
      
      if ($_POST[table] == "project_initiated_by") {
        $result = pg_query($db, "SELECT * FROM project_initiated_by where project_id = '$_POST[projectid]'");
        $row    = pg_fetch_assoc($result);
        echo "<ul><form name='update' action='modify.php' method='POST' > 
    			<li>Table:</li>  
      	  <li><input type='text' name='Table' value = '$tableName'/></li>
      	  <li>projectid:</li>  
      	  <li><input type='number' name='Uprojectid' value = '$row[project_id]'/></li>
      	  <li>title:</li>  
      	  <li><input type='text' name='Utitle' value = '$row[title]'/></li>  
      	  <li>resourceurl(optional):</li>
      	  <li><input type='text' name='Uresourceurl' value = '$row[resource_url]'/></li>  
      	  <li>description:</li>  
      	  <li><input type='text' name='Udescription' value = '$row[description]'/></li>
      	  <li>startdate:</li>  
      	  <li><input type='date' name='Ustartdate' value = '$row[start_date]'/></li>
      	  <li>duration_of_months:</li>  
      	  <li><input type='number' name='Uduration_of_months' value = '$row[duration_of_months]'/></li>
      	  <li>funding_sought:</li>  
      	  <li><input type='number' name='Ufunding_sought' value = '$row[funding_sought]'/></li>
      	  <li>bank_account:</li>  
      	  <li><input type='text' name='Ubank_account' value = '$row[bank_account]'/></li>
      	  <li>status:</li>  
      	  <li><input type='text' name='Ustatus' value = '$row[status]'/></li>
      	  <li>country:</li>  
      	  <li><input type='text' name='Ucountry' value = '$row[country]'/></li>
      	  <li>city:</li>  
      	  <li><input type='text' name='Ucity' value = '$row[city]'/></li>
      	  <li>initiator:</li>  
      	  <li><input type='text' name='Uinitiator' value = '$row[initiator]'/></li>
      	  <li>category:</li>  
      	  <li><input type='text' name='Ucategory' value = '$row[category]'/></li>
      	  <li><input type='submit' name='update' value = 'Update'/></li>  
      	  </form>  
      	  </ul>";
      }
      
      if ($_POST[table] == "fund") {
        $result = pg_query($db, "SELECT * FROM fund where transaction_id = '$_POST[transaction_id]'");
        $row    = pg_fetch_assoc($result);
        echo "<ul><form name='update' action='modify.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='Table' value = '$tableName'/></li> 
    	  <li>transaction_id:</li>  
    	  <li><input type='number' name='Utransaction_id' value = '$row[transaction_id]'/></li>  
    	  <li>bank_account:</li>  
    	  <li><input type='text' name='Ubank_account' value = '$row[bank_account]'/></li>  
    	  <li>funding_amount</li>
    	  <li><input type='number' name='Ufunding_amount' value = '$row[funding_amount]'/></li>  
    	  <li>funding_user(optional):</li>  
    	  <li><input type='text' name='Ufunding_user' value = '$row[funding_user]'/></li>
    	  <li>funded_project(optional):</li>  
    	  <li><input type='number' name='Ufunded_project' value = '$row[funded_project]'/></li>
    	  <li>timestamp_of_donation:</li>  
    	  <li><input type='text' name='Utimestamp_of_donation' value = '$row[timestamp_of_donation]'/></li>
    	  <li><input type='submit' name='update' value = 'Update'/></li>  
    	  </form>  
    	  </ul>";
      }
      
      if ($_POST[table] == "category") {
        $result = pg_query($db, "SELECT * FROM category where category_name = '$_POST[category_name]'");
        $row    = pg_fetch_assoc($result);
        echo "<ul><form name='update' action='modify.php' method='POST' >
  			<li>Table:</li>  
    	  <li><input type='text' name='Table' value = '$tableName'/></li>
    	  <li>category_name:</li>  
    	  <li><input type='text' name='Tcategory_name' value = '$row[category_name]'/></li>
    	  <li><input type='text' name='Ucategory_name'/></li>
    	  <li><input type='submit' name='update' value = 'Update'/></li>
    	  </form>  
    	  </ul>";
      }
      
      if ($_POST[table] == "administrators") {
        $result = pg_query($db, "SELECT * FROM administrators where account_id = '$_POST[accountid]'");
        $row    = pg_fetch_assoc($result);
        echo "<ul><form name='update' action='modify.php' method='POST' > 
  			<li>Table:</li>  
    	  <li><input type='text' name='Table' value = '$tableName'/></li> 
    	  <li>accountid:</li>  
    	  <li><input type='text' name='Uaccountid' value = '$row[account_id]'/></li>
    	  <li>password:</li>  
    	  <li><input type='text' name='Upassword' value = '$row[password]'/></li>
    	  <li><input type='submit' name='update' value = 'Update'/></li>  
    	  </form>  
    	  </ul>";
      }
    }
    
    if (isset($_POST['update'])) {
      if ($_POST[Table] == "users") {
        $result = pg_query($db, "UPDATE users SET
									password = '$_POST[Upassword]', 
									transaction_password = '$_POST[Ut_password]',
									first_name = '$_POST[Ufirst_name]', 
									last_name = '$_POST[Ulast_name]', 
									location = '$_POST[Ulocation]'
									WHERE email = '$_POST[Uemail]'"); 
				if (!$result) {
          echo "Update failed!";
        } else {
          echo "Update successful!";
        }
      }
      
      if ($_POST[Table] == "project_initiated_by") {
        echo "11";
        $result = pg_query($db, "UPDATE project_initiated_by 
          SET title = '$_POST[Utitle]',
              resource_url = '$_POST[Uresourceurl]',
              description = '$_POST[Udescription]',
              start_date = '$_POST[Ustartdate]',
              duration_of_months = '$_POST[Uduration_of_months]',
              funding_sought = '$_POST[Ufunding_sought]',
              bank_account = '$_POST[Ubank_account]',
              status = '$_POST[Ustatus]',
              country = '$_POST[Ucountry]',
							city = '$_POST[Ucity]',
							initiator = '$_POST[Uinitiator]',
							category = '$_POST[Ucategory]'
					WHERE project_id = '$_POST[Uprojectid]'"); 
				if (!$result) {
          echo "Update failed!";
        } else {
          echo "Update successful!";
        }
      }
      
      if ($_POST[Table] == "fund") {
        $result = pg_query($db, "UPDATE fund SET
									bank_account = '$_POST[Ubank_account]', 
									funding_amount = $_POST[Ufunding_amount],
									funding_user = '$_POST[Ufunding_user]', 
									funded_project = '$_POST[Ufunded_project]',
									timestamp_of_donation = '$_POST[Utimestamp_of_donation]'
									WHERE transaction_id = '$_POST[Utransaction_id]'"); 
				if (!$result) {
          echo "Update failed!";
        } else {
          echo "Update successful!";
        }
      }
      
      if ($_POST[Table] == "category") {
        $result = pg_query($db, "UPDATE category SET
									category_name = '$_POST[Ucategory_name]'
									WHERE category_name = '$_POST[Tcategory_name]'"); 
				if (!$result) {
          echo "Update failed!";
        } else {
          echo "Update successful!";
        }
      }
      
      if ($_POST[Table] == "administrators") {
        $result = pg_query($db, "UPDATE administrators SET
									password = '$_POST[Upassword]'
									WHERE account_id = '$_POST[Uaccountid]'"); 
				if (!$result) {
          echo "Update failed!";
        } else {
          echo "Update successful!";
        }
      }
    }
    ?>  
</body>
</html>
