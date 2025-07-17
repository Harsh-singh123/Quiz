<html>
    
    <head> 
        <style>
          *{
                       margin: 0px;
                       padding:0px;
                       
                       
           } 
           .main{
                 display: grid;
                 place-items: center; 
                 background:linear-gradient(to right, #fc5c7d, #6a82fb);
                 padding-bottom:350px;
                 display: grid;
                 place-items: center; 
                 padding-top:50px;
                 
                 }
          
            .form{
                width: 250px;
                height: 350px;
                background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
                transform: translate(0%,-5%);
                border-radius: 25px;
                padding:75px;
                display: grid;
                place-items: center;  
                }
           .form h1{
                 color:white;
                 display: grid;
                 place-items: center; 
                }
           .form input{
                width: 240px;
                height: 35px;
                background: transparent;
                border-bottom: 1px solid #6a82fb;   
                border-top: none;
                border-right: none;
                border-left: none;
                color: white;
                font-size: 15px;
                letter-spacing: 1px;
                margin-top: 30px;
                font-family: sans-serif;
                animation: color 2s;
              }
            
            .form input:focus{
                outline: none;
                }
              
           .btnn{
                width: 240px;
                height: 40px;
                border: none;
                margin-top: 30px;
                font-size: 18px;
                font-size: 18px;
                border-radius: 25px;
                background:linear-gradient(to right, #fc5c7d, #6a82fb);
                cursor: pointer;
                color: #fff;
                transition: 0.4s ease;
                align-items: center;
             }
        .btnn:hover{
            background:linear-gradient(to right, #6a82fb, #fc5c7d);
                color: black;
        }
        .btnn a{
                text-decoration: none;
                color: #000;
                font-weight: bold;
        }
        @keyframes color {
            0%{
                font-size:1px;
                margin-top:1150px;
                
            }
            100% {
                color:grey;
                font-size:15px;
               
            }
            
        }
        </style>
    </head>
    
    <body>
    
        <form method="post">
        <div class="main">
        
        <div class="form">
        <header><h1>Feedback</h1></header>
            <div class="feedback">
            
            <input type="text" name="fname" placeholder="First name" >
            <input type="text" name="lname" placeholder="Last name" >
            <input type="gmail" name="gmail" placeholder="Enter Gmail" >
            <input type="textbox"name="comment" placeholder="Comment" >
         
            </div>  
           
    </div>
    <input class="btnn" type="submit" name="inst" value="Insert Record">
    </div>
    </form>
   

            <?php
        $c=mysqli_connect("localhost","root","");
        if($c)
        {
        mysqli_select_db($c, "mega quiz");
        if(isset($_POST["inst"]))
        {
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $gmail=$_POST["gmail"];
        $comment=$_POST["comment"];
        $ins= "insert into feedback values('','$fname','$lname','$gmail','$comment') ";
        if(mysqli_query($c, $ins))
        echo "Record is inserted successfully";
        else
        echo mysqli_error($c);

        }
        }
        mysqli_close($c);
        ?>


    </body>
</div>
</html>