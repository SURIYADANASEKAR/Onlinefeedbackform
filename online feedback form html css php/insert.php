<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'feedb');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$SNAME=$_POST['firstName'];
$MAIL=$_POST['email'];
$FNAME=$_POST['lastName'];
$SKNOW=$_POST['flexRadioDefault'];
$INTERCLASS=$_POST['class'];
$UTIME=$_POST['time'];
$FEEDBACK=$_POST['feedback'];
$sql= "INSERT INTO feedback (sname,mail,fname,sknow,interclass,utime,feedback) VALUES('$SNAME','$MAIL','$FNAME','$SKNOW','$INTERCLASS','$UTIME','$FEEDBACK')";
if(!mysqli_query($link,$sql)){
    echo"not inserted";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>RIT-faculty feedback</title>
    <link href="img/PicsArt_03-24-12.10.53.png" rel="icon">
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
      * {
        box-sizing: border-box;
        margin:0;
        padding: 0;
      }

      body {
        font-family: 'Raleway', sans-serif;
        background: #344a72;
        color: #fff;
        line-height: 1.8;
      }

      a {
        text-decoration: none;
      }

      #container {
      }

      .form-wrap {
        background: #fff;
        color: #333;
      }

      .form-wrap h1,
      .form-wrap p {
        text-align: center;
      }

      .form-wrap .form-group {
        margin-top: 15px;
      }

      .form-wrap .form-group label {
        display: block;
        color: #666;
      }

      .form-wrap .form-group input {
        width: 100%;
        padding: 10px;
        border: #ddd 1px solid;
        border-radius: 5px;
      }

      .form-wrap button {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background: #49c1a2;
        color: #fff;
        cursor: pointer;
      }

      .form-wrap button:hover {
        background: #37a08e
      }

      .form-wrap .bottom-text {
        font-size: 13px;
        margin-top: 20px;
      }

      footer {
        text-align: center;
        margin-top: 10px;
      }

      footer a {
        color:#49c1a2
      }
      a {
        color:#fff;
        }
    </style>
  </head>
  <body>
    <div id="container" class="col-md-8 mx-auto">
      <div class="form-wrap mt-5 ml-2">
        <h1>Thankyou</h1>
        <p>Your response is submitted</p>
        
      </div>
    </div>
  </body>
</html>


