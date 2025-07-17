<?php include"sidebar.html";?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>DeleteUser</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         h1{
            margin-left: 300px;
        }
        table {
            max-width: 100%;
            padding-left:190px;
            padding-top:10px;
            margin:100px;
    }

            tr:nth-child(odd) {
            background: #D3D3D3 ;
        
            }

            th {
            background-color:#555;
            color: #fff;
            font-weight:bold ;
            font-size:20px;
            
            
            }

            th{
            padding: 0.5em 1em;
            padding:20px;
            font-weight:bold ;  

            }
            td {
              
            padding: 0.5em 1em;
            padding-right:143px;
            font-weight:bold ;

            
            }
           
            td::before {
            display: none;
            }

            @media screen and (max-width: 680px) {
            table {
            border: 0;
            display: block;
            box-shadow: none;
            }

            thead {
            position: absolute;
            opacity: 0;
            }
            
            tbody {
            display: block;
            width: 100%;
            min-width: 19em;
            max-width: 25em;
            }

            tr {
            border-top: 2px solid #3c3c3b;
            border-bottom: 1px solid #3c3c3b;
            display: grid;
            grid-template-columns: max-content auto;
            margin-bottom: 1em;
            }

            td {
            display: contents;
            }

            td::before {
            display: inline-block;
            font-weight: bold;
            padding: 0.5em;
            border-bottom: 1px solid;
            }
            
            td span {
                padding: 0.5em;
                border-bottom: 1px solid;
            }

            td:last-child {
            border-bottom: 0;
            }
            }
            
    </style>
</head>
<!--table is create-->
<body>
    <div class="center">
                <?php
            $c=mysqli_connect("localhost","root","");
            if($c)
            {
            mysqli_select_db($c,"mega quiz");
            if(isset($_GET["sb"]))
            {
            $a=$_GET["id"];
            $q="delete from registor where id='$a'";
            if(mysqli_query($c,$q))
            echo "<script>alert('Record is deleted successfully');</script>";
            else
            echo mysqli_error($c);

            }
            $d=mysqli_query($c,"select * from registor");
            echo "<table border='1'><tr><th>id</th>
            <th>username</th><th>password</th><th>gmail</th><th>Delete</th></tr>";
            while($row=mysqli_fetch_array($d))
            {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row['user_name']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['gmail']."</td>";
            echo "<td><form>
            <input type='hidden' name='id' value={$row['id']}>
            <input type='submit' name='sb' value='Delete'></form></td>";
            echo "</tr>";
            
            }
            echo "</table>";
            }


            else
            echo mysqli_error($c);
            ?>

    </div>
</body>
</html>
