<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .mainheding{
            margin-top: 200px;
            text-align: center;
            font-size: 35px;
            color: rgba(34,0,147,255);
        }

        .maindiv{
            display: flex;
            justify-content: space-between;
            text-align: center;
            margin-left: 200px;
            margin-right: 200px;
            margin-top: 50px;
            margin-bottom: 50px;

        }

        .maindiv div{
 
            height: 220px;
            width: 400px;
            padding-top: 50px;
            font-size: 20px;
           
            background-size: 500px;           

        }

        .maindiv i{
            font-size: 25px;
            padding: 10px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .maindiv div .title{
            color: black;
            font-size: 25px;
        }

        .maindiv div p{
            margin-top: 15px;
            font-weight: bolder;
            line-height: 30px;
            color: white;
            
        }

        .seconddiv{
            display: flex;
            justify-content: space-between;
            margin-left: 250px;
            margin-right: 250px;
            margin-bottom: 50px;
            margin-top: 100px;
        }

        .seconddiv .form{
            background:url("../Rajarata fire/images/9.jpg");
            background-size: 700px;
            padding: 25px;
            font-size: 23px;

            line-height: 50px;
            border-radius: 10px;
        }

        .seconddiv h1{
            font-size: 28px;
            text-align: center;
            margin-bottom: 15px;
        }

        .seconddiv input{
            height: 40px;
            width: 300px;
            border-radius: 10px;
            padding-left: 15px;
        }

        .seconddiv .name{
            margin-left: 103px;
        }

        .seconddiv .email{
            margin-left: 97px;
        }

        .seconddiv .address{
            margin-left: 170px;
            border-radius: 10px;
            padding: 10px;
        }

        .seconddiv .submit{
            margin-left: 230px;
            font-size: 20px;
            font-weight: bold;
            background-color: rgba(230, 29, 37, 255);
            color: white;
            width: 150px;
        }

        .seconddiv .submit:hover{
            background-color: green;
        }

        @media screen and (max-width: 768px) {
        .maindiv {
            flex-direction: column;
            align-items: center;
        }

        .maindiv div {
            width: 100%;
            margin-bottom: 30px;
            margin-left: 50px;
            margin-right: 50px;
            height: 300px;
        }

        .seconddiv {
            flex-direction: column;
            align-items: center;
            margin-left: 50px;
            margin-right: 50px;
        }

        .seconddiv .form {
            width: 100%;
            margin-bottom: 30px;
        }

        .seconddiv input,
        .seconddiv textarea {
            width: 100%;
        }

        .seconddiv .name,
        .seconddiv .email,
        .seconddiv .address,
        .seconddiv .submit {
            margin-left: 0;
        }
}

        

    
    </style>
</head>
<body>

    <?php
        include "head.php";
    ?>
    
    <h1 class="mainheding">Contact Us</h1>

    <div class="maindiv">
        <div class="div1">
        <i><a href="" class="fa-solid fa-phone"  style="color: blue; border:2px solid white; padding:15px; border-radius: 90px;"></a></i><br>
       <p class="title">Call Us Directly :</p> <br> <h4><span style="color: darkblue;">+94 71 300 3200</span></h4>

        </div>

        <div>
        <i><a href="" class="fa-solid fa-location-dot" style="color: blue; border:2px solid white; padding:15px; border-radius: 90px;"></a></i><br>
           <p class="title">Address :</p> <br>     <h4><span style="color: darkblue;">Kingston International School, <br>Lenadora , Dambulla</span></h4>
        </div>
    
           

        <div>
            <i><a href="" class="fa-solid fa-envelope" style="color: blue; border:2px solid white;size: ; padding:15px; border-radius: 90px;"></a></i><br>
           <p class="title"> Email :</p> <br> <h4><center><span style="color: darkblue;">kingstonislenadora@gmail.com</span></center></h4>
        </div>
            
    </div>

    <div class="seconddiv">

        <div class="form">
    
<h1>Send Us a Message</h1>
    <form action="" id="contact-form">
        <b>Name:</b> <input type="text" class="name"><br>
        <b>Email:</b> <input type="email" class="email"><br>
        <b>Contact Number:</b> <input type="number" name="contactNumber" id="contactNumber"><br>
        <b>Address:</b><br> <textarea name="address" class="address" cols="35" rows="4"></textarea><br>
        <center><input type="submit" value="Submit" class="submit"></center>
    </form>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission
            var email = document.querySelector('.email').value;
            alert('You entered the following email address: ' + email);
            // You can now use the 'email' variable for further processing.
        });
    </script>       </div>

        <div class="map">
            <h1>School Location</h1>

         <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=817&amp;height=383&amp;hl=en&amp;q=kingston international school ,  lenadoara&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Puzzle</a></div><style>.mapouter{position:relative;text-align:right;width:150%;height:383px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:383px;}.gmap_iframe {height:383px!important;}</style></div>
            
        </div>
    </div>

     <?php
    include"footer.php";
    ?>


</body>
</html>