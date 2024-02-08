<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics</title>


    <style>
       .subtitle{
        margin-top: 200px;
        font-size: 35px;
        text-align: center;
        color: rgba(34,0,147,255);
        text-transform: capitalize;
       }

       .maintitle{
        text-align: center;
        font-size: 50px;
        margin-bottom: 40px;
        text-transform: capitalize;
        margin: 80px 100px 0 100px;
       }

       .maindiv1{
        display: flex;
        justify-content: space-around;
        margin-left: 100px;
        margin-right: 150px;
        margin-top: 100px;
        
       }

       .maindiv1 div{
        font-size: 20px;
        text-align: justify;
        line-height: 35px;
        border: 1px solid black;
        border-radius: 15px;
        margin-left: 10px;
        width: 450px;
        background: url("../Rajarata fire/images/10.jpg");
        color: white;
        box-shadow: 0 0 40px rgb(115, 110, 110);
        transition: 1s;
        

       }

       .maindiv1 div h1{
        text-align: center;
        height: 100px;
        border-radius: 10px;
        margin-top: 80px;
        text-transform: capitalize;
       }

       .maindiv1 div p{
        background:url("../Rajarata fire/images/red.jpg");
        border-radius: 0 150px 10px 10px;
        height: 400px;
        padding: 50px 35px 10px 20px;
        border: 3px dotted white;
        text-transform:none;
       }

       .maindiv2{
        display: flex;
        justify-content: space-around;
        margin-left: 300px;
        margin-right: 300px;
        margin-top: 50px;
        margin-bottom: 50px;
       }

       
       .maindiv2 div{
        font-size: 20px;
        text-align: justify;
        line-height: 35px;
        border: 1px solid black;
        border-radius: 15px;
        margin-left: 10px;
        width: 450px;
        background: url("../Rajarata fire/images/details.jpg");
        color: white;
        box-shadow: 0 0 40px rgb(115, 110, 110);
        transition: 1s;

       }

       .maindiv2 div:hover{
        transform: scale(1.05);
       }

       .maindiv1 div:hover{
        transform: scale(1.05);
       }

       .maindiv2 div h1{
        text-align: center;
        height: 100px;
        border-radius: 10px;
        margin-top: 80px;
        text-transform: capitalize;
       }

       .maindiv2 div p{
        background:url("../Rajarata fire/images/red.jpg");
        border-radius: 0 150px 10px 10px;
        height: 430px;
        padding: 50px 35px 10px 20px;
        border: 3px dotted white;
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

        /* Add this CSS for the image gallery */
.image-gallery {
    display: flex;
    justify-content: space-between;
    margin-top: 20px; /* Add some margin to separate it from the previous content */
}

.image-gallery2 {
    display: flex;
    justify-content: space-between;
    margin-top: 20px; /* Add some margin to separate it from the previous content */
}

.image-gallery3 {
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
        .maintitle {
            margin: 40px;
        }

        .maindiv1,
        .maindiv2 {
            flex-direction: column;
            align-items: center;
            margin-left: 50px;
            margin-right: 50px;
        }

        .maindiv1 div,
        .maindiv2 div {
            width: 100%;
            margin-bottom: 30px;
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
      

    </style>
</head>
<body>
    <?php
        include "head.php";
    ?>




    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>

            <div class="products">
            <h1 class="maintitle"><center> School Staff </center></h1>
</div>

<div class="image-gallery">
    <div class="image-details">
        <img src="../Rajarata fire/images/staff/12.jpg" alt="Image 1">
        <h2>Mrs.Damayanthi Gamage</h2>
        <p><b>(Principle & Director)</b></p><hr><br>
        
    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/staff/1.jpg" alt="Image 1">
        <h2>Mrs.Niluka Wickremarathna</h2>
        <p><b>(Headmistrss - Senior Section)</b></p><hr><br>
        <p>Science/Health/English Litreture</p>
    </div>

        <div class="image-details">
        <img src="../Rajarata fire/images/staff/2.jpg" alt="Image 1">
        <h2>Mrs.Nisansala Sewwandi</h2>
        <p><b>(Headmistrss - Primary Section)</b></p><hr><br>
        <p>Sinhala/Health/Civic</p>
    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/staff/5.jpg" alt="Image 1">
        <h2>Mrs.Nidarshika Damayanthi</h2>
        <p><b>(Teacher)</b></p><hr><br>
        <p>Tamil/History/Buddhism/Japanese/Cookery</p>
    </div>


</div>

<div class="image-gallery">

       <div class="image-details">
        <img src="../Rajarata fire/images/staff/3.jpg" alt="Image 1">
        <h2>Mrs.W.A.Ashka Wickramasinghe</h2>
        <p><b>(Primary Teacher)</b></p><hr><br>
        <p>Maths/ICT</p>
    </div>

        <div class="image-details">
        <img src="../Rajarata fire/images/staff/9.jpg" alt="Image 1">
        <h2>Miss. M.B.Umasha Weerasena </h2>
        <p><b>(Teacher)</b></p><hr><br>
        <p>Tamil/History/Buddhism/Japanese/Cookery</p>
    </div>

           <div class="image-details">
        <img src="../Rajarata fire/images/staff/7.jpg" alt="Image 1">
        <h2>Miss. M.G.Sachini Dilrukshi  </h2>
        <p><b>(Teacher)</b></p><hr><br>
        <p>Maths/Geography/Music</p>
    </div>

                  <div class="image-details">
        <img src="../Rajarata fire/images/staff/11.jpg" alt="Image 1">
        <h2>Miss. G.W.Chandani Witharana</h2>
        <p><b>(Teacher)</b></p><hr><br>
        <p>Media/Dancing/PTS</p>
    </div>


    
</div>

<div class="image-gallery">

               <div class="image-details">
        <img src="../Rajarata fire/images/staff/10.jpg" alt="Image 1">
        <h2>Miss.Dilini Kaushalya </h2>
        <p><b>(Teacher)</b></p><hr><br>
        <p>Nursary</p>
    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/staff/4.jpg" alt="Image 1">
        <h2>Miss.D.G.H.Piyumi Senarathna</h2>
        <p><b>(Teacher)</b></p><hr><br>
    </div>

        <div class="image-details">
        <img src="../Rajarata fire/images/staff/8.jpg" alt="Image 1">
        <h2>Miss.U.Y.G.Hiruni Bhagya</h2>
        <p><b>(Teacher)</b></p><hr><br>
    </div>

    <div class="image-details">
        <img src="../Rajarata fire/images/staff/6.jpg" alt="Image 1">
        <h2>Miss.C.P.Shakila Dananjani</h2>
        <p><b>(Teacher)</b></p><hr><br>
        <p>Nursary</p>
    </div>

 
</div>

    <?php
    include"footer.php";
    ?>




</body>
</html>