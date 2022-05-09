<html>
<head runat="server">
    <title></title>
    <link rel="stylesheet" type="text/css" href="homestyle.css" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #map{
            height: 600px;  
            width: 50%;
        }
      
    </style>
    
</head>
<body>
    <form id="form1" runat="server">

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


<div class="container1"> 
<div class="leftSection">
      <h1 class="heroText">Welcome <br>
          <span class="word">to</span>  <br>
           Green Task <br>
           Force
        </h1>
      </div>
   </div>

   <div class="container2">
<h1 class="h1">What is Green task force</h1>
    <p class="p">The green task force(GTF) is a project that was initiated witht the aim of improving garbage collection in and around colombo with the collective help of the municipal council and invaliable volunteers of the city.</p>
    </div>
    <hr style="width:800px; margin: auto;" />

    <div class="container2">
<h1 class="h1">How it works</h1>
<p class="p">Registered vounteers of the GTF can submit the location along with an image and description of the garbage site to the GTF team. once evaluated by our team, garbage collection trucks will be sent to the location by the municpal council.</p>
    </div>
    <hr style="width:800px; margin: auto;" />

    <div class="container2">
<h1 class="h1">Why you should join</h1>
<p class="p">One of the main obstacles faced by the municipal council is the dumping of the garbage in various parts of colombo and therby resulting in problems such as environmental pollution and spreading of disesases. 

   <br>
   Although various attempts have been made in the past, it is now understood that the municipal council alone cannot solve the garbage issue of the city, hence that is why we need your support to achieve the dream of making colombo a cleaner and more beautiful city for many years to come.</p>
    </div>
    <hr style="width:800px; margin: auto;" />

   <div class="container2">
<h1 class="h1">How can you volunteer</h1>
<p class="p" style="text-align: center;">you too can take part in this great innovating idea by clicking  <a href="GTFformlog.php">here</a></p>     
   </div>
      <hr style="width:800px; margin: auto;" />
      
<div class="container2">
  <h2 style="color: green"><a href="public-map.php">View local Dump yards</a></h2>
  </div>
     
        
    </form>
</body>
</html>
