<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <style>
        .mainheading{
            font-size: 40px;
            margin-top: 200px;
            text-align: center;
            color: rgba(34,0,147,255);
            margin-left: 500px;
        }

        .maindiv{
            display: flex;
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 30px;
        }

        .maindiv img{
            height: 450px;
            border-radius: 10px;
            margin-top: 150px;
        }

        .maindiv p{
            font-size: 22px;
            line-height: 40px;
            text-align: justify;
            padding-left: 50px;
            padding-right: 50px;
            padding-top: 70px;
        }


        .vitionMission{
            display: flex;
            font-size: 20px;
            margin: 100px 100px 50px 100px;
            font-weight: bold;
            
            
        }

        .vitionMission h1{
            text-align: center;
            color: rgba(34,0,147,255);
            
        }

        .vitionMission .div1{
            background-image: url("../Rajarata fire/images/mision.jpg");
            background-size: cover;
            text-align: justify;
            padding: 40px;
            line-height: 30px;
            border-radius: 15px;
            width: 50%;
            border: 3px dotted black;
        }

        .vitionMission .div2{
            background-image: url("../Rajarata fire/images/vision.jpg");
            background-size: cover;
            text-align: justify;
            text-align: justify;
            padding: 40px;
            border-radius: 15px;
            width: 50%;
            line-height: 30px;
            border: 3px dotted black;
        }

        .sec1{
            background:rgba(34,0,147,255);
            border: 2px white dotted;
            border-radius: 15px;
            margin: 50px;
            width: 350px;
            margin-left: 180px;
            padding: 15px;
        }

        .sec1 p{
            font-size: 14px;
            margin: 10px;
            padding: 0;
            color: whitesmoke;
            line-height: 20px;
        }

                .products{
            background-color: rgba(34,0,147,255);
        }

                .products .maintitle{
            font-size: 30px;
            margin-left: 100px;
            color: white;
            margin-top: 70px;
        }

          .school-box {
    border: 2px solid #000; /* Border style and color */
    padding: 20px; /* Padding inside the box */
    width: 80%; /* Adjust the width as needed */
    margin: 0 auto; /* Center the box horizontally */
  }

  /* Style for the heading (h2) inside the container */
  .school-heading {
    font-size: 18px; /* Font size for the heading */
    text-align: center; /* Center the text */
  }

        /* Add this CSS for the image gallery */
.image-gallery {
    display: flex;
    justify-content: space-between;
    margin-top: 20px; /* Add some margin to separate it from the previous content */
}

.image-details {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    width: 30%; /* Adjust as needed for your layout */
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    text-align: center;
}

.image-details img {
    max-width: 100%;
    height: 300px;
}

.image-details h2 {
    font-size: 20px;
    margin: 10px 0;
}

.image-details p {
    font-size: 17px;
}


        @media screen and (max-width: 768px) {
        .maindiv {
            flex-direction: column;
            align-items: center;
        }

        .maindiv img {
            height: auto;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .maindiv p {
            font-size: 18px;
            padding: 10px;
        }

        .sec1 {
            margin: 20px;
            width: 100%;
            margin-left: 0;
        }

        .vitionMission {
            flex-direction: column;
            margin: 50px 20px;
        }

        .vitionMission .div1,
        .vitionMission .div2 {
            width: 100%;
            background-size: cover;
            padding: 20px;
            margin-bottom: 30px;
        }

        .vitionMission h1 {
            font-size: 25px;
        }

        .sec1 p {
            font-size: 14px;
            line-height: 24px;
        }

        .mainheading {
            font-size: 30px;
            margin-top: 100px;
            margin-left: 50px;
            margin-right: 50px;
        }
}

    </style>
</head>
<body>

    <?php
        include "head.php";
    ?>



    <h1 class="mainheading">About Us</h1>

    <div class="maindiv">
        <div>
            <img src="../Rajarata fire/images/30.jpg" alt="" >
        </div>

        <div><br><br>
            <p id="owner">Kingston International School was established On January 4th, 2008, on Kandy Road, Dambulla Kingston School started with only five students two teachers, one register, and one principal. and one director: Since then, we have come a long way paving the way high quality English medium education in rural areas for standard Alise Sri Kanka, we offer both the curriculums of National and International Streams Today Kingston International School prospers under fifteen teachers. and five hundred students. The school is co-educational and committed to the pursuit of excellence in teaching and learning, Starting from pre-primary to Secondary school.
 </p> <br>
            
            <section class="sec1">
                <b><p style="font-size: 21px;"> Mrs.Damayanthi Gamage  <br><br>
                <b>(Principle & Director)</b></p>
            </section>
            
           

        </div>

    </div>

<div class="school-box">
  <h2 class="school-heading">It is a great pleasure to welcome you to our school website. As principal, I am hugely impressed by the commitment of the management and excellent staff for providing a better all-round education for our students as a team. Together, we strongly promote academic achievement among our students. Our school has earned a reputation for academic excellence through the hard work of our teachers, students, and parents. I believe that every student can find their path and be successful if provided with the right support and opportunities. Our teachers are committed to providing all students with an appropriate and challenging educational experience in a respectable environment. With a long and rewarding history of achievement in education behind us, our school continues to move forward together with confidence, pride, and enthusiasm.</h2>
</div>



    <div class="vitionMission">
        <div class="div1">
            <h1>Our Mission</h1><br>
            <p>* To produce persons who are equipped with all the necessary competencies useful to society,</p> 
            <p>well-disciplined and fit into the national as well as international levels and to dedicate 
            a great service of fulfilling social expectations</p>
        </div>

        <div class="div2">
            <h1>Our Vision</h1><br>
            <p>
                <ul>
                    <li>Every child is unique</li>
                    <li>Every child can learn</li>
                    <li>Every child should be looked after and cared for</li>
                </ul>
            </p>
        </div>
    </div>

    <?php
    include"footer.php";
    ?>


    
</body>
</html>