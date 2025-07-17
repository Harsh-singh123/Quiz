
<!DOCTYPE html>
<html lang="en">
<head>
<h1>UpdateUser</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            margin-left: 300px;
        }
        form {
            width: 100px;
            margin-left: auto;
            margin-right: auto;

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
            text-align:center;
            font-weight:bold ;
            align:center;
            padding-right:130px;
            
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

<body>
    
   
        <?php
        include "sidebar.html";
        $c=mysqli_connect("localhost","root","");
        if($c)
        {

        mysqli_select_db($c,"mega quiz");
        if(isset($_GET["sb"]))
        {
        $a=$_GET["id"];
        $d=mysqli_query($c,"select * from registor where id='$a'");
        $row=mysqli_fetch_array($d);
        echo "<form>
        id:<input type='text' name='n' value={$row['id']}><br>
        User_Name:<input type='text' name='n1' value={$row['user_name']}><br>
        Password:<input type='password' name='n2' value={$row['password']}><br>
        Gmail:<input type='gmail' name='n3' value={$row['gmail']}><br>
        <input type='submit' name='sb1' value='Save'></form>";

        }
        if(isset($_GET["sb1"]))
        {
        $x=$_GET["n1"];
        $y=$_GET["n2"];
        $z=$_GET["n3"];
        $q="UPDATE `registor` SET `password`='$y',`gmail`='$z' WHERE user_name='$x'";
        if(mysqli_query($c,$q))
        echo "Record is updated successfully";
        else
        echo mysqli_error($c);

        }
        $d=mysqli_query($c,"select * from registor");
        echo "<table border='1'><tr><th>id</th><th>User Name</th>
        <th>Password</th><th>Gmail</th><th>Update</th></tr>";
        while($row=mysqli_fetch_array($d))
        {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row['user_name']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['gmail']."</td>";
        echo "<td><form>
        <input type='hidden' name='id' value={$row['id']}>
        <input type='submit' name='sb' value='Update'></form></td>";
        echo "</tr>";
        }
        echo "</table>";


        }
        else
        echo mysqli_error($c);?>

            </div>
</body>
</html>
