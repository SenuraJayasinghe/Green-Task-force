<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>GTF</title>
  <link rel="stylesheet" type="text/css" href="style.php">
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
  <div class="header">
  	
  </div>
	 <!-- <div class="main">
  <form method="post" action="GTFformlog.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">

    <label for="" class="label">Login</label>
  		<label style="color: black;font-weight: bold;">Username</label>
  		<input type="text" name="username" >

  	</div>
  	<div class="input-group">
  		<label style="color: black;font-weight: bold;">Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not a member yet? <a href="GTFformfinal.php">Sign up</a>
  	</p>
  </form>
  </div> -->
 
  <section class="vh-10">
  <div class="container py-4 h-80">
    <div class="row d-flex justify-content-center align-items-center h-10">
      <div class="col col-xl-9">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://images.pexels.com/photos/6348129/pexels-photo-6348129.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form method="post" action="GTFformlog.php" id="my_form">
            	<?php include('errors.php'); ?>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                  <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control form-control-lg"  p/>
                   
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example27">Password</label>
                    <input type="password"name="password" class="form-control form-control-lg" />
                   
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-outline-success btn-lg btn-block" type="submit" name="login_user"
                    >Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="GTFformfinal.php"
                      style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>