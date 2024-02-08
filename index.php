<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <style>
        .slider {
        position: relative;
        }

        .slides {
        display: flex;
        overflow: hidden;
        }

        .slides img {
        width: 100%;
        height: 783px;
        }

        .prev,
        .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 10px;
        background: transparent;
        border: none;
        color: white;
        font-size: 18px;
        }

        .prev {
        left: 10px;
        }

        .next {
        right: 10px;
        }

        /* description*/

        .description{
            background-color:rgba(34,0,147,255); 
            height: 320px;
        }

        .description h1{
            text-align: center;
            font-size: 45px;
            color: #f4f4f4;
            padding-top: 35px;
        }

        .description p{
            font-size: 25px;
            color: #f4f4f4;
            margin-right: 100px;
            margin-left: 100px;
            margin-top: 25px;
            text-align: center;
        }

        .description .desImages{
            display: flex;
            justify-content: space-between;

        }

        .desImages img{
            height: 100px;
            margin-top: 25px;
        }

        .desImages .ima1{
            margin-left: 650px;
        }

        .desImages .ima2{
            margin-right: 650px;
        }

        /*services section*/


        .Services .maintitle{
            font-size: 45px;
            margin-left: 100px;
            color: rgba(230, 29, 37, 255);
            margin-top: 50px;
        }

        .secdetails{
            display: flex;
            justify-content: space-between;
            margin-right: 150px;
            margin-left: 100px;
            margin-top: 25px;
            font-size: 21px;
            margin-bottom: 30px;
        }


        .secdetails img{
            height: 500px;
            border-radius: 5px;
        }

        .secdetails .list{
  
        }

        .secdetails h3{
            font-size: 35px;
            font-weight: bold;
            margin-bottom: 15px;

        }

        .secdetails .btnseemore{
            margin-top: 25px;
            height: 40px;
            background-color: rgba(230, 29, 37, 255);
            text-align: center;
            width: 130px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 18px;
            color: #f4f4f4;
            margin-bottom: 35px;

        }

        .secdetails .btnseemore:hover{
            transform: scale(1.05);
        }


        /*products section*/

        .products{
            background-color: rgba(34,0,147,255);
        }

        .products .maintitle{
            font-size: 40px;
            margin-left: 100px;
            color: white;
            margin-top: 70px;
        }
        
        .maindiv{
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            margin-left: 150px;
            margin-right: 150px;

        }

        .maindiv h1{
            text-align: center;
            font-size: 30px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .maindiv p{
            font-size: 20px;
            text-align: justify;
        }
        .video-container {
            padding-left: 50px;
            padding-right: 50pX;
            display: flex;
            justify-content: space-between;
        }

        .video-container iframe {
            width: 48%; /* Adjust the width as needed */
        }
        
        .maindiv .div1{
            display: flex;
            justify-content: ;
            padding: 20px;
            width: 50%;
            border-radius: 5px;
        }

        .maindiv .div2{
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: 50%;
            border-radius: 5px;
        }
        .div2{
            text-align: left;
        }

        .maindiv img{
            height: 400px;
            padding: 20px;
        }

        .btnseemore{
            margin-top: 25px;
            height: 40px;
            background-color: rgba(230, 29, 37, 255);
            text-align: center;
            width: 130px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 18px;
            color: #f4f4f4;
            margin-bottom: 35px;

        }

        .btnseemore:hover{
            transform: scale(1.05);
        }


        /*brands section */

        .brands .maintitle{
            font-size: 45px;
            margin-left: 100px;
            color: rgba(230, 29, 37, 255);
            margin-top: 50px;
        }

        .brands{
            
            margin-bottom: 50px;
            

        }

        .brands .bimgs{
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
            margin-right: 100px;
            margin-left: 100px;
            background-color: #f4f4f4;
            height: 200px;
            padding: 0 20px 0 20px;

        }

        .bimgs img{
            height: 80px;
            margin-top: 70px;
        }




        @media (max-width: 768px) {
            .slides img {
                height: 400px;
                max-height: 500px; /* Set a maximum height for smaller screens */
            }

            .prev,
            .next {
                font-size: 14px; /* Adjust the font size for smaller screens */
                padding: 5px; /* Adjust the padding for smaller screens */
            }

            .description h1 {
                font-size: 35px; /* Adjust the font size for smaller screens */
            }

            .description p {
                font-size: 16px; /* Adjust the font size for smaller screens */
            }

            .description .desImages {
                flex-wrap: wrap; /* Allow images to wrap on smaller screens */
                justify-content: flex-start; /* Align images to the start */
            }

            .desImages img {
                display: none; /* Adjust the spacing between the images for smaller screens */
            }

            .secdetails {
                flex-direction: column;
                align-items: center;
                margin-right: 50px;
                margin-left: 50px;
            }

            .secdetails img {
                height: auto;
                width: 100%;
                margin-bottom: 25px;
            }

            .secdetails .list {
                margin-left: 0;
                text-align: left;
            }

            .secdetails .btnseemore {
                margin-top: 25px;
                margin-bottom: 25px;
                width: 150px;
            }

            .maindiv {
                flex-direction: column;
                margin-left: 50px;
                margin-right: 50px;
            }

            .maindiv .div1,
            .maindiv .div2 {
                width: 100%;
                margin-bottom: 50px;
            }

            .maindiv img {
                height: auto;
                width: 100%;
            }

            .brands .bimgs {
                flex-wrap: wrap;
                justify-content: center;
                height: auto;
                padding: 20px;
            }

            .bimgs img {
                height: 60px;
                margin: 10px;
            }
        }

    </style>
</head>
<body>
    
    <?php
    include "head.php"; 
    ?>

   
    <div class="slides">
        <img src="../Rajarata fire/images/2.jpg" alt="Image 1">
        <img src="../Rajarata fire/images/1.jpg" alt="Image 2">
        <img src="../Rajarata fire/images/4.jpg" alt="Image 3">
    </div>
    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

<script>
var slideIndex = 0;
var slides = document.querySelectorAll(".slides img");
var totalSlides = slides.length;

function showSlide(n) {
  slideIndex += n;

  if (slideIndex < 0) {
    slideIndex = totalSlides - 1;
  } else if (slideIndex >= totalSlides) {
    slideIndex = 0;
  }

  for (var i = 0; i < totalSlides; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex].style.display = "block";
}

function changeSlide(n) {
  showSlide(n);
}

setInterval(function() {
  showSlide(1);
}, 2500); // Change slide every 5 seconds
</script>


        <!-- description section -->

        <div class="description">
            <h1>Kingston International School</h1>
            <p>At our school, we believe in nurturing each student’s potential through personalized guidance, fostering confidence, character, and a lifelong passion for learning. Our close-knit community fosters both academic accomplishments and personal growth. We offer an affordable fee structure and a commitment to individual attention, ensuring that your child gains access to a world of knowledge, skills, and positive attitudes.</p>

      
        </div>

        




        <!-- Services section -->


        <div class="Services">
            

            <div class="secdetails">

                <div>
               

    <iframe width="560" height="315" src="https://www.youtube.com/embed/TIRmGqArsOo?autoplay=1" frameborder="0" allowfullscreen>
        
    </iframe>


                </div>

                <div class="list">
                    <h3><center>
                        <p style="color: rgba(34, 0, 147, 1);">School Facilities</p>

                  </h3></center>
                    <ul>
                        <li><b>Transportation:</b> We offer safe and reliable transportation service.</li><br>
                        <li><b>Library:</b> Our extensive library houses a vast collection of books.</li><br>
                        <li><b>Computer Labs:</b> Our computer labs are promote digital  technology skills.</li><br>
                        <li><b>Outdoor Spaces:</b> Our School has spaces for relaxation and outdoor activities.</li><br>
                        
                   

                    </ul>
                </div>

            </div>
            <center><a href="../Rajarata fire/facilities.php"><input type="button" value="See More" class="btnseemore"></a></center>
        </div>



        <!-- Products section -->


        <div class="products">
            <h1 class="maintitle"><center> Our Programs </center></h1>
</div>
<br><br><br><br>
       
    <div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/MDg2F_Y3agI?autoplay=1" frameborder="0" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NHUiQtxFhKM?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>

<br><br><br><br>

<div class="video-container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kTjDYsnneuo?autoplay=1" frameborder="0" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0z2yRuDqll4?autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
 

               <br><br> 



        <center><a href="../Rajarata fire/Gallery.php"><input type="button" value="See More" class="btnseemore"></a></center>

        </div>







     <?php
    include"footer.php";
    ?>


</body>
</html>