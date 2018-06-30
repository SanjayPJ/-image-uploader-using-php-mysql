<?php include 'includes/functions.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Upload _IMAGE</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <style>
    body{
    font-family: 'Cabin', sans-serif;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center my-3 mt-5">Upload images</h2>
      <p class="text-center text-muted">Instructions: 1.File must be in the format of <span class="text-success">jpeg, jpg, png</span>
      2.File size must be exactly <span class="text-success">2 MB</span><br>
    </p>
    <form action="index.php" action="index.php" method="post" enctype="multipart/form-data">
      <div class="input-group">
        <div class="custom-file">
          <input name="image" type="file" class="custom-file-input" id="inputGroupFile04">
          <label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
        </div>
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" name="img_submit">Upload</button>
        </div>
      </div>
    </form>
        <?php 
        if(isset($success_log)){
          echo "<div class='alert alert-success mt-2'>$success_log</div>";
        }else{
          if (isset($error_log)){
            echo "<div class='alert alert-danger mt-2'>";
            print_r($errors);
            echo "</div>";
          }
        }
        ?>
  </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>