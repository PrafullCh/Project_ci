<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Books</title>
	<?= link_tag("assets/css/bootstrap.min.css"); ?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|PT+Sans|Playfair+Display|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">
	<style type="text/css">
	body{
		background-image: url("<?php echo base_url('images/image_.jpg');?>");
		background-size: contain;
	}
	.main_bar{
		height: 600px;
		width: 100%;
	}
	.product_card{
      margin: 15px;
      height: 280px;
      width: 180px;
      background-color: rgba(0,0,0,0.5);
      transition: background-color 0.3s ease-in-out;
      padding: 15px;
      color: white;
    }
    .product_card p{
    	text-align: center;
    }
    .product_card:hover{
      background-color: rgba(0,0,0,1);
      padding: 15px;
      box-shadow: 10px 10px 10px white;
    }
    .product_card img{
      height: 100px;
      width:80px;
      margin-left: 20px;
      margin-right: 20px;
    }
    .product_grid{
       height: 100%;
      background-size: cover;
      background-position: fixed;
      background-repeat: no-repeat;
      opacity: 0.9;
      display: flex;
      flex-direction: column;
    }
    .product_grid2{
      opacity: 1;
      background-color: rgba(255,255,255,0.2);
      height: inherit;
      display: flex;
      flex-wrap: wrap;
     
      padding-bottom: 100px;
      padding-left: 50px;
      padding-right: 50px;
    }
  
    .cart{
    	background-color: rgba(255,255,255,1);
    	position: absolute;
    	height: 400px;
    	width: 70%;
    	display:  none;
    	transition: .5s;
    }

    .cart:hover{
    	box-shadow: 10px 10px 10px rgba(250,150,208,1);
    }

    .product_name{
    	background-color: black;
    }
    .product_price{
    	background-color: blue;
    }
    .add{
    	width: 5px;
    	height: 5px;
    	border-radius: 10px;
    	
    	transition: .3s;
    }
    .add:hover{
    		box-shadow: 10px 10px 10px white;
    }
    .title{
    	font-size: 50px;
    	margin-left: auto;
		margin-right: auto;
		text-align: center;
		font-family: "Times New Roman";
		color: black;
		background-color: white;
    }
    .para{
    		margin: 30px;
			text-align: justify;
			padding-left: 10px;
			padding-right: 10px;
			width: 70%;
			color: black;
			font-family: tahoma;
			background-color: rgba(255,255,255,0.6);
			margin-left: auto;
			margin-right: auto;
			}
			table tr td {
				text-align: justify;
			}
			.hr:hover{
				box-shadow: 10px 10px 10px rgb(28,221,0);
			}
			input{
				border:none;
				border-bottom: 2px solid blue;
				text-align: center;
				border-radius: 5%;
			}
			.nav-item{
				transition: .3s;
			}
			.nav-item:hover{
				background-color: rgba(0,0,0,0.4);
				color: white;
			}

			#slider{
				margin-right: 30px;
				margin-left: 70px;
				
				margin-top: 50px;
				display: relative;
				border-radius: 5%;
			}
			.banner{
				display: flex;
				flex-direction: row;
			}
			.banner h1{
				flex:50%;
				margin-left: 100px;
				margin-top: 30px;
			}
			.banner p{
				flex:50%;
				margin-left: 100px;
				margin-top: 30px;
			}
			.banner img{
		    		width: 700px;
		    		height:500px;
		    	}
			.font1{font-family: 'Roboto Slab', serif;}
		    .font2{font-family: 'Source Sans Pro', sans-serif;}
		    .font3{font-family: 'Playfair Display', serif;}
		    .font4{font-family: 'EB Garamond', serif;}
		    .header_font{font-family: 'PT Sans', sans-serif;}
		    @media screen and (max-width: 500px)
		    {
		    	.banner img{
		    		bottom: 0;
		    		margin-right: 0;
		    		width: 400px;
		    		height: 200px;
		    	}

		    	.product_card{
				      margin: 8px;
				      height: 180px;
				      width: 120px;
				      background-color: rgba(0,0,0,0.5);
				      transition: background-color 0.3s ease-in-out;
				      padding: 15px;
				      color: white;
				    }
				    .product_card p{
				    	text-align: center;
				    	font-size: 10px;
				    }
				    .product_card:hover{
				      background-color: rgba(0,0,0,1);
				      padding: 15px;
				      box-shadow: 10px 10px 10px white;
				    }
				    .product_card img{
				      height: 50px;
				      width:40px;
				      margin-left: 20px;
				      margin-right: 20px;
				    }
				    .banner{
					display: flex;
					flex-direction: column;
				}
				#slider{
					margin-left: 10px;
				}
		    }
	</style>
