<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online Voting | Green Syntax</title>

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
    
  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.php" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <span class="normalFont"><a href="admin_login.php" class="btn btn-success navbar-right navbar-btn"><strong>Result Panel</strong></a></span>
        </div>

      </div> <!-- end of container -->
    </nav>
    </div>
    </body>

    <html>
        <head><br><br><br><br>
            <title>Online voting system - Registratrion</title>
            <link rel="stylesheet" href="stylesheet.css">
        </head>
        <body>
      
              <center>
              
  
              <div id="loginSection">
                  <h1>Login</h1>
                  <form action="for_admin.php" method="POST">
                      <input type="name" name="name" placeholder="Enter Name" required><br><br>
                      <input type="password" name="pass" placeholder="Enter password" required><br><br>
                      <!-- <select name="role" style="width: 15%; border: 2px solid black">
                          <option value="1">Voter</option>
                          <option value="2">Group</option> -->
                      </select>                  
                      <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                      <!-- New user? <a href="registration.php">Register here</a> -->
                  </form>
              </div>
  
              </center> 
      </body>
  </html>