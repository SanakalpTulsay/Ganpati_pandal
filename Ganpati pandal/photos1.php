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
    <title>photos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600&family=Manrope:wght@500&family=PT+Serif&family=Tomorrow&display=swap" rel="stylesheet">
  <style>
     




    .card-box {
    border: 1px solid #ddd;
    padding: 20px;
    box-shadow: 0px 0px 10px 0px #c5c5c5;
    margin-bottom: 30px;
    float: left;
    border-radius: 10px;
    transition: 0.5s;
    
}
.card-box .card-thumbnail {
    max-height: 200px;
    overflow: hidden;
    border-radius: 10px;
    
}
.card-box:hover {
   transform: scale(1.01);
   box-shadow: 0 0 2px #fff, 0 0 3px rgb(232, 232, 122), 0 0 4px  rgb(232, 232, 122), 0 0 5px  rgb(232, 232, 122), 0 0 6px  rgb(232, 232, 122), 0 0 7px  rgb(232, 232, 122), 0 0 8px  rgb(232, 232, 122);
    
}
.card-box h3 a {
    font-size: 20px;
    text-decoration: none;
}



.size1{
  height:250px;
  width:500px;
}

.headings{
  padding-top: 20px;
}
.card-box {
  display:flex;
  flex-direction: column;  
  height:100%;
  
}
.button{
    
   
 
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
        <form class="form-inline my-2 my-lg-0 d-flex ms-auto gap-3 ">
          <input class="form-control mx-0" style="position: relative;left:8px"type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-warning bg my-0 fw-bolder text-danger" type="submit">Search</button>
      </form>
               

         
           

        
        
    </div>
  </div>
</nav>



<body>
  <div class="header py-3">
    <div class="container h1 fw-bolder">
      Gallery      
    </div>
  </div>

<?php
	include("conn.php");
	$sq="select * from addpandal";
	
	$sres=mysqli_query($conn,$sq);
	
	

	
	
?>

  <div class="container">
    <div class="row align-items-stretch justify-content-stretch">
       <?php
      while($row=mysqli_fetch_array($sres))
      {
        $id=$row['id'];
        
        $title=$row['title'];	
        ?>

        <div class="col-md-6 col-lg-4">
            <!-- Bootstrap 5 card box -->
            <div class="card-box ">
                <div class="card-thumbnail">
                    <img src="<?php echo $row['photo']; ?>" class="img-fluid" style="width: 100%;" alt="">
                </div>
                <h3 class="headings"><a href="#" class="mt-2 text-danger "><?php echo $row['title']; ?></a></h3>
                <p class="text-dark py-0"><?php echo $row['des']; ?></p>
                <div class="button text-center">
                  <a href="map.php?eid=<?php echo $id;?>" class="btn btn-sm btn-danger">Click to View Map</a>
                </div>
            </div>
        </div>
      <?php
      }
      ?>

    </div>
</div>

 

</body>













<!-- 
<body>


  <div class="row align-items-stretch justify-content-stretch row-cols-2  row-cols-md-3 g-20">

    <div class="col">
      <div class="  card">
        <img src="OIP.jfif" class="size3 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Shree Siddhivinayak Temple, Mumba</h5>
          <p class="card-text">This majestic temple is counted among India’s most popular Ganapati temples, visited by a large number of tourists every day, especially during Ganesh Chaturthi. It was built by contractor Laxman Vithu Patil for a childless woman in a belief that it would advantage other women with no child. A lot of celebrities and famous personalities visit this ancient temple to offer their prayers to the elephant deity. Located in Mumbai, Maharashtra, the Siddhivinayak Ganapati Mandir looks very beautiful during night, when the temple complex is decorated with lights and flowers.</p>
          <a href="map.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="Amazing_God_Ganesh_Wallpaper.jpg" class="size2 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Shrimant Dagdusheth Halwai Ganpati Temple, Pune</h5>
          <p class="card-text">hrimant Dagdusheth Halwai Ganpati Temple is the second most popular temple in Maharashtra after Shree Sidhivinayak Temple, dedicated to Lord Ganapati. It is located in Pune and is visited by a large number of tourists from all over the country. The temple trust is one of the richest in India and is famous for its intrinsic designs and its Golden idol, which is believed to the most beautiful part of the temple.</p>
          <a href="map2.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="the-vinayaka-idol-234x300.jpg" class=" size4 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kanipakam Vinayaka Temple, Chittoor</h5>
          <p class="card-text">This beautiful temple is located approximately 75 kms away from Tirupati in Chittoor district of Andhra Pradesh. It is among the best ancient Ganapati temples in India, known for its historic structure and intrinsic designs. Worshippers from different parts of the country visit Kanipakam Vinayaka Temple to offer prayers to Lord Ganesha</p>
          <a href="map3.html" class="btn btn-primary">Go to Map</a>
        </div>  
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="08.jpg" class="size2 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Manakula Vinayagar Temple, Pondicherry</h5>
          <p class="card-text">Manakula Vinayagar Temple was constructed during the French territory of Pondicherry that dates back to 1666 years ago. This majestic building is named after a pond (Kulam) that used to be located inside the temple with sands blown in from the seashores.</p>
          <a href="map4.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="ganesh_temple_ranthambore.jpg" class="size5 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ranthambore Ganesh Temple, Rajasthan</h5>
          <p class="card-text">Surely, Ranthambore National Park is one of the best tourist places in India, visited by nature lovers, and wildlife enthusiasts. But, the Ranthambore National Park is widely visited by pilgrims and religious travelers to seek the blessings of three-eyed god called ‘Trinetra Ganesh,’ whose temple is located atop Ranthambore’s historic 1000-year-old fort.</p>
          <a href="map5.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="R.jfif" class="size6 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Moti Dungri Ganesh Temple, Jaipur</h5>
          <p class="card-text">Moti Dungri Ganesh Temple in Jaipur was constructed by Seth Jai Ram Paliwal in the 18th century to seek blessings of Lord Ganesha before every special occasion. Positioned on a small hill, this religious spot is one of the most famous tourist attractions in Jaipur, frequented by worshippers from different corners of the country every day</p>
          <a href="map6.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="1582976094_ganesh-tok-gangtok-2.jpg" class="size card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ganesh Tok Temple, Gangtok</h5>
          <p class="card-text">We know what you must be thinking? In a land of Buddhists, a shrine of Lord Ganesh is hard to find, but very less people know that the Gangtok city houses a beautiful temple, dedicated to the elephant god on top of a hill near the Gangtok TV Tower.</p>
          <a href="map7.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="ganpatipule1-500x500.jpg" class="size7 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ganpatipule Temple, Ratnagiri, Maharashtra</h5>
          <p class="card-text">One thing which makes this temple unique is the fact that the Ganesh idol in Ganpatipule Temple, Ratnagiri faces west instead of east. Also, the locals believe that the idol of Lord Ganesha is not placed by anyone, but has been self-evolved</p>
          <a href="map8.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="R (1).jfif" class="size8 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rockfort Ucchi Pillayar Koil Temple, Tamil Nadu</h5>
          <p class="card-text">This majestic temple, perched on top of a hill in the Tiruchirappalli town of Tamil Nadu, holds a significant importance amid Hindus. There is a long story behind the origin of the Rockfort Ucchi Pillayar Koil Temple; It says that after killing Ravana, Lord Ram gifted an idol of Lord Ranganatha to Vibhishana, instructing him that the idol take root wherever it is placed</p>
          <a href="map9.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>
  </div>

  <br>

  
  <div class="row row-cols-2 row-cols-md-3 g-20">

    <div class="col">
      <div class="  card">
        <img src="pp_1598507572.jpg" class="size2 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Karpaga Vinayagar Temple, Pillaiyarpatti, Tamil Nadu</h5>
          <p class="card-text">This beautiful temple is believed to be around 1600 years old, which is one of the oldest in Tamil Nadu. It is carved out of a stone in a cave with images of several other gods and deities. The six-feet idol of Lord Ganesha is very beautiful and visitors come here, especially to see this stone-carved idol, adorned with jewelries and other ornaments.</p>
          <a href="map10.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="498-59.jpg" class="size9 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sasivekalu & Kadale Kalu Ganesha Temple, Hampi, Karnataka</h5>
          <p class="card-text">Sasivekalu & Kadale Kalu Ganesha Temple is one of the prime attractions in Hampi, which once used to be the glorious capital of the Vijaynagar Empire. This temple has two unique idols of Lord Ganesha that dates back to 1440 AD and several images of other deities that too are very old. </p>
          <a href="map11.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="madhur-temple.jpg" class=" size10 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Madhur Mahaganapathi Temple, Kerala</h5>
          <p class="card-text">This beautiful temple is located approximately 75 kms away from Tirupati in Chittoor district of Andhra Pradesh. It is among the best ancient Ganapati temples in India, known for its historic structure and intrinsic designs. Worshippers from different parts of the country visit Kanipakam Vinayaka Temple to offer prayers to Lord Ganesha</p>
          <a href="map12.html" class="btn btn-primary">Go to Map</a>
        </div>  
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="125f73f77c7abe282f3ba1c84f8f99da.jpg" class="size11 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Swayambhu Ganapati</h5>
          <p class="card-text">At a distance of 1 km from Ganpatipule Bus Stand, Swayambhu Ganapati Temple is an ancient temple situated on Ganpatipule Beach in Maharashtra. It is one of the top places to visit in Ganpatipule and also one of the popular Ganesh temples in Maharashtra.
            The Ganpati Temple is about 400 years old and is the prime attraction in Ganpatipule packages that draws thousands of pilgrims every year to seek blessings of the Lord. According to one legend, after being insulted by a local lady, Lord Ganapati moved to Pule from his original abode of Gule. Thus the place was named as Ganpati-Pule.</p>
          <a href="map13.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="moreshwar-temple.jpg" class="size12 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Moreshwar, Mayureshwar</h5>
          <p class="card-text">This temple is situated in Moregaon which is about 80 kms. from Pune city. At Moreshwar temple Lord Ganesha portrays peacock as its vehicle. In local language more or mayura means peacock, hence both temple and village has derived its name after the bird peacock.</p>
          <a href="map14.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="f0a397b10e79c16d5cec5996410d8c7b.jpg" class="size13 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> Chintamani Theur</h5>
          <p class="card-text">  The Chintamani Temple of Theur is a Hindu temple dedicated to Ganesha Located 25 km (16 mi) from Pune,[1] the temple is "one of the larger and more famous" of the Ashtavinayaka, the eight revered shrines of Ganesha in the Indian state of Maharashtra.</p>
          <a href="map15.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="maxresdefault.jpg" class="size2 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Ballaleshwar Pali</h5>
          <p class="card-text">Ballaleshwar (lit.: "Ballal's Lord") temple is one of the eight temples of Lord Ganesha. Among Ganesha temples, Ballaleshwar is the only incarnation of Ganesha that is known by his devotee's name. It is located in the village of Pali which is at a distance of 28 km from Roha in the Raigad district of Maharashtra, India. It is situated between fort Sarasgad and the river Amba </p>
          <a href="map16.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="Varasiddhi-Vinayagar-Temple-Chennai.jpg" class=" size15 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Varasiddhi Vinayagar </h5>
          <p class="card-text">Located in Besant Nagar in Chennai this is a famous lord Ganesha temple in Chennai. Dedicated to the Hindu elephant God Vinayaka this is where you can see the idol of Vinayakar with Siddhi. There is also a small idol that was worshipped initially. </p>
          <a href="map17.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="card">
        <img src="R (2).jfif" class="size14 card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kottarakkara Sree Mahaganapathi Kshethram</h5>
          <p class="card-text">The deities of Kottarakkara Sree Mahaganapathy Kshethram are Lord Shiva, Goddess Parvati, Lord Ganesha, Lord Murugan, Lord Ayyappan, and Nagaraja. Even though the main deity is Lord Shiva, the main priority is given to his son Lord Ganesha. All deities except Goddess Parvati and Lord Ganesha face east. The main offerings of the temple are Unniyappam Udayasthamanapooja, Mahaganapathi homam and Pushpanjali. The Unniyappam made here is very famous.</p>
          <a href="map18.html" class="btn btn-primary">Go to Map</a>
        </div>
      </div>
    </div>
  </div>




</body> -->