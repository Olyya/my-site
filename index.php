<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
	<title>Melnichuk Ola</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="/web/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/web/css/mycss.css">
	<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="container" id="header">
			<img src="/web/img/Detective_Girl.png" class="col-lg-2">
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
				<a href="/web/others/resume.pdf" download>You can download here</a></br>		
				<script src="/web/viewer/web/compatibility.js"></script>
				<script src="/web/viewer/build/pdf.js"></script>
				<script type="text/javascript">
						//PDFJS.getDocument("/web/others/resume.pdf");
					var loadingTask = PDFJS.getDocument("/web/others/resume.pdf");
					loadingTask.promise.then(function(pdf) {
					console.log('PDF loaded');
				
					// Fetch the first page
					var pageNumber = 1;
					pdf.getPage(pageNumber).then(function(page) {
					console.log('Page loaded');
				
					var scale = 1.5;
					var viewport = page.getViewport(scale);

					// Prepare canvas using PDF page dimensions
					var canvas = document.getElementById('the-canvas');
					var context = canvas.getContext('2d');
					canvas.height = viewport.height;
					canvas.width = viewport.width;

					// Render PDF page into canvas context
					var renderContext = {
						canvasContext: context,
						viewport: viewport
					};
					var renderTask = page.render(renderContext);
					renderTask.then(function () {
					console.log('Page rendered');
					});
				  });
				}, function (reason) {
				  // PDF loading error
				  console.error(reason);
				});
				</script>
				<canvas id="the-canvas"></canvas>
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