<?php include('server2.php') ?>
<!-- <?php include('server3.php') ?> -->
<!DOCTYPE html>
<html>
<head>
  <title>Admin front page</title>
  <link rel="stylesheet" type="text/css" href="style6.php">
  <link rel="stylesheet" type="text/css" href="homestyle.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>

</style>
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
  
  <!-- <form method="post" action="adminpage.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <h2>Create Captain account</h2>
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register </button>
    </div>
    
  </form> -->
   <div class="header">
   
  </div>

  <section class="vh-100">
  <div class="mask d-flex align-items-center h-100 pt-4 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create Captain account</h2>

              <form method="post" action="adminpage.php">
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

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 


  <!-- <form method="post" action="adminpage.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <h2>Create Collect staff account</h2>
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    
  </form> -->





  <section class="vh-100">
  <div class="mask d-flex  h-100 pt-5 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create Staff Account</h2>

              <form method="post" action="adminpage.php">
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

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 



 <h3 style="color: green"><a href="GTFformlog.php">Update Public map</a></h3>     
</body>
</html>