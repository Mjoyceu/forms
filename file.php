<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
echo "Welcome". $_SESSION ['email'];

?>
<body>
  <style>
    body{
      overflow-x :hidden;
    }
    img , .bobs{
      margin-left: 10px;
    }
    .row{
      text-align: center;
    }
    #text{
      text-align:justify;
      margin-right:0;
    }
    button{
      background-color:lightblue;
      color:#fr;
      margin-left:10px;
    }
  </style>
  
    <!-- Columns are always 50% wide, on mobile and desktop -->
  <div class="row">
    <div class="col-6">
    <img src="imgs/bobby.jpg" class="bobs" alt="">
    </div>
    
    <div class="col-6" id="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate cum facere facilis, quasi ducimus accusantium debitis, iste, est voluptatibus labore asperiores pariatur veritatis repudiandae. Obcaecati harum laudantium quod maxime aliquid.Neque delectus repellendus perferendis assumenda pariatur inventore provident exercitationem corrupti nobis incidunt praesentium illo non nemo eos, libero facere! Ab repudiandae nisi aliquam saepe sed eaque, facilis dolores architecto inventore?</div>
  </div>
</div>
<button type="submit">submit</button>
</body>
  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="jQuery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</html>