</head>
<body>
	<!--menu start-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Book Basket</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor03">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url('sign_up/logout');?>">Logout</a>
	      </li>
	      <li class="nav-item">
	        <img   style="height: 20px;width: 20px;" src="<?= base_url('images/shopping_cart.jpg');?>" onclick="show();" id="shcart">
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url('loadbooks/feedback');?>">Feedback</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url('loadbooks/load_cart');?>">My Cart</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url('loadbooks/load_order');?>">My Orders</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url('about');?>">About Us</a>
	      </li>

	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="text" placeholder="Search">
	      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	<!--menu end-->
	<div class="main_bar">
		<!--shopping cart code start-->
			<div class="cart" id="cart">
				<form method="post" action="<?= base_url('payment/payment_first')?>">
					<!--input type="hidden" name="count1" value="0" id="count"-->
				<table id="cart_table" cellpadding="10px;">
					
				</table>
				<table cellpadding="25px">
					<tr>
						<td><button class="btn btn-success hr" onclick="return chk();">Buy Now</button></td>
						<td style="text-align:right;">Total is &nbsp<span id="total">0</span> </td>
					</tr>
				</table>
				</form>
			</div>
			
			
			
		<!--shopping cart code end-->

				<div class="banner" class="font2"><div><h1> Book Basket</h1><br>
					<p class="font1">Welcome to Book Basket. Explore wide variety books. <br>Here  at bookbasket we bring you various kind of books.<br> All types of book you want. Dont forget to leave Feedback from above menu.<br>
					please let us serve chance to serve you...<br>
					Stay Calm and read book... </p></div>
			<img  src="" id="slider" >
			</div>
			<script type="text/javascript">
				var i=0;
				
				var img_arr=['<?= base_url('images/image_ 2.jpg');?>','<?= base_url('images/image_ 3.jpg');?>','<?= base_url('images/image_ 4.jpg');?>','<?= base_url('images/image_ 7.jpg');?>','<?= base_url('images/image_ 6.jpg');?>'];
				document.getElementById('slider').src=img_arr[i];
				setInterval(function()
				{
					i++;
					document.getElementById('slider').src=img_arr[i];
					
					if(i==4)
						i=0;

				},3000);
			</script>

		

	</div>

<div class="product_grid" style="background-image: url('<?= base_url("images/hp_back.jpg")?>');background-size: contain;">
	<div>
		<div class="title"><h1 >Series of harry potter</h1></div>
	<div class="para">&nbsp&nbsp&nbsp&nbsp&nbsp Harry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry's struggle against Lord Voldemort, a dark wizard who intends to become immortal, overthrow the wizard governing body known as the Ministry of Magic, and subjugate all wizards and Muggles (non-magical people).<br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSince the release of the first novel, Harry Potter and the Philosopher's Stone, on 26 June 1997, the books have found immense popularity, critical acclaim and commercial success worldwide. They have attracted a wide adult audience as well as younger readers and are often considered cornerstones of modern young adult literature. The series has also had its share of criticism, including concern about the increasingly dark tone as the series progressed, as well as the often gruesome and graphic violence it depicts. As of February 2018, the books have sold more than 500 million copies worldwide, making them the best-selling book series in history, and have been translated into eighty languages. The last four books consecutively set records as the fastest-selling books in history, with the final instalment selling roughly eleven million copies in the United States within twenty-four hours of its release.
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThe series was originally published in English by two major publishers, Bloomsbury in the United Kingdom and Scholastic Press in the United States. A play, Harry Potter and the Cursed Child, based on a story co-written by Rowling, premiered in London on 30 July 2016 at the Palace Theatre, and its script was published by Little, Brown. The original seven books were adapted into an eight-part film series by Warner Bros. Pictures, which is the third highest-grossing film series of all time as of February 2018. In 2016, the total value of the Harry Potter franchise was estimated at $25 billion,[4] making Harry Potter one of the highest-grossing media franchises of all time.</div>
	<div class="product_grid2" id="hp">

		<?php $j=0; 
		foreach($result as $i):?>
			<?php if($j==7) break;?>
		<div class="product_card">

			<center><img src="<?php $book = $result[$j]->IMG_NAME;  echo base_url("images/$book"); ?>" /></center>
			<p><?php echo $result[$j]->NAME; ?></p>
			<center><p>₹<?php echo $result[$j]->PRICE; ?></p></center>
			<center><p onclick="add_to_cart('<?php echo $result[$j]->NAME; ?>',<?php echo $result[$j]->PRICE; $j=$j+1;?>);"> <img class="add" style="height: 20px;width: 20px;" src="<?= base_url('images/shopping_cart.jpg');?>" ></p></center>
			
		</div>
	<?php endforeach;?>
	</div>
