<?php
include "config/config.php";

if((isset($_POST['useremail']) && $_POST['useremail'] !='') &&  (isset($_POST['date']) && $_POST['date'] !='')    )
{
	$useremail = $_POST['useremail'];
	$date = $_POST['date'];
	$productname = $_POST['productname'];
	$no_of_times_used  =$_POST['no_of_times_used'];
	$InsertRecordused_time_hr = $_POST['InsertRecordused_time_hr'];
	$InsertRecordused_time_slot = $_POST['InsertRecordused_time_slot'];
	$no_of_products = $_POST['no_of_products'];
	$mesg = 'Your Product list is Below'."\n";
	
	for($i=0;$i<=$no_of_products;$i++)
	{
	 
	if(isset($productname[$i] ) && $productname[$i] !='' ){ 
 	 $productid =  getproduct_id($productname[$i]);
   $query = "insert into user_responses (DATE,product_name,no_of_times_used,use_time_hr,used_timeslot,user_email,Gebruikers,product_id) values('".$date."','".$productname[$i]."','".$no_of_times_used[$i]."','".$InsertRecordused_time_hr[$i]."','".$InsertRecordused_time_slot[$i]."','".$useremail."','',$productid)";
  $result =   mysqli_query($mysqli,$query) ;	

$mesg .= "            \r\n";
	
	$mesg .= 'Date ' .$date."\n";
	
	$mesg .= 'Product Name  ' .$productname[$i]."\n";
	$mesg .='How many items of this product have you used? '.$no_of_times_used[$i]."\n";
	$mesg .='At what time did you use this product? '.$InsertRecordused_time_hr[$i]." " .$InsertRecordused_time_slot[$i]."\n";
	$mesg .="\r\n";
	$mesg .= "            \r\n";
	
	}
	}
	
	if(mysqli_insert_id($mysqli) ){
	
	$mesg = chunk_split(base64_encode($mesg)); 
	$headers = "";
	$headers .= "Content-Transfer-Encoding: base64\r\n\r\n";

	mail($useremail,"Product information ",$mesg,$headers);
		?>
		<script>
		alert("Data Submitted successfully");
		window.location="index.php";
        </script>
		<?php
		}
	
	
//$	


//	mysql_query();
	
	
	}
	else
	{
	?>	
			<script>
		alert("FIll form again please");
		window.location="index.php";
        </script>
		<?php
	
		
	}
	
	
	function getproduct_id($productname)
	{
	global $mysqli;
	
	
	$productname  = $productname;
	
	$sql = "select product_id  from voedingswaarden where product_name='".$productname."'"
;	
	$result =  mysqli_query($mysqli,$sql);
	$product =  mysqli_fetch_assoc($result);
	 return $product['product_id']; 
	}
	

 ?>