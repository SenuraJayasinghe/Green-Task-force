<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>GTF front page</title>
  <link rel="stylesheet" type="text/css" href="style1.php">
  <link rel="stylesheet" type="text/css" href="homestyle.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
   
       
      
<nav class="navbar">
        <div class="navbar__container">
        <ul class="navbar__menu">
            <li class="navbar__item">
            <a href="Home.php" class="navbar__links" >Home</a>
            </li>
            <li class="navbar__item">
            <a href="GTFformlog.php" class="navbar__links">GTF Member</a>
            </li>
            <li class="navbar__item">
            <a href="collectform.php" class="navbar__links" id="about-page">Collecting Staff</a>
            </li>
            <li class="navbar__item">
          <a href="Captainform.php" class="navbar__links" id="services-page">Captain</a>
            </li>
            <li class="navbar__item">
            <a href="Adminlogin.php" class="navbar__links" id="services-page">Admin</a>
            </li>
        </ul>
    </div>
    </nav>
  
  <!-- <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
      <h2 style="color:white;text-align:center;">Register</h2>
  	  <label style="color: black;font-weight: bold;">Username</label>
  	  <input  type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color: black;font-weight: bold;">Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color: black;font-weight: bold">Password </label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label style="color: black;font-weight: bold;">Confirm password </label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="GTFformlog.php">Sign in</a>
  	</p>
  </form> -->

  <section class="vh-100">
  <div class="mask d-flex align-items-center h-100 pt-4 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

                <div class="form-outline mb-4">
                 <label class="form-label" for="form3Example1cg">Your Username</label>
                  <input type="text" class="form-control form-control-lg"  name="username" value="<?php echo $username; ?>"/>
              
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                <input type="email" class="form-control form-control-lg" name="email" value="<?php echo $email; ?>" />
               
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>
                <input type="password" name="password_1" class="form-control form-control-lg" />
               
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Confirm password</label> 
                <input type="password" name="password_2" class="form-control form-control-lg" />
             
                </div>

  
                <div class="d-flex justify-content-center">

                  <button type="submit"
                  class="btn btn-outline-success btn-block btn-lg gradient-custom-4 text-body" 
                   type="submit"  name="reg_user"
                  >Register</button>
                </div>

      

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="GTFformlog.php"
                style="color: #393f81;"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>