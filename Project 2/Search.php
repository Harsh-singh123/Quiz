<!DOCTYPE html>
<html lang="en">
<head>
<h1>Search</h1>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        h1,h2{
            margin-left: 300px;
        }
        
        form{
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
            padding-right:195px;
            
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
<form method="post">
UserName:<input type='text' name='user_name' ><br>

<input type='submit' name='inst' value='Save'>

</form> 
   
<?php
include "sidebar.html";
if(isset($_POST["inst"]))
{
$c=mysqli_connect("localhost","root","");
if($c)
{
mysqli_select_db($c, "mega quiz");
$a=$_POST["user_name"];
$disp=mysqli_query($c, "SELECT * FROM registor where user_name in('$a')");
if(mysqli_num_rows($disp)>0)
{
echo "<h2><b>Username found </b></h2>";
echo "<table border='1'>
<tr>
<th>id</th>
<th>UserName</th>
<th>Password</th>
<th>Gmail</th>
</tr>";
while($row=mysqli_fetch_array($disp))
{

echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["user_name"]."</td>";
echo "<td>".$row["password"]."</td>";
echo "<td>".$row["gmail"]."</td>";
echo "</tr>";
}
echo "</table>";
}


}
}
?>



</body>
</html>