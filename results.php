
<?php
 include_once('connection.php');


$query="select * from cv";
$result = mysqli_query($conn,$query);
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Academic Background</title>
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700|Faster+One|Trade+Winds&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<style>
     <?php include 'css/style.css' ?>
   <?php include 'images/a.jpg'?>
 </style>
  

     <div class="about_me">
<img src="images/bulb.jpg" alt="bck2">
 
  <!-- header -->
  <section class="header_part">
        <div class="wrapper">
            <div class="logo">
                <a href="index.html" style=" color:#000; position: absolute; top: 27px; font-size: 37px; font-weight:600; font-family: 'Monoton', cursive; font-style: italic "   >MUSADDIK</a>
            </div>
            <div class="menu">
                <ul>
                    <li ><a href="index.html">Home </a></li>
                    <li class="active"><a href="results.php">Academic background</a></li>
                    <li><a href="swot1.html">SWOT</a></li>        
                     
                    <li ><a href="skill.php">About Me</a></li>
                  
                </ul>
            </div>
        </div>
        <div class="clr"></div>
    </section>
    <!-- header -->

    

<table > 
  <tr>
      <th colspan="5"><h2>RESULTS</h2></th>
  </tr>    
  <tr> 
          <td style="font-size:20px; font-style:bold;"> <u>Name of Exam</u> </td> 
          <td style="font-size:20px; font-style:bold;"> <u>Group</u> </td> 
          <td style="font-size:20px; font-style:bold;"> <u>Year of Passing</u>  </td> 
          <td style="font-size:20px; font-style:bold;"> <u>Institute</u> </td> 
          <td style="font-size:20px; font-style:bold;"> <u>Result</u></td> 
      </tr> 

 <?php 
 
 while($rows=mysqli_fetch_assoc($result))
     {
 ?>
     <tr>
         <td align="center"><?php echo $rows['Name of Exam'];?></td>
         <td align="center"><?php echo $rows['Group'];?></td>
         <td align="center"><?php echo $rows['Year of Passing'];?></td>
         <td align="center"><?php echo $rows['Institute'];?></td>
         <td align="center"><?php echo $rows['Result'];?></td>
     </tr>

     <?php 
 }
    ?>
</table>
 
     </div>
 
</body>
</html>

  

  









































