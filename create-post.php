  <?php include "head.php" ;?>

    <?php include "navbar.php"; ?>
   
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <!-- Empty Space-->
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <form method="post" action="create-post.php" enctype="multipart/form-data">
        <br>
        <div class="input-group col-sm-6">
          <label for="sel1">Select list (select one):</label>
          <select class="form-control" id="sel1" name="subject">
            <?php 
              include 'db/dbconn.php';

              $getSub = "SELECT * FROM topic";
              $query = mysqli_query($dbcon,$getSub);
              while($row = mysqli_fetch_array($query)){
            ?>
            <option value="<?=$row[0]?>"><?=$row[1]?></option>
            <? } ?>
          </select>
        </div>
        <br>
        <div class="input-group col-sm-6">
          <a href="create-topic.php">Topic Not Found ?</a>
        </div>
        <br>        
        <div class="input-group">
          <span class="input-group-addon">Post Title</span>
          <input id="msg" type="text" class="form-control" name="Ques" placeholder="Heading for the post">
        </div>
        <br>
        <br>        
        <div class="input-group">
          <span class="input-group-addon">Post Body</span>
          <input id="msg" type="text" class="form-control" name="postBody" placeholder="Additional Info">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="addQ">Add Post</button>
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
</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

<?php include "footer.php" ?>

<?php
  if(isset($_POST['addQ'])){
    $subject = $_POST['subject'];
    $ques = $_POST['Ques'];
    $body = $_POST['postBody'];

    $inq = "INSERT into post VALUES (NULL,'$subject','1','$ques','$body',NULL)";
    $query = mysqli_query($dbcon,$inq);
    if($query){
      shout("Post Added");
      loc("index.php");
    }
    else{
      shout("Error $ques $body $query");
    }
  }
?>