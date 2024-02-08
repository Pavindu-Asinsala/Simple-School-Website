<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <style>

        .mainTitle{
            margin-top: 200px;
            font-size: 35px;
            text-align: center;
            color: rgba(34,0,147,255);
        }

       .description{
        font-size: 20px;
        margin: 25px 100px 50px 100px;
        text-align: center;
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

        .maindiv .div1{
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: 750%;
        }

        .maindiv .div2{
            display: flex;
            justify-content: space-between;
            padding: 20px;
            width: 50%;
        }

        .maindiv img{
            height: 400px;
            padding: 20px;
        }

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
    font-size: 18px;
}


        @media screen and (max-width: 768px) {
  .maindiv {
    flex-direction: column;
    align-items: center;
    margin-left: 50px;
    margin-right: 50px;
  }

  .maindiv .div1,
  .maindiv .div2 {
    flex-direction: column;
    width: 100%;
  }

  .maindiv img {
    height: auto;
    width: 100%;
    margin-bottom: 20px;
  }

  .mainTitle {
    margin-top: 100px;
    font-size: 25px;
  }

  .description {
    font-size: 16px;
    margin: 10px 50px 30px 50px;
  }

         .image-gallery{

    flex-direction: column;
    width: 100%;

        }

        .image-details{
               height: auto;
    width: 100%;
    margin-bottom: 20px;
        }
        }
}

/* Default Styles */

.mainTitle {
  margin-top: 200px;
  font-size: 35px;
  text-align: center;
  color: rgba(34,0,147,255);
}
        }
 

        
    </style>
</head>
<body>

        <?php
            include "head.php";
        ?>

    <h1 class="mainTitle">Our Facilities</h1>



    <div class="maindiv">
        <div class="div1" style="background-color: #f4f4f4;">

<div class="sub1">
    <a href="https://www.google.com/maps/dir/Hunganwela,+Sri+Lanka/7.6857752,80.6450967/7.7072619,80.6530558/7.702217,80.6621243/7.6862919,80.6454678/7.6928431,80.6501922/7.7023213,80.6531567/7.7282361,80.6544435/Nayakumbura,+Sri+Lanka/7.7639973,80.6614112/@7.7218313,80.6262307,13z/data=!3m1!4b1!4m30!4m29!1m5!1m1!1s0x3ae352ae7857dfdb:0x70954882103221f1!2m2!1d80.6417097!2d7.6767357!1m1!4e1!1m1!4e1!1m1!4e1!1m1!4e1!1m1!4e1!1m1!4e1!1m1!4e1!1m5!1m1!1s0x3afcac3ae716d2ff:0xbf69bb2e6d0adb38!2m2!1d80.6937177!2d7.7644476!1m1!4e1!3e0?entry=ttu">
        <img src="../Rajarata fire/images/map.png" alt="click">
    </a>
</div>
        

            <div class="sub2">

            <h1><span style="color: darkblue;">Transport Service</span></h1>
            <h1>Kingston International School's school transport service will started from 1st September 2023</h1>

          <h2><center> <b>Here are the routes taken by the school service</b> </center><h2> <br><br>

<h2><span style="color: red;">
    <center>
        Hunganwela - Naula - Elahara Road - Lenadora to Kingston International School <br>
        Nayakumbura - Kingston International School <br>
        Dambulla - 40 mailpost - Pannampitiya to Kingston International School
    </center>
</span></h2>
            </div>

            

        </div>

 
</div>


<div class="image-gallery">
    <div class="image-details">
        <img src="../Rajarata fire/images/lab/3.jpg" alt="Image 1">

        
    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/lab/4.jpg" alt="Image 1">


    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/lab/5.jpg" alt="Image 1">


    </div>

</div>

<hr>

    <div class="maindiv">
        <div class="div1" style="background-color: #f4f4f4;">

<div class="sub1">

        <img src="../Rajarata fire/images/lab/1.jpg" alt="click">
    </a>
</div>
        

            <div class="sub2">

            <h1><span style="color: darkblue;">Science Lab</span></h1>


<h1><span style="color: red;">
    <center>
        Our school has the latest science lab supplies and equipment to make science interesting and effective for students
    </center>
</span></h1>
            </div>

            

        </div>

 
</div>


<div class="image-gallery">
    <div class="image-details">
        <img src="../Rajarata fire/images/lab/6.jpg" alt="Image 1">

        
    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/lab/7.jpg" alt="Image 1">


    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/lab/2.jpg" alt="Image 1">


    </div>

</div>


     <?php
    include"footer.php";
    ?>

    
</body>
</html>


