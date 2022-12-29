<head>
    <title>shree shidivinayak</title>
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
  

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600&family=Manrope:wght@500&family=PT+Serif&family=Tomorrow&display=swap" rel="stylesheet">
    <style>
       
  
       .img2{
        position: relative;
        left:350px;
        bottom:730px;
       }

        .div1{
            position: relative;
            left:-1px;
            height:auto;
       } 

       h1{
        position: relative;
        top:100px;
        left:420px;
        padding:50px ;
        font-size:30px;


       }

     
       

       
.map{
border-radius: 50px;
padding:20px;
}


.card-box {
    border: 1px solid #ddd;
    padding: 20px;
    box-shadow: 0px 0px 10px 0px #c5c5c5;
    margin-bottom: 30px;
    float: left;
    border-radius: 10px;
}
.card-box .card-thumbnail {
    max-height: 200px;
    overflow: hidden;
    border-radius: 10px;
    transition: 1s;
}
.card-box .card-thumbnail:hover {
    transform: scale(1.2);
}
.card-box h3 a {
    font-size: 20px;
    text-decoration: none;
}


  
    </style>
  </head>

  
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">    
    <a class="navbar-brand fs-2 p-0 text-light " style="font-family: 'Dancing Script', cursive; text-shadow: 0px 0px 10px black;" href="#" >Ganesh Pandal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <center>

      
        <div class="navbar-nav mr-auto mx-4">
            <li class="nav-item">
                <a class="nav-link  my-1" href="pandal.html">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link fw-bolder text-light my-1" href="photos1.php">Gallery</a>
            </li>

                      
            <li class="nav-item">
              <a class="nav-link my-1" href="about1.html">About</a>
          </li>
          
          </div>
          </center>
        </ul>

               

         
           

        
        
    </div>
  </div>
</nav>

<!-- 
   <div>
    <div class="div1 card mb-3">
       <iframe width="300" class="map" height="350" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=18.999315900702~72.83540725708008&lvl=13&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
        </iframe>
        <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;">
           <a id="dirMapLink" class="link" target="_blank" href="https://www.bing.com/maps?q=Siddhivinayak++Prabhadevi&qs=n&form=QBRE&sp=-1&pq=siddhivinayak+temple+parking+-+park%2B%2C+sk+bole+marg%2C+prabhadevi%2C+mumbai%2C+maharashtra%2C+india&sc=0-90&sk=&cvid=3F5FA9B196C34C138AB2DE9F3F06032E&ghsh=0&ghacc=0&ghpl=">Get Directions</a>
       </div>

   </div>
      <div class="card-body">
        <h5 class="card-title">Route of Shree Siddhivinayak Temple, Mumbai</h5> 
      </div>
    </div> -->
    
    
<body>

<?php

include("conn.php");

if(isset($_GET['eid']))
{
	$id=$_GET['eid'];
	
	$q="select * from addpandal where id='$id'";
	
	$res=mysqli_query($conn,$q);
	
	while($row=mysqli_fetch_array($res))
	{
		
	?>



  <div class="container">
    <div class="d-flex justify-content-center ">
            <!-- Bootstrap 5 card box -->
            <div class="card-box my-5 text-center">

              <iframe width="500" class="map" height="350" frameborder="0" src="<?php echo $row['elink']; ?>" scrolling="no">
              </iframe>
              <div style="white-space: nowrap; text-align: center; width: 500px; padding: 6px 0;">
                 <a id="dirMapLink" class="btn btn-outline-success my-2" target="_blank" href="<?php echo $row['mlink']; ?>">Get Directions</a>
              </div>
                <h3><a href="#" class="mt-2 text-danger"><?php echo $row['title']; ?></a></h3>
            </div>
        
    </div>
  </div>

<?php
  }
}
  ?>
</body>
