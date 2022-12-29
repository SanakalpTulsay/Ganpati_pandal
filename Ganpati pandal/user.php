<?php
session_start();

include("conn.php");

if(empty($_SESSION['username']))
{
	echo "<script>alert('You need to Login');window.location.href='pandal.html';</script>";
}

?>
<head>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>

   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pandal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600&family=Manrope:wght@500&family=PT+Serif&family=Tomorrow&display=swap" rel="stylesheet">
    <style>
        #navbarNav{

            position: relative;
            left:1000px;
            top:-30px;
        }

        .nav1{
          position: relative;
            left:50px;

        }
        .nav2{
          position: relative;
            left:70px;
           
        }
        
        .navbar1{
          height:50px;
          background-color: black;
  border: 2px solid black;
  box-shadow: -2px 5px 100px black;
  border-radius:10px;
        }

        .home:hover{
          padding: 2px;
        }

        .gall:hover{
          padding:2px;
        }
        .about:hover{
          padding: 2px;
        }

          .map:hover{
            padding: 2px;

          }

          .image{

            border-radius:20px;
          }
          
          .img1{

            height:95%;
          }

          .sbar{
            position: relative;
            top:10px;
          }
        .h1{

           font-size:50px;
           font-variant:inherit;
           text-transform:capitalize;
           text-shadow:5px -10px 20px black ;
           text-overflow: inherit;
        }

        .h2{
font-size:25px;
font-variant:inherit;
text-transform:capitalize;
text-shadow:5px -10px 20px black ;
}

.h3{
font-size:20px;
font-variant:inherit;
text-transform:capitalize;
text-shadow:5px -10px 20px black ;
}


          
    </style>
</head>

<body>

  
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">    
    <a class="navbar-brand fs-2 p-0 text-light " style="font-family: 'Dancing Script', cursive; text-shadow: 0px 0px 10px black;" href="#" >Ganesh Pandal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul  class="navbar-nav mr-auto mx-4">
            <li class="nav-item">
                <a class="nav-link fw-bolder text-light" href="pandal.html">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="photos1.php">Gallery</a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Upload</a>
            </li>
           
           
            <li class="nav-item">
              <a class="nav-link" href="about1.html">About</a>
          </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link btn btn-warning text-danger fw-bold mx-3" href="#" data-toggle="modal" data-target="#exampleModal2">Login</a>
      </li>
           
      <li class="nav-link btn btn-info fw-bold p-0 text-danger">
          <a class="nav-link" href="logout.php">Logout</a>
      </li>
        </ul>
        
    </div>
  </div>
</nav>





<!--   
  <nav class=" navbar1 navbar navbar-expand-lg bg-dark">

    <div class=" container-fluid">
      

      <a class="navbar-brand">
        <img src="ganesha-161002_640.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      </a>

      <a class="navbar-brand" href="#">Ganpati pandal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu bg-dark" >
              <li><a class="dropdown-item" href="Gallery1.html">Gallery</a></li>
              <li><a class="dropdown-item" href="about1.html">About</a></li>
             
            </ul>
          </li>
        </ul>

        <form class="sbar d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav> -->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class=" carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active data-bs-interval=1000">
        <img src="bapa.jpg" class="img1 d-block w-100" alt="...">
        <div class=" carousel-caption d-none d-md-block">
          <h1 class="h1" >welcome to ganpati pandal</h1>
          <p class="h1">Most Famous Ganpati Pandal and Mandals of India</p>
        </div>
      </div>

      <div class="carousel-item data-bs-interval=1000">
        <img src="wallpaperflare-cropped.jpg" class="img1 d-block w-100" alt="...">
        <div class=" carousel-caption d-none d-md-block">
          <h1 class="h2">Ganpati</h1>
          <p class="h2">Lord Ganesh or Ganpati is the most respected God in Maharashtra, so as the Ganesh Chaturthi is most important festival of the state. During the 10 days, there are traditions and rituals that people perform during the Ganesh Chaturthi Hindu festival in Maharashtra. The richest, biggest and most famous Ganpatis pandal of Mumbai.</p>
        </div>
      </div>

      <div class="carousel-item data-bs-interval=1000">
        <img src="wallpaperflare.jpg" class="img1 d-block w-100" alt="...">
        <div class=" carousel-caption d-none d-md-block">
          <h1 class="h3">To see ganpati go to More Option on navbar</h1>
          <p class="h3" > During the 10 days, there are traditions and rituals that people perform during the Ganesh Chaturthi Hindu festival in Maharashtra.</p>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  </header>
 
</body>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Pandals</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="upload.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input type="file" class="form-control" name="uploadfile" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="Title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
            </div>
            <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" name="Des" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description">
            
          </div><br>

          <div class="form-group">
            <label for="exampleInputEmail1">State</label>
            <input type="text" class="form-control" name="State" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter State Name">
            </div>
            <br>

            <div class="form-group">
              <label for="exampleInputEmail1">Embed Link</label>
              <input type="text" class="form-control" name="Elink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Embed Link">
              </div>
              <br>

              <div class="form-group">
                <label for="exampleInputEmail1">Map Link</label>
                <input type="text" class="form-control" name="Mlink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Map Link">
                </div>
                <br>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>





<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="Registerdb.php">
          
          <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="lemail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>

            <br>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" class="form-control" name="luser" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
              </div>

              <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="password" class="form-control" name="lpass" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
            </div>

            <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Confirm Password</label>
            <input type="password" class="form-control" name="lcpass" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Confirm Password">
            
          </div><br>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="Login.php">
         
         
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" name="User" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username or Email">
            </div>
            <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="text" class="form-control" name="Pass" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Password">
            
          </div><br>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
    </div>
  </div>
</div>