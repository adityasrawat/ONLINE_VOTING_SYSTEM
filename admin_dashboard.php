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
    </body><br><br><br><br>

    <?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>

<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <center>
    <body>

        
            <center>
            <div id="headerSection">
            <!-- <a href="logging.php"><button id="back-button"> Back</button></a> -->
            <a href="index.php"><button id="logout-button">Logout</button></a>
            <h1>Admin DashBoard</h1>  
            </div>
            </center>
            <hr>

            <div id="mainSection">
                <div id="profileSection">
                    <!-- <div style = background-color:#79b746; -->
                   <b> <b><h2>Admin Details</h2></b></b><br>
                    <center><img src="uploaded images/<?php echo $data['photo']?>" height="100" width=""></center><br>
                    <b>Name : </b><?php echo $data['name'] ?><br><br>
                    <!-- <b>Mobile Number : </b><?php echo $data['mobile'] ?><br><br> -->
                    <!-- <b>Address : </b><?php echo $data['address'] ?><br><br> -->
                    <!-- <b>Status : </b><?php echo $status ?> -->
                </div>
                
                <div id="groupSection">
                    <?php

                    if(isset($_SESSION['groups'])){
                        $groups = $_SESSION['groups'];
                        for($i=0; $i<count($groups); $i++){
                            ?>
                                <div style="border-bottom: 1px solid #79b746; margin-bottom: 10px">
                                <img style="float: right" src="uploaded images/<?php echo $groups[$i]['photo']?>" height="200" width="">
                                <h2><u>Group Details</u></h2><br><br><br>
                                <b>Group Name :</b><?php echo $groups[$i]['name']?><br><br>
                                <b>Number Of Votes :</b> <?php echo $groups[$i]['votes']?>
                                <br><br><br><br>
                                <form method="POST" action="vote.php"> 
                                <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                                <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
                                <?php 
                                

                                if($_SESSION['status']==1){
                                    ?>
                                    <?php
                                }
                                else{
                                    ?>
                                    <?php
                                }
                                ?>
                                </form>
                                </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                            <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                                <b>No groups available right now.</b>    
                            </div>
                        <?php
                    }  
                    ?>
                </div>
            </div>
            
    </body>
    </center> 
</html>