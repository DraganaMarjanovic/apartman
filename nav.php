

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

 <nav class="navbar navbar-expand-sm navbar-light bg-light ">
            <div class="container">
            <a href="index.php">
          <img src="./image/logo1.png" class="img-fluid" height="60" width="60" alt="logo">
        </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="n_bar">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link text-success <?php if($page == 'index'){echo 'active';} ?>" href="index.php">POČETNA</a></li>
                        <li class="nav-item"><a class="nav-link text-success <?php if($page == 'smeštaj'){echo 'active';} ?>" href="apartman.php">SMEŠTAJ</a></li>
                        <li class="nav-item"><a class="nav-link text-success  <?php if($page == 'posetiti'){echo 'active';} ?>" href="see.php">POSETITI</a></li>
                        <li class="nav-item"><a class="nav-link text-success <?php if($page == 'kontakt'){echo 'active';} ?>" href="contact.php">KONTAKT</a></li>
                     </ul>
                </div>
            </div>
 </nav>