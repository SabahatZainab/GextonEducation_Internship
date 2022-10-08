<!DOCTYPE html>
<?php

$days = $hours = $minutes = $seconds = 0;
$total = 0;
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$taskno = $_POST['taskno'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$days = $_POST['day'];
	$hours = $_POST['hour'];
	$minutes = $_POST['minute'];
	$seconds = $_POST['second'];

	$seconds = $seconds * 1000; // Converted into milliseconds
	$minutes = $minutes * 60 * 1000; // Converted into milliseconds
	$hours = $hours * 60 * 60 * 1000; // Converted into milliseconds
	$days = $days * 24 * 60 * 60 * 1000; // Converted into milliseconds
	
	$total = $days + $hours + $minutes + $seconds; // Total milliseconds
}
?>
<html>

<head>
	<meta charset="utf-8">
	<title>Task20_Online Portal</title>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- External/Custom CSS File -->
	<link href="./css/design.css" rel="stylesheet">
	<!-- External/Custom JS Files -->
	
	<script type="text/javascript" src="./js/cookie.js"></script>
	<script type="text/javascript" src="./js/timer.js"></script>
	<script type ="text/javascript" defer="defer">
		var buttondisable = function(){

			var UTC_hours = new Data().getUTCHours + 1;
			if(UTC_hours >= 21){
				document.getElementById('submitBtn').disabled = true;
			}
			else{
				document.getElementById('submitBtn').disabled = false;
			}
		};
		setInterval(buttondisable, 1000*60);
		buttondisable();
	</script>
</head>


<body>
	<div class="container">
	
		<!-- Setting up the Countdown Timer and taking User Input using Form -->
		<div class="text-center">
			<div class="well well-sm col-md-12 col-sm-12 col-xs-12">
				<form id="setTimerForm" style="padding-top:15px;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?>">
				
					<div class="text-center">
						<label id="main_text" style="padding-bottom:10px; color:black; font-size: 30px"><b><u>Assign Task To Students</u></b></label> <br/>
					</div>
					
					<div class="col-md-3 col-sm-6">
					<label for="">Task No:</label>
					<input class="form-control" type="text" name="taskno" id="taskno">
					</div>

					<div class="col-md-3 col-sm-6">
					<label for="">Task Title</label>
					<input class="form-control" type="text" id="title" name="title">
					</div>

					<div class="col-md-3 col-sm-6">
					<label for="">Task Description</label>
					<input class="form-control" type="text" name="description" name="description">
					</div>

					<br><hr>

					<div class="col-md-3 col-sm-6">
						<label>Day(s)</label>
						<input required class="form-control" type="number" maxlength="5" name="day" value="" placeholder="0-99999">
					</div>
					<div class="col-md-3 col-sm-6">
						<label>Hour(s)</label>
						<input required class="form-control" type="number" maxlength="5" name="hour" value="" placeholder="0-99999">
					</div>
					<div class="col-md-3 col-sm-6">
						<label>Minute(s)</label>
						<input required class="form-control" type="number" maxlength="5" name="minute" value="" placeholder="0-99999">
					</div>
					<div class="col-md-3 col-sm-6">
						<label>Second(s)</label>
						<input required class="form-control" type="number" maxlength="5" name="second" value="" placeholder="0-99999">
					</div>
					<div class="text-center col-md-12 col-sm-12" style="padding-top:15px; padding-bottom:15px">
						<div class="col-md-12">
							<div class="col-md-6 col-sm-6 col-xs-12 text-center" style="padding-top:5px">
								<input style="width:150px;" type="submit" class="btn btn-primary" value="Assign Task">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12" style="padding-top:5px">
								<button style="width:150px" type="button" class="btn btn-danger" onclick="Reset()">Reset Task</button>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
				
		<div>
			
			<div  class=" col-sm" style="padding-top:50px">
				<div style="padding-top:100px" id="background_image" class="col-sm">
					<div class="text-center">
						<p id="Main_Text"><b>Assigned Tasks</b></p><br><hr>
						
							<h3><b>  Task NO:  </b>  <?php echo $taskno ?></h3>
							<h3><b>  Task Title:  </b><?php echo $title ?></h3>
							
							<h3><b>  Task Description/Details:  </b><?php echo $description ?></h3>
							<br>
							<div>
						
								<input type='submit' name='submit' id='submitBtn' class='enableOnInput' value="Upload Task" style="font-size: 22px; text-align: center;">
						
							</div>
						 <hr>
						<h1>Timings:</h1>
						<br><br>
						
						<div class="col-md-3 col-sm-3">
							<label class="timer" id="timer_days"></label> <br/>
							<label id="day">Day(s)</label>
						</div>
						<div class="col-md-3 col-sm-3">
							<label class="timer" id="timer_hours"></label> <br/>
							<label id="hr">Hour(s)</label>
						</div>
						<div class="col-md-3 col-sm-3">
							<label class="timer" id="timer_minutes"></label> <br/>
							<label id="min">Minute(s)</label>
						</div>
						<div class="col-md-3 col-sm-3">
							<label class="timer" id="timer_seconds"></label> <br/>
							<label id="sec">Second(s)</label>
						</div>
						<br>
						<br>
						
					</div>

				</div>
				
			</div>
			
			<script>	
			
		function Reset() {
			TimerFunction(-97); 
		}
		
		var temp = <?php echo $total; ?>; 
		TimerFunction(temp); 
	</script>
	
</body>
</html>
