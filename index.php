<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
	<title>Melnichuk Ola</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/mycss.css">
	<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="container" id="header">
			<img src="img/Detective_Girl.png" class="col-lg-2">
			<span>My presentition site</span>
		</div>
		<ul class="nav nav-tabs col-lg-6">
			<li role="presentation"  class="active"><a data-toggle="tab" href="#home">Home</a></li>
			<li role="presentation"><a data-toggle="tab" href="#resume">Resume</a></li>
			<li role="presentation"><a data-toggle="tab" href="#purposes">My purposes&achievement</a></li>
			<li role="presentation"><a data-toggle="tab" href="#task">My test task</a></li>
		</ul>
	</div>
	<div class="container">
		<div class="tab-content">
			<div id="home" class="tab-pane fade in active">
				<h3>Hello!</h3>
				<p>My name is Ola and that's my page. <br>
				I like IT because here I am surrounded by very clever, positive, the funniest people in the world and here is always a possibility to learn more.<br>
				I created the page to show my knowledge in HTML, CSS, JS, (Bootstrap).
				</p>
			</div>
			<div id="resume" class="tab-pane fade">
				<h3>Resume</h3>
				<a href="others/resume.pdf" download>You can download here</a>

			</div>
			<div id="purposes" class="tab-pane fade">
				<h3>My purposes&achievement</h3>
				<p>For the last year - I improved my level of English, and pass the exam ISTQB Foundation level </p>
				<p>My aims for this year: to pass IELTS exam, to learn programing language</p>
			</div>
			<div id="task" class="tab-pane fade">
				<h3>My test task</h3>
				<?php include 'task.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
