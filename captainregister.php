<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration for captain</title>
  <link rel="stylesheet" type="text/css" href="style6.php">
  <link rel="stylesheet" type="text/css" href="homestyle.css" />
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
  
  <form method="post" action="adminpage.php">
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
    
  </form>
   <div class="header">
   
  </div>