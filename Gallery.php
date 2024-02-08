<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-left: 50px;
            margin-right: 50px;
        }

        .container .heading{
            width: 50%;
            padding-bottom: 50px;
        }

        .container .heading h1{
            font-size: 30px;
            font-weight: bold;
            margin-top: 200px;
            color: rgba(34,0,147,255);
            padding-bottom: 10px;
        }

        .container .box{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .container .box .dream{
            display: flex;
            flex-direction: column;
            width: 32.5%;
        }

        .container .box .dream img{
            width: 100%;
            padding-bottom: 15px;
            border-radius: 5px;
        }

        @media only screen and (max-width:769px){

            .container .box{
                flex-direction: column;
            
            }

            .container .box .dream{
                width: 100%;
            }

        }

        @media only screen and (max-width:643px){
            .container .heading{
            width: 100%;
            
        }

        .container .heading h1{
            font-size: 15px;
            font-weight: bold;
            
        }
            

        }
    </style>
</head>
<body>
    
    <?php
     include "head.php";
    ?>

    <div class="container">
        <div class="heading">
            <h1>Photo Gallery</h1>
        </div>

        <div class="box">

            <div class="dream">
                <img src="../Rajarata fire/images/LR EDIT/1.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/2.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/3.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/4.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/5.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/6.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/7.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/8.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/9.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/10.jpg" alt="">
            </div>

            <div class="dream">
                <img src="../Rajarata fire/images/LR EDIT/11.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/12.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/13.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/14.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/15.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/16.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/17.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/18.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/19.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/20.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/30.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/32.jpg" alt="">
        

            </div>

            <div class="dream">
                <img src="../Rajarata fire/images/LR EDIT/21.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/22.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/23.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/24.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/25.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/26.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/27.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/28.jpg" alt="">
                <img src="../Rajarata fire/images/LR EDIT/29.jpg" alt="">
                  </div>
        </div>
    </div>

     <?php
    include"footer.php";
    ?>



</body>
</html>