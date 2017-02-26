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
				<p>My name is Ola and that's my site. <br>
				I like IT because here I am surrounded by very clever, positive, the funniest people in the world and here is always a possibility to learn more.<br>
				I created the site to show my knowledge in HTML, CSS, JS, (Bootstrap).
				</p>
				<p>My contacts: </br>
					tel. 0634171202 </br>
					<span>e-mail:</span>
					<a href= "mailto:melnichuk.ola@gmail.com">melnichuk.ola@gmail.com</a></br>
					<span>Fb:</span>
					<a href="https://www.facebook.com/ola.melnichuk">https://www.facebook.com/ola.melnichuk</a></br>
					<span>GitHub:</span>
					<a href="https://github.com/Olyya/my-site">https://github.com/Olyya/my-site</a>
				</p>
			</div>
			<div id="resume" class="tab-pane fade">
				<h3>Resume</h3>
				<a href="others/resume.pdf" download>You can download here</a></br>
				<a href="others/resume.pdf">View resume here</a>
				<script src="viewer/web/pdf.js"></script>



			</div>
			<div id="purposes" class="tab-pane fade">
				<h3>My purposes&achievement</h3>
				<p><h3>For the last year:</h3></br>
					<ul>
						<li>Start working as entrepreneur;</li>
						<li>I improved my level of English;</li>
						<li>Pass the exam ISTQB Foundation level</li>
					</ul>
				</p>
				<p><h3>My aims for this year:</h3>
					<ul>
						<li>To pass IELTS exam;</li>
						<li>To learn at list one of programing language;</li>
						<li>To read at list 10 books</li>
					</ul>
				</p>
			</div>
			<div id="task" class="tab-pane fade">
				<h3>My test task</h3>
				<?php include 'task.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>
