<?php


if(isset($_POST['name']))
{
$name=$_POST['name'];


$get="select * from Pincode where pincode='$name' ";
$query=mysqli_query($con,$get);
$row=mysqli_num_rows($query);

if($row==0)
{
echo "<h2 style='color:white;' >
Courier Company are not providing delivery services at this Pincode: 
<span style='color:red;'>$name</span></h2>";
}
else{

while($row1 = mysqli_fetch_array($query)){

    $cityname = $row1['city_name'];
  
    echo"   
        
          <td style='width:15%'>$cityname</td>
          


}
}

}
?>