</div>

<div class="product_grid" style="background-image: url('<?= base_url("images/sh_back.jpg")?>');">
	<div class="title"><h2 style="color: black">A spy A detective <br><h1  style="color: black">Sherlock Holmes<h1></h2></div>
	<div class="para">&nbsp&nbsp&nbsp&nbsp&nbspSherlock Holmes is a fictional private detective created by British author Sir Arthur Conan Doyle. Referring to himself as a "consulting detective" in the stories, Holmes is known for his proficiency with observation, forensic science, and logical reasoning that borders on the fantastic, which he employs when investigating cases for a wide variety of clients, including Scotland Yard.<br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFirst appearing in print in 1887's A Study in Scarlet, the character's popularity became widespread with the first series of short stories in The Strand Magazine, beginning with "A Scandal in Bohemia" in 1891; additional tales appeared from then until 1927, eventually totalling four novels and 56 short stories. All but one are set in the Victorian or Edwardian eras, between about 1880 and 1914. Most are narrated by the character of Holmes's friend and biographer Dr. Watson, who usually accompanies Holmes during his investigations and often shares quarters with him at the address of 221B Baker Street, London, where many of the stories begin.
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThough not the first fictional detective, Sherlock Holmes is arguably the best known, with Guinness World Records listing him as the "most portrayed movie character" in history.[2] Holmes's popularity and fame are such that many have believed him to be not a fictional character but a real individual numerous literary and fan societies have been founded that pretend to operate on this principle. Widely considered a British cultural icon, the character and stories have had a profound and lasting effect on mystery writing and popular culture as a whole, with the original tales as well as thousands written by authors other than Conan Doyle being adapted into stage and radio plays, television, films, video games, and other media for over one hundred years.</div>
	<div class="product_grid2">
		
		<?php $j=7; 
		foreach($result as $i):?>
			<?php if($j==14) break;?>
		<div class="product_card">

			<center><img src="<?php $book = $result[$j]->IMG_NAME;  echo base_url("images/$book"); ?>" /></center>
			<center><p><?php echo $result[$j]->NAME; ?></p></center>
			<center><p>₹<?php echo $result[$j]->PRICE; ?></p></center>
			<center><p onclick="add_to_cart('<?php echo $result[$j]->NAME; ?>',<?php echo $result[$j]->PRICE; $j=$j+1;?>);"> <img class="add" style="height: 20px;width: 20px;" src="<?= base_url('images/shopping_cart.jpg');?>" ></p></center>
			
		</div>
	<?php endforeach;?>
	</div>
</div>

<div class="product_grid" style="background-image: url('<?= base_url("images/mh_back.jpg")?>');">
	<div class="title"><h2 style="color: black">Mind Healing books</h2></div>
	<div class="para">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWe know that our thoughts and perceptions affect our physiology – in situations from stress to sexual arousal – but when it comes to whether these changes influence health, the question suddenly becomes much more controversial. You get claims of miracle cures at one extreme, while some sceptics argue that any role for the mind is deluded. I wanted to investigate the scientific research in this area to find out what the truth is.
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspThese book targets both the practitioner and the patient alike. It is well written in a format that provides easy digestion for the patient, yet it is not oversimplified for mental health providers.</div>
	<div class="product_grid2">
		
		<?php $j=14; 
		foreach($result as $i):?>
			<?php if($j==21) break;?>
		<div class="product_card">

			<center><img src="<?php $book = $result[$j]->IMG_NAME;  echo base_url("images/$book"); ?>" /></center>
			<center><p><?php echo $result[$j]->NAME; ?></p></center>
			<center><p>₹<?php echo $result[$j]->PRICE; ?></p></center>
			<center><p onclick="add_to_cart('<?php echo $result[$j]->NAME; ?>',<?php echo $result[$j]->PRICE; $j=$j+1;?>);"> <img class="add" style="height: 20px;width: 20px;" src="<?= base_url('images/shopping_cart.jpg');?>" ></p></center>
			
		</div>
	<?php endforeach;?>
	</div>
