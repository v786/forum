  <?php include "head.php" ;?>

    <?php include "navbar.php"; ?>
   
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <!-- Empty Space-->
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Add New Subject</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <form method="post" action="create-topic.php" enctype="multipart/form-data">      
        <div class="input-group">
          <span class="input-group-addon">Title</span>
          <input id="msg" type="text" class="form-control" name="name" placeholder="Add a brief topic">
        </div>
        <br>
        <div class="input-group">
          <span class="input-group-addon">Description</span>
          <input id="msg" type="text" class="form-control" name="branch" placeholder="Additional Info About The Topic">
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary" name="addSub">Add Topic</button>
      </form>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>\
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
<?php include "footer.php" ?>
<?php
  include "db/dbconn.php";
  if(isset($_POST['addSub'])){
    $subject = $_POST['name'];
    $branch = $_POST['branch'];

    $inq = "INSERT into topic VALUES (NULL,'$subject','$branch', NULL)";
    $query = mysqli_query($dbcon,$inq);
    if($query){
      shout("Topic Added");
    }
    else{
      shout("Error");
    }
  }
?>
