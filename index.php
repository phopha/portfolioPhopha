<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Edu+AU+VIC+WA+NT+Arrows:wght@400..700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

  </head>

  <body> 

    <!-- section navigation -->
    <header>
      <nav class="navbar bg-body-tertiary d-flex justify-content-center fixed-top py-2">
        <div class="container mx-0">
          <a class="navbar-brand" href="#">
            <img src="./picture/portfolio.svg" alt="Logo" width="30" class="d-inline-block align-text-top">
            Portfolio
          </a>

          <button type="button" class="btn btn-dark ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
            login
          </button>

        </div>

      </nav>

    </header>

    <!-- main body page -->
    <article class="container d-flex flex-column" style="height: 300vh">
      <!-- section Login Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modalCustom">
          <div class="modal-content ">
            <div class="modal-header">
              <h5 class="modal-title fs-2 ms-2" id="exampleModalLabel">Login for your portfolio</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <div class="modal-body d-flex flex-column ">

              <!-- personal picture -->
              <div class="mb-4  d-flex justify-content-center ">
                <div class="person border border-secondary border-5 rounded-circle d-flex justify-content-center align-items-center">
                  <img class="personImage rounded-circle d-block align-items-center" src="./picture/unknownPerson.jpg" alt="person" >
                </div>

              </div>

              <!-- login form -->
              <form class="loginForm mx-3" id="formLogin" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <label for="user" class="form-label">Username</label><br>
                <input class="form-control" id="user" type="text" name="username"><br>

                <label for="pass" class="form-label">Password</label><br>
                <input class="form-control" id="pass" type="password" name="password"><br>

              </form>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input class="btn btn-primary" type="submit" name="login" value="login" form="formLogin">

            </div>

          </div>

        </div>

      </div>

      <!-- intruduction web -->
      <div class="container d-flex justify-content-center align-items-center">
        <div class="thisFirst f-3 p-4 my-5">This Web for simulation of keeping users' portfoilo</div>

      </div>

      <!-- part of telling example of user and password for test -->
      <div class="container examAccount bg-white p-1 d-flex flex-column">
        <div class="thisSecond pt-3">This is the simulation accounts'user for testing</div>

        <!-- Card -->
        <div class="allCard row row-cols-2 row-cols-md-2 g-4 m-3 d-flex justify-content-center" >
        <div class="col">
          <div class="card h-100" >
            <img src="./picture/phopha.jpg" class="card-img-top img1" alt="...">
            <div class="card-body pb-1">
              <h5 class="card-title">Account 1</h5>
              <class="card-text">
                <strong>Username:</strong>  Phopha<br>
                <strong>Password:</strong>  Pupa123
                
              </p>

            </div>

          </div>

        </div>

        <div class="col">
          <div class="card h-100">
            <img src="./picture/girl.jpg" class="card-img-top img2" alt="...">
            <div class="card-body pb-1">
              <h5 class="card-title">Account 2</h5>
              <p class="card-text">
              <strong>Username:</strong>  Jib<br>
              <strong>Password:</strong>  jKo178
              </p>

            </div>

          </div>

        </div>

      </div>

      </div>




    </article>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="function_1.js"></script>

  </body>
</html>

<?php
  
  // if user got click the login button
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // check user type in input user and password form.
    if(isset($_POST['username']) && isset($_POST['password'])){

      // kept in session for used in another page
      $_SESSION['name'] = $_POST['username'];
      $_SESSION['pass'] = $_POST['password'];

      if($_SESSION['name'] == "Phopha" && $_SESSION['pass'] == "Pupa123"){
        header("Location: ./portfolio.php");
      }
      else if($_SESSION['name'] == "Jib" && $_SESSION['pass'] == "jKo178"){
        header("Location: ./portfolio.php");
      }

      
    }
  }

  
?>