</div>

<div class="product_grid" style="background-image: url('<?= base_url("images/mb_back.png")?>');">
		<div class="title"><h2 style="color: black">Marathi Books </h2></div>
	<div class="para">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMarathi language have its own signicance. One of the very beautiful language. hving very heart touching literature.  
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Try some of the famous books of marthi</div>
	<div class="product_grid2">
		


		
		<?php $j=21; 
		foreach($result as $i):?>
			<?php if($j==28) break;?>
		<div class="product_card">

			<center><img src="<?php $book = $result[$j]->IMG_NAME;  echo base_url("images/$book"); ?>" /></center>
			<center><p><?php echo $result[$j]->NAME; ?></p></center>
			<center><p>₹<?php echo $result[$j]->PRICE; ?></p></center>
			<center><p onclick="add_to_cart('<?php echo $result[$j]->NAME; ?>',<?php echo $result[$j]->PRICE; $j=$j+1;?>);"> <img class="add" style="height: 20px;width: 20px;" src="<?= base_url('images/shopping_cart.jpg');?>" ></p></center>
			
		</div>
	<?php endforeach;?>
	</div>
</div>


<script src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>" ></script>
<script type="text/javascript">
		var bname	=[];
		var bqty	=[];
		var bprice	=[];
		var tprice	=[];
		function display()
		{
			document.getElementById('cart_table').innerHTML="";

			for(var i=bname.length-1;i>=0;i--)
			{

				document.getElementById('cart_table').innerHTML+=("<tr><td><input style='width:350px;' type='text' value='"+bname[i]+"' name='"+("bname"+i)+"' readonly></td><td><input value='"+bqty[i]+"' onchange='calculate(parseInt(this.value),parseInt("+i+"))' name='"+("bqty"+i)+"'></td><td>"+bprice[i]+"</td><td><input id="+("id"+i)+" name='"+("tprice"+i)+"' value='"+tprice[i]+"' readonly></td><td><p class='btn btn-danger' onclick='delete_item(parseInt("+i+"));'>Delete</p></td></tr>");
			}
		}

		function add_to_cart(name , price)
		{
			if(bname.indexOf(name)==-1)
			{
				var q=1;
				bname.push(name);
				bprice.push(parseInt(price));
				bqty.push(1);
				tprice.push(price*1);
				display();
				tcalculate();
			}
			else
			{
				alert('item already exist.....');
			}

		}
		function calculate(q,i)
		{
			if (q>10) {
				alert('Maximum Quantity exceeds');
				display();
			}
			else
			{
				bqty[i]=q;
			tprice[i]=bprice[i]*q;
			document.getElementById("id"+i).value=tprice[i];
			tcalculate();
			}
		}
		function tcalculate()
		{
			var total1=0;
			for(var i=tprice.length-1;i>=0;i--)
			{
				total1+=tprice[i];
			}
			document.getElementById('total').innerHTML=total1;
		}
		function delete_item(i)
		{
			console.log("in delete");
			bname.splice(i,1);
			bqty.splice(i,1);
			bprice.splice(i,1);
			tprice.splice(i,1);
			display();
			tcalculate();
		}

		function show()
		{
				if(window.getComputedStyle(document.getElementById('cart'),null).getPropertyValue('display')=="none")
				{
					document.getElementById('cart').style.display="block";	
				}
				else
				{
					document.getElementById('cart').style.display="none";
				}
		}
		function chk()
		{
			if(bname.length==0)
			{
				alert('Please Add some item');
				return false;
			}
			else
				return true;
		}
</script>
</body>
</html>