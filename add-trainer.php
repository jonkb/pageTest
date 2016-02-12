<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <title>TicTrainer registration for trainers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylesheets/normalize.css" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="stylesheets/github-light.css" media="screen">
  </head>
  <body>
    <section class="page-header">
      <h1>Trainer Account Registration</h1>
    </section>
    
    <section class="main-content">

<?php
  $first_name = $_POST['fName']; // required
  $birth_date = $_POST['birth']; //required
  $password = $_POST['password']; //required
  $password_confirm = $_POST['passwordConf']; //required
  
  if($password == $password_confirm){
    //Actually add the data to the database
    echo 'New Account:';
    echo 'Name: ' . $first_name;
    echo 'Birth Date: ' . $birth_date;
    echo 'User ID: ' . 't1111';//replace with the next open spot from the database
    echo 'RECORD YOUR USER ID';
    echo 'THIS IS NEEDED TO LOG IN';
  }
  else{
    echo 'ERROR: Password and Password confirmation do not match!';
  }
  
?>

    </section>


</body>
</html>
