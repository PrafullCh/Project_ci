<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond|PT+Sans|Playfair+Display|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Book Basket</title>
	<?= link_tag("assets/css/bootstrap.min.css"); ?>
	<style type="text/css">
  
		body{
			background-image: url('<?= base_url('images/main_pagebackground.jpg');?>');
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
      user
		}
    .scroll{
      float: right;
      position: fixed;
      top: 100px;
      right:0%;
      height: 50px;
      width: 50px;
    }
    .about{
      height: 700px;
      background-image: url('<?= base_url('images/about_back.jpg');?>');
      background-size: cover;
      background-position: fixed;
      background-repeat: no-repeat;
      opacity: 1;
    }
    .about2{
      opacity: 1;
      background-color: rgba(255,255,255,0.3);
      height: inherit;
      padding-top: 60px;
      padding-bottom: 100px;
      padding-left: 50px;
      padding-right: 50px;
    }
    .header_cont{
      height: 600px;
    }
    .product_card{
      margin: 15px;
      height: 220px;
      width: 200px;
      background-color: rgba(0,0,0,0.5);
      transition: background-color 0.3s ease-in-out;
      padding: 15px;
    }
    .product_card:hover{
      background-color: rgba(0,0,0,1);
      padding: 15px;
    }
    .product_card img{
      height: 132px;
      width:120px;
      margin-left: 20px;
      margin-right: 20px;
    }
    .product_grid{
       height: 100%;
      background-size: cover;
      background-position: fixed;
      background-repeat: no-repeat;
      opacity: 0.9;
    }
    .product_grid2{
      opacity: 1;
      background-color: rgba(200,200,200,0.8);
      height: inherit;
      display: flex;
      flex-wrap: wrap;
      padding-top: 100px;
      padding-bottom: 100px;
      padding-left: 50px;
      padding-right: 50px;
    }
    .about_content{
      width: 800px;
    }
    .font1{font-family: 'Roboto Slab', serif;}
    .font2{font-family: 'Source Sans Pro', sans-serif;}
    .font3{font-family: 'Playfair Display', serif;}
    .font4{font-family: 'EB Garamond', serif;}
    .header_font{font-family: 'PT Sans', sans-serif;}

    .menu_bar{
            background:inherit;
            width: 100%;
            height: 60px;
            transition: .3s;
        }
        .menu_bar:hover{
        	border-bottom: 1px solid white; 
        }
        .menu_bar_list{
            float: left;
            list-style: none;
            display: inline;

        }
        .menu_bar_list li{
            display: inline-block;
            color: black;
            padding: 10px;
            transition: .3s;

        }
        .menu_bar_list li a{
            text-decoration: none;
            color: white;
        }
        .menu_bar_list #a:hover{
            background-color:orange; 
        }
        .menu_bar_list #b:hover{
            background-color:red; 
        }
        .menu_bar_list #c:hover{
            background-color:pink; 
        }
        .menu_bar_list #d:hover{
            background-color:yellow; 
        }
        .menu_bar_list #e:hover{
            background-color:green; 
        }
        .footer_area
        {
            
            width: 100%;
            height: 300px;
            background-color: rgba(0,0,0,0.9);
        }
        .footer_area *{
            color: white;
        }
        .banner{
        	background-color:rgba(255,255,255,1);
        	width: 35%;
        	height: auto;
        	margin-right: auto;
        	margin-left: auto;
        	margin-top:10%;
        	box-shadow: 10px 10px 10px black;
        	border:5px solid white ;
         padding: 28px;
        }
        .banner *{
        	text-align: center;
        }
        .banner h1{
        	font-family: cursive;
          margin: 15px;
          font-family: 'Srisakdi', cursive;
          font-size: 50px;
          margin: 0;
        }
        .contact{
          text-align: center;
          color: white;
          transition: .3s;
          padding: 10px;
          margin-left: auto;
          font-family: "alex-brush";
          margin-right: auto;
        }
        .contact:hover {
          background-color:black;
          color: black;
        }
        .button1 {
          padding: 10px;
          color: black;
          transition: .3s;
          text-decoration: none;
          border:2px solid black;
          border-radius: 15%;
        }
        .button1:hover{
          background-color: black;
          color: white;
          border:2px solid white;
        }
        @media screen and (max-width: 768px)
    {
        body{
         background-image: url('<?= base_url('images/mobile_view.jpg');?>');
          background-size: cover;
        }
      .product_grid2{
        flex-direction: column;
      }
      .about2{
        padding-top: 20px;
      }
        .about_content{
          width: 300px;
          font-size: 20px;
        }
        
          .banner {
          width: 64%;
          height: 260px;
          margin: 0;
          margin-top: 126px;
          margin-right: auto;
          margin-left: auto;
          padding: 34px;
        }
        .about2{
          padding-left: 31px;
        }
    }
	</style>
</head>
<body>
<div class="menu_bar">
           <ul class="menu_bar_list">
              <li id="b">
                <a class="nav-link" href="<?= base_url('sign_up/load_signup');?>">Sign Up</a>
              </li>
              <li id="c">
                <a class="nav-link" href="<?= base_url('sign_up/load_login');?>">Log In</a>
              </li> 
              <li id="c">
                <a class="nav-link" href="<?= base_url('about');?>">About</a>
              </li>                   
          </ul>
         </div>
        
        
<?php 
	if($this->session->flashdata('feedback')):?>
		<script type="text/javascript">
			alert('account created successfully');
		</script>
	<?php endif;?>

<div class="header_cont">
	<div class="banner">
		<h1>Book Basket</h1>
    <br>
    <center>
    <a class="button1" href="<?= base_url('sign_up/load_login');?>">Log In</a>
    <a class="button1" href="<?= base_url('sign_up/load_signup');?>" class="button1">Sign Up</a>
    </center>
	</div>



</div>

<div class="about">
	<div class="about2">


		<!-- Starting of about-->


		<center><h1 class="header_font ">About us</h1></center>
			<br><center>
			<h2 class="font3 about_content" style="overflow-y: hidden;">"Book train your mind for imagination of big things"<br>
					-taylor swift
			</h2></center>

			<center><h3 class="font2 about_content"  style="overflow: s;overflow-y: hidden;text-align: justify;">
							Reading is one thing that shape your mind allow you to flow through 
						many things and gives you many experiances of may things. Reading 
						stretches your imagination and teaches more than just reading 
						paragraphs. It gives you information, knowledge and influence your mind 
						nd also entertain you.<br><br>
							Here at <i>"Book Basket"</i> we give you quality reading through many 
						different books. We offer wide varirty of books that fulfill your need 
						of information.Books offer many more thingsand books that we offer 
						fulfill all your needs. We offer you books of various kinds. We offer 
						books fom old ones and adults to younger ones.  

			</h3></center>





		<!-- Ending of about-->

	</div>
</div>



<div class="footer_area">
           <div class="contact">
            <h4>CEO : <h3><b>Prafull Chavan</b></h3></h4>
            <h4>Email : services.bookbasket@gmail.com</h4>
            <h4>Mob : +91 7447835649</h4>
            <h4>HQ : Governament Polytechnic Nashik</h4>
           </div>
 </div>
<script src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>" ></script>
</body>
</html>