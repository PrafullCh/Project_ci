<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|PT+Sans|Playfair+Display|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">
	<style type="text/css">
		body{
			padding: 0;
			margin: 0;
			height: 100%;
			background-image: url("<?=base_url('images/teamwork.jpg');?>");
			background-size: cover;
			display: flex;
			justify-content: center;
			align-items:  center;
		}
		.contain{
			margin-top: 0px;
			margin:5px;
			padding: 30px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items:  center;
			background-color: rgb(255,255,255);
			box-shadow: 10px 10px 5px black;
		}
		.personal{
			display: flex;
			flex-direction: row;
			padding: 10px;
			justify-content: center;
			align-items:  center;
		}
		.individual{
			margin: 10px;
			padding: 10px;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items:  center;
		}
		.individual img{
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border:5px solid pink;
		}
		.font1{font-family: 'Roboto Slab', serif;}
		    .font2{font-family: 'Source Sans Pro', sans-serif;}
		    .font3{font-family: 'Playfair Display', serif;}
		    .font4{font-family: 'EB Garamond', serif;}
		    .header_font{font-family: 'PT Sans', sans-serif;}
		    .text{
		    	width: 650px;
		    	
		    }
		    .text p{
		    	text-align: justify;
		    }
	</style>
</head>
<body>
			<div class="contain">
				<div>
					<h1 class="font2">Our Team</h1>
				</div>
				<div class="personal">
					<div class="individual">
						<img src="<?= base_url('images/prafull.jpg')?>">
						<h2 class="font1">Prafull Chavan</h2>
						<h4 class="font1">Senior Developer</h4>
					</div>
					<div class="individual">
						<img src="<?= base_url('images/sandeep.jpg')?>">
						<h2 class="font1">Sandeep Shewale</h2>
						<h4 class="font1">Jr. Developer</h4>
					</div>
					<div class="individual">
						<img src="<?= base_url('images/ashlesha.jpg')?>">
						<h2 class="font1">Ashlesha Narkhede</h2>
						<h4 class="font1">Web Designer</h4>
					</div>
					<div class="individual">
						<img src="<?= base_url('images/nilam.jpg')?>">
						<h2 class="font1">Nilam Bagul</h2>
						<h4 class="font1">Web Designer</h4>
					</div>
				</div>
				<div class="text">
					<p class="font2">
					&nbsp&nbsp&nbsp	Reading is one thing that shape your mind allow you to flow through many things and gives you many experiances of may things. Reading stretches your imagination and teaches more than just reading paragraphs. It gives you information, knowledge and influence your mind nd also entertain you.<br>

					&nbsp&nbsp&nbspHere at "Book Basket" we give you quality reading through many different books. We offer wide varirty of books that fulfill your need of information.Books offer many more thingsand books that we offer fulfill all your needs. We offer you books of various kinds. We offer books fom old ones and adults to younger ones.
					</p>
				</div>
			</div>
</body>
</html>