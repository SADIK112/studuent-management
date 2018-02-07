<?php

    $message = '';
        if(isset($_POST['btn'])){

            require_once './Student.php';

            $student = new Student();
            $message = $student -> save_student_info($_POST);

        }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BUY SHOP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        
        .well{
            width: 80%;
            height: auto;
            margin: 0 auto;
        }
        h1{
            text-align: center;
            color: #1d7989;
        }
        
    </style>
  
  </head>
  <body>
    
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="StudentBootstrap.php">Add Student</span></a></li>
            <li><a href="view_student.php">View Student</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
</nav>
  
<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12">
            <h1><?php echo $message; ?></h1>
        </div>
    </div>
</div>
   
<hr>
   
<div class="container">
    <div class="row">
        <div class="col-md-12 col-ms-12">
            <div class="well">
                <form action="" method="post" class="form-horizontal">
                      <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">Student Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName3" name="student_name" placeholder="Your name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPhone3" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPhone3" name="phone_number" placeholder="Phone number">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" name="email_address" placeholder="Email">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="inputAddress3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" rows="4" cols="40" id="Address" name="address" placeholder="address"></textarea>
                        </div>
                      </div>
                         <div class="form-group">
                             <label for="inputAddress3" class="col-sm-2 control-label">Publication Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="publication_status">
                                <option>---Select Publication Status---</option>
                                <option>Published</option>
                                <option>Unpublished</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success btn-block" name="btn">Save Student Info</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>