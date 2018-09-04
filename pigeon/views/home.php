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
	
    <title>DISPATCH</title>
        
  </head>
  
  <body>

    <div class="jumbotron">
      <h1 class="display-4">DISPATCH</h1>
      <p class="lead">Fill in the following details:</p>
      <hr class="my-4">
      
      <div class="row">
      	<div class="col-lg-8">
        <?php echo validation_errors(); ?>
        
        <form action="<?php echo site_url('home/save');?>" method="post">
          <div class="form-group">
            <label for="distance">Distance</label>
            <input class="form-control" type="text" id="distance" name="distance" placeholder="Distance">
          </div>
		  
		   <div class="form-group">
                <label for="dtp_input1" class="col-md-8 control-label">DateTime Picking</label>
				<br>
                <div class="input-group date form_datetime col-md-5" data-date="2018-09-16T05:25:07Z" data-date-format="yyyy-mm-dd HH:ii:ss" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" name="date" value="" /><br/>
            </div>
         
 		 

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        
        </div>
      </div>

    </div>

<script type="text/javascript" src="/codeigniter/assests/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="/codeigniter/assests/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/codeigniter/assests/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/codeigniter/assests/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>

	
  
  </body>
  
</html>