<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishi Rentals</title>
    <link rel="stylesheet" href="home.css" crossorigin="anonymous">


</head>
    <body style="background-image:url('back.jpg')"></style>
        <nav>
            
            <label class="logo">Krishi Rentals</label>
            <ul>
                <li><a class="active" href="try.php">About</a></li>
                <li><a href="hire.html">Hire</a></li>
                <li><a href="rent.html">Rent</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class="welcome">
        <h3><center><?php echo "Welcome ". $_SESSION['username']?> !</h3></center>
        <h1>About Krishi Rentals</h1></style>
        <p>Krishi Rentals provides solution to the problem: <br>At a given time farmer equipment's are idle during non seasons. A platform that allows farmers to rent farming equipment for less during off season. A simple aggregation platform with call centre support that functions of booking equipment's. This will help farmers make additional income.</p><br>
             <table>
                <td><img class="img"src="farmer 1.gif" ></td>
                <td><img class="img"src="farmer 2.gif" ></td>
                <td><img class="img"src="farmer 3.gif" ></td>
                <td><img class="img"src="farmer 4.gif" ></td>
                <td><img class="img"src="farmer 5.gif" ></td>
            </table>


        <h1>On call Service:</h1>
        <p>We are also available on phone. You can rent and hire through our call support system.</p><p>Numbers available are:<br>1800-201-842<br>1800-201-843</p>
        <footer>
        <p class="tag">© 2022 Krishi Rentals. All Rights Reserved | </p>
        </footer>
        <style>
            .welcome h3{
                align:center;
                color:white;
                text-transform: uppercase;
                margin:1mm;
                position: relative;

                
            }
        img{
            padding:none;
            display:inline-block;
            margin-top:1cm;
            margin-bottom:1cm;
            position:block;
            margin-left: 0px;
            margin-right: 0px;
        }
        h1{
            padding: 0 50px;
            margin:auto;
            border: 5px;
            color:rgb(225, 240, 4);

        }
        ul il, p{
            border: 5px;
            padding: 0 50px;
            Font-size: 5mm;
            margin: auto;
            color:rgb(228, 238, 238);
            text-align: justify;
        }
        img{
            margin-left: auto;
            margin-right: auto;display: block;
            width: 40%;
        }
        .tag{
        padding:10px;
        position: fixed;
        bottom: 0;
        width:100%;
        Font-size: 4mm;
        background-color: white;
        text-align:center;
        color:black;
        margin-bottom: 0%;
        }
    </style>
    
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
 
    </body>
    </html>   
        
        
        
        
        
        
        
        
        
        
        