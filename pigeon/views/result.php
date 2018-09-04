<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Boostrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"[-->
<link href="/codeigniter/assests/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/codeigniter/assests/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
    <title>Result</title>
        
  </head>
  
  <body>

    <div class="jumbotron">
      <h1 class="display-4">Results</h1>
      
      <hr class="my-4">
      
      <div class="row">
      	<div class="col-lg-8">
      <?php //echo $distance;
	  
	 // echo $date;
	 
	 $start  = date_create($date);
$end = date_create(); // Current time, 05:40

$diff  = date_diff( $end, $start );
 $diffrence= $diff->h; // Result: 1
//$diffrence=1;
	  if($distance<=500){
		  ?>
		  Available Pigeons:
		  <hr></hr>
		<?php   if(($diffrence==1) && ($distance>80)){
			
		}
		else
		{
			?>
		  Bonito 
		  <br>
		  
		  Speed:80km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  <?php 
		}
		?>
		<?php   if(($diffrence==1) && ($distance>70)){
			
		}
		else
		{?>
		  <hr>
		   Antonio 
		  <br>
		  
		  Speed:70km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  <?php
		}
		  if(($diffrence==1) && ($distance>65)){
			
		}
		else
		{?>
		  <hr>
		   Carillo 
		  <br>
		  
		  Speed:65km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  <?php
		}
		   if(($diffrence==1) && ($distance>70)){
			
		}
		else
		{?>
		  	  <hr>
		   Alejandro 
		  <br>
		  
		  Speed:70km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  
		  <?php 
		}
	  }
	
	  else if(($distance>500) &&($distance<=600)){
		  ?>
		  Available Pigeons:
		  <hr></hr>
		  
		  <?php   if(($diffrence==1) && ($distance>70)){?>
		  
		  <?php 
		  }
		  else
		  {?>
		  Antonio 
		  <br>
		  
		  Speed:70km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  <?php 
		  }
		  ?>
		  <hr>
		  
		   <?php   if(($diffrence==1) && ($distance>65)){
		   }
		   else
		   {
			   ?>
		   Carillo 
		  <br>
		  
		  Speed:65km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  <?php
		   }
		   ?>
		  	  <hr>
			  
			  <?php   if(($diffrence==1) && ($distance>70)){
			  }
			  else
			  {
				  ?>
		   Alejandro 
		  <br>
		  
		  Speed:70km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  
		  <?php 
			  }
	  }
	  else if(($distance>600) &&($distance<=800)){
		  ?>
		  Available Pigeons:
		  <hr></hr>
		  <?php   if(($diffrence==1) && ($distance>65)){
			 
		  }
		  else
		  {
			  ?>
		   Carillo 
		  <br>
		  
		  Speed:65km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  <?php
		  }
		  ?>
		  	  <hr>
			  
			  <?php   if(($diffrence==1) && ($distance>70)){
				  
			  }
			  
			  else
			  {
				  ?>
		   Alejandro 
		  <br>
		  
		  Speed:70km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  
		  <?php 
			  }
	  }
	  else if(($distance>800) &&($distance<=1000)) {
		  ?>
		  Available Pigeons:
		  
		  
		<hr></hr>
		
		  <?php   if(($diffrence==1) && ($distance>65)){
			  
			  
		  }
		  
		  else
		  {
			  
			?>
		  <hr>
		   Carillo 
		  <br>
		  
		  Speed:65km/hour<br>
		  cost :<?php echo $distance *2 ;?><br>
		  
		  	  <hr>
		   
		  
		  <?php 
	  }
	  }
	  
	  
	  
	  
	  ?>
        
        
        
        </div>
      </div>

    </div>


	
  
  </body>
  
</html>