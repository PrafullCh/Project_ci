<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
	<title>Payment</title>
	<style type="text/css">
		.main_content{
			display: flex;
			height: 500px;
			margin-top: 100px;
			margin-left: auto;
			margin-right: auto;
			flex-direction: row;
			padding: 20px;
		}
		.address{
			width: 700px;
			height: 400px;
		}
		.address tr td {
			padding: 7px;
		}
		.products{
			width: 200px;
			height: 400px;
		}
		input{
			width:300px;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Payment</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('loadbooks/index')?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

	<div class="main_content">
		<div class="address">
			<table>
				<form method="post" action="payment_second">
				 <tr><h2>Address and Products</h2></tr>
				<tr>
					<td>Flat No. and society:</td>
					<td>Street name :</td> 
				</tr><br>
				<tr>
					<td><input type="text" name="F_NO" required></td>
					<td><input type="text" name="S_NAME" required></td>
				</tr>
				<tr>
					<td>City/Town/Village:</td>
					<td>State:</td> 
				</tr><br>
				<tr>
					<td><input type="text" name="CITY" class="INFO" required></td>
					<td><input type="text" name="STATE" class="INFO" readonly></td>
				</tr>
				<tr>
					<td>Pincode:</td>
					<td>Landmark:</td> 
				</tr><br>
				<tr>
					<td><input type="text" name="P_CODE" id="pinCode" required></td>
					<td><input type="text" name="LANDMARK" required></td>
				</tr>
				
					<td>Address Type:</td>
					<tr>
					<td><input type="radio" name="addtype" value="HOME"><center>HOME(All days delivery)</center></td>
					<td><input type="radio" name="addtype" value="Work"><center>WORK(delivery between 10AM to 5PM)</center></td>
				</tr>
				<tr>
				<td></td>
				<td><button type="reset"class="btn btn-danger">Reset</button></td>
				</tr>


				
		</table>
		</div>
		<div class="products">
			<table width="450px;">
				
				<tr><th>Book Name </th><th>Quantity </th><th> Total Price</th></tr>
				<?php for($i=0;$i<sizeof($product)/3;$i++):?> 
					<tr>
						<td><input name="<?= 'bname'.$i?>" value="<?= $product['bname'.$i]; ?>" readonly></td>
						<td><input name="<?= 'bqty'.$i?>" value="<?= $product['bqty'.$i]; ?>" readonly></td>
						<td><input type="" name="<?= 'tprice'.$i?>" value="<?= $product['tprice'.$i]; ?>" readonly></td>
					</tr>
				<?php endfor;?>
			</table>
			<br><br><br><br>
			<button type="submit" class="btn btn-success">Confirm Orders</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById('pinCode').addEventListener('change',function(){
			var obj = new XMLHttpRequest();
	obj.open('GET','https://api.postalpincode.in/pincode/'+document.getElementById('pinCode').value);
	obj.onload=function(){
		console.log('proocessing');
		var data = JSON.parse(obj.responseText);
		//var data = obj.responseText;
		//console.log(data[0].PostOffice[0].Block);
		fillData(data);
	};
	obj.send();
		});
		function fillData(data)
		{
			document.getElementsByClassName('INFO')[0].value=data[0].PostOffice[0].Block;
			document.getElementsByClassName('INFO')[1].value=data[0].PostOffice[0].State;
		}
	</script>
</body>
</html>