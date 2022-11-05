

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
  <title>Perfect place</title>
</head>

<body>

<nav>

    <div class="navbar navbar-light bg-light"> 
         <a class="navbar-brand"  href="index.php">
          <img src="./image/logo.png" class="img-fluid" height="150" width="150" alt="logo">
        </a>

      <ul class="nav"> 

         <li class="nav-item ">
          <a class="nav-link  m-3 text-success  <?php if($page == 'index'){echo 'active';} ?>" href="index.php">POČETNA</a>
         </li> 
        <li class="nav-item ">
          <a class="nav-link m-3 text-success <?php if($page == 'smeštaj'){echo 'active';} ?>"href="apartman.php">SMEŠTAJ</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link m-3 text-success <?php if($page == 'posetiti'){echo 'active';} ?> " href="see.php">POSETITI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link m-3 text-success <?php if($page == 'kontakt'){echo 'active';} ?>" href="contact.php">KONTAKT</a>
        </li>
      </ul>
     </div> 
  


</nav>