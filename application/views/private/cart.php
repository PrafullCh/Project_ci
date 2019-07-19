<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Books</title>
	<?= link_tag("assets/css/bootstrap.min.css"); ?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond|PT+Sans|Playfair+Display|Roboto+Slab|Source+Sans+Pro" rel="stylesheet">
	<style type="text/css">
		body{
			background-image: url('<?= base_url('images/orderback.jpg')?>');

		}
		*{
			color: white;
		}
		thead{
			border-bottom: 1px solid white;
		}
	</style>
</head>
<body>
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
	<center>
		<h1>My Cart</h1>
	<table  width="850" cellpadding="10">
		<thead>
		<tr>
			<th>Sr. No. </th>
			<th>Book Name</th>
			<th>Quantity</th>
			<th>Price</th>

		</tr>
		</thead>
		<tbody>
			<?php $j=0;?>
		<?php foreach($orders as $i):?>
			<form action="<?= base_url('Loadbooks/delete_cart')?>" method="post">
		<tr>
			
			<td><?= $orders[$j]->SN?></td>
			<td><?= $orders[$j]->BOOK_NAME?></td>
			<td><?= $orders[$j]->B_QTY?></td>
			<td><?= $orders[$j]->T_PRICE?></td>
			<input type="hidden" name="SN" value="<?= $orders[$j]->SN?>">
			<td><button class="btn btn-danger">DELETE FROM CART</button></td>
			<?php $j=$j+1;?>
		</tr>
	</form>
	<?php endforeach;?>
	</tbody>
	</table>
</center>


</body>
</html>