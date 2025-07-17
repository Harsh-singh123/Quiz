<html>
    <head> 
        <style>
             *{
                margin: 0px;
                padding: 0px;
            }
            body {
                background:linear-gradient(to right, #fc5c7d,#6a82fb);
                padding: 30px;
               
            }
            
            .form{
                width: 250px;
                height: 350px;
                background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
                transform: translate(0%,-5%);
               
                border-radius: 6px;
                padding: 100px;
                margin: auto;
                border-radius:25px;
                
                
                

            }
            .form input{
                width: 240px;
                height: 35px;
                
                background:transparent;
                border-bottom: 1px solid  #6a82fb;   
                border-top: none;
                border-right: none;
                border-left: none;
                color: white;
                font-size: 15px;
                letter-spacing: 1px;
                margin-top: 30px;
                font-family: sans-serif;
            }   
            .form input:focus{
                outline: none;
                }
            .btnn{
                width: 240px;
                height: 40px;
                border: none;
                margin-left:600px;
                margin-bottom:75px;
                font-size: 18px;
                border-radius: 25px;
                background:linear-gradient(to right, #fc5c7d, #6a82fb);

                
        }
        .btnn:hover{
            background:linear-gradient(to right, #6a82fb, #fc5c7d);
                color: white;
        }
        .btnn a{
                text-decoration: none;
                color: #000;
                font-weight: bold;
        }
        .round{
            background:white;
        }
        .sign{
            animation: color 2s;
            height: 1px;
            font-size: 35px;
            color:white;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        p{
            margin:15px;
        }
        @keyframes color {
            0%{
                font-size:1px;
                margin-top:1150px;
                
            }
            100% {
                color:grey;
                font-size:30px;
               
            }
            
        }
        h1{
            padding-left:575px;
            color:green;
        }
        h2{
            padding-left:500px;
            color:red;
        }
       
        </style>
    </head>
<body>

<form method="post">
    <div class="form" >
    <p class="sign">Sign  up</p><br>

 
 <input type="text" name="user_name" placeholder="Enter UserName"><br>
 <input type="password" name="cpassword" placeholder="Enter Password" ><br>
 <input type="password" name="password" placeholder="Confirm Password"><br>
 <input type="gmail" name="gname" placeholder="Enter Gmail">
 <input type="hidden" id="usertype" name="usertype" value="user">



</div>
<div class="sub">


<a href="index.php"> <button type="submit" class="btnn" name="inst"> Sign up</button></a>
</div>
  
</form>
</div>


<?php
$c=mysqli_connect("localhost","root","");
if($c)
{
    mysqli_select_db($c, "mega quiz");
    if(isset($_POST["inst"]))
    {
        //$id=$_POST["id"];
        $u=$_POST["user_name"];
        $p=$_POST["password"];
        $cpassword = $_POST["cpassword"];
        $ut=$_POST["usertype"];
        $g=$_POST["gname"];
      
        
       
        
        if($cpassword != $p){
            echo "<h2>".'Password and Confirm Password do not match!'."</h2>";
        } 
        else {
           
            $ins= "insert into registor values('','$u','$p','$ut','$g')";
            if(mysqli_query($c, $ins)){
                echo "<h1>"."Successfully created"."</h1>";
                header("location: index.php");
            }
            else{
                echo mysqli_error($c);
                echo "Try again";
            }
        }
    }
}
mysqli_close($c);
?>

</body></html>

