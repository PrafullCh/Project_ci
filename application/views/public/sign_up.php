<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Ubuntu" rel="stylesheet">
	<title>Sign UP</title>
	<style type="text/css">
			body{
				margin: 0;
				padding:0;
				background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%);
				font-family: 'Roboto', sans-serif;
				
			}
			.container{
				margin-top: 10vh;
				display: flex;
				flex-direction:row; 
				justify-content: center;
				box-shadow: 10px 10px 10px white;
			}
			.block-1{
				display: flex;
				flex-direction: column;
				width: 30vw;
				align-items: center;
			}
			.block-1:nth-child(1){
				background-image: linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%);			
			}
			.block-1:nth-child(3){
				background-image: linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%);		
			}
			.block-1:nth-child(4){
				background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);		
			}

			.block-1 img{
				width: 30vw;
				height: 25vh;
				
			}
			.block-1 input
			{
				font-family: 'Ubuntu', sans-serif;
				width: 60%;
				background-color: rgba(73,216,176,0.5);
				border:none;
				border-bottom: 1px solid gold;
				margin-top: 10px;
				margin-bottom:  10px;
				text-align: center;
			}
			.error{
				position:relative;
				color: red;
				margin: 0;
			}
			.block-gender{
				display: flex;
				flex-direction: row;width: 70%;
				align-items: center;
			}
			#subBtn{
				margin-left: 44%;
				margin-right: 50%;
				width: 10vw;
				border-radius: 15px; 
				height: 32px;
			}
			@media screen and (max-width: 650px)
			{
				.container{
					flex-direction: column;
				}
				.block-1{
					width: 100vw;
				}
				.block-1 img{
					width: inherit;
				}
				#subBtn{
				
				width: 29vw;
				margin-left: 39%;
				margin-right: 50%;
				background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%);
				font-family: 'Open Sans', sans-serif;
				color: black;
			}
			}
	</style>
</head>
<body>
	
				<?= form_open('sign_up/signup',['method'=>'post']); ?>
				<div class="container">
					<div class="block-1">
						<img src="<?= base_url('images/beverage-books.jpg');?>">
							
							<b>Enter First Name:</b>
							<input id="fname" onchange="checkFirstName(this.value);" type="text" name="fname" placeholder="First Name">
							<p id="error1"  class="error"></p>
							<?= form_error('fname'); ?>
							
							<b>Enter Last Name:</b>
							<input id="lname" onchange="checkLastName(this.value);" type="text" name="lname" placeholder="Last Name">
							<?= form_error('lname'); ?>
							<p id="error2" class="error"></p>
					</div>
					<br>
					<div class="block-1">
							<b>Enter Your Birthdate:</b>
							<input id="date"  onchange="checkDate();" type="date" name="birthdate" placeholder="Birthdate">
							<?= form_error('birthdate'); ?>
							<div class="block-gender">
							<b>Gender:</b>
							<input type="radio" name="gender" value="male">Male</input>
							<input type="radio" name="gender" value="female">Female</input>
							<input type="radio" name="gender" value="other">Other</input>
							<?= form_error('gender'); ?>
							</div>
							<b>Enter Your E-mail Address:</b>
							<input id="email" onchange="checkEmail(this.value);" type="E-mail" name="email" placeholder="E-mail">
							<p id="error3" class="error"></p>
							<?= form_error('email'); ?>
							<img src="<?= base_url('images/signUp.jpg');?>">
					</div>
				<div class="block-1">
					<img src="<?= base_url('images/bookGrass.jpg');?>">
							<b>Create  a username:</b>
							<input id="username" onchange="checkID(this.value);" type="text" name="username" placeholder="Create Username"><br>
							<?= form_error('uname'); ?>
							<p id="error4" class="error"></p>
							<b>Create Password:</b>
							<input id="password" onchange="checkPassword(this.value);" type="Password" name="password" placeholder="Create Password">
							<?= form_error('password'); ?>
							<p id="error5" class="error"></p>
				</div>
				</div>
			

			<button id="subBtn" type="submit"  disabled>Sign up</button>
			<?= form_close(); ?>


	<script type="text/javascript" src="<?= base_url('assets/validation/signUp.js');?>">
		
	</script>
</body>
</html>