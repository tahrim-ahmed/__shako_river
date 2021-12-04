<?php

include 'header.php';
if (isset($_SESSION['type']) && $_SESSION['type'] == "admin" || $_SESSION['type'] == "user")

{


global $r_code, $r_name, $r_proprietor, $r_bazar, $r_cell, $d_name, $d_cell, $r_territory, $r_region, $r_group, $f_name, $f_cell, $r_code, $error, $entry, $r_own, $r_other, $r_total, $r_count, $cnt,
	
//	$slab_id, $slab_gift, $r_total_next, $slab_id_next, $slab_gift_next,
	$c_slab, $a_slab, $n_slab, $n_a_slab, $gift, $a_gift, $slab_n_gift, $r_n_own, $a_slab_n_gift, $r_a_n_own;



if(isset($_POST['search']))
{
	$r_code=$_POST['typeahead'];


	$sql10 = "SELECT SUM(i_amount) as own FROM invoice2 WHERE d_check='yes' and r_code='$r_code'";
	$sql11 = "SELECT SUM(i_amount) as other FROM invoice2 WHERE d_check='no' and r_code='$r_code'";
	$sql12 = "SELECT count(id) as count FROM invoice2 WHERE r_code='$r_code'";


	$own=mysqli_query($conn, $sql10);

	if (mysqli_num_rows($own)>0){
		while($row = mysqli_fetch_assoc($own)) {
			$r_own= $row['own'];

		}
	}

	$other=mysqli_query($conn, $sql11);

	if (mysqli_num_rows($other)>0){
		while($row = mysqli_fetch_assoc($other)) {
			$r_other= $row['other'];

		}
	}

	$count=mysqli_query($conn, $sql12);

	if (mysqli_num_rows($count)>0){
		while($row = mysqli_fetch_assoc($count)) {
			$r_count= $row['count'];

		}
	}
	//	echo $r_own;
	//	echo $r_other;

		$r_total=$r_own+$r_other;
	//	echo $r_total;



//Slab Calculation


	$sql20 = "SELECT * FROM slab2 WHERE '$r_own' BETWEEN a_start and a_end";
	 $slab=mysqli_query($conn, $sql20);
	if (mysqli_num_rows($slab)>0){
		while($row = mysqli_fetch_assoc($slab)) {
			$c_slab= $row['c_slab'];
			$n_slab= $row['n_slab'];
			$gift= $row['gift'];
			$a_start=$row['a_start'];
			$a_end=$row['a_end'];
		}
	}
	
	   //Additional Gift
	  $agf=floor(($r_own-$a_start)/50000);
	  $a_gift=$agf*1500;
	  $t_gift=$gift+$a_gift;
	  
	  
	  //Additional Gift Amonut
	  $agft=ceil(($r_own-$a_start)/50000);
	  $aga=($a_start+($agft*50000))-$r_own;
	  
	  if($r_own>=10000){
	  
	  if($aga==0)
	  {
	      $a_g_amount=50000;
	  }
	  else{
	      $a_g_amount=$aga;
	  }
	      
	  }
	  else{
	      $a_g_amount=0;
	      
	  }
	
	 //next Slab
	 $sql21 = "SELECT * FROM slab2 WHERE c_slab='$n_slab'";
     $slab_next=mysqli_query($conn, $sql21);

 	if (mysqli_num_rows($slab_next)>0){
		while($row = mysqli_fetch_assoc($slab_next)) {

			$n_slab_gift= $row['gift'];
			$n_a_start=$row['a_start'];
			
		}
	}
    	 $n_slab_amount=$n_a_start-$r_own;
    	 
    	 
    	 
    	 //

	$sql = "SELECT * FROM `retailer` r,`distributor` d,`fa` f WHERE r.`r_code`='$r_code' AND r.`d_code`=d.`d_code` AND r.`f_code`=f.`f_code`";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result)>0){

while($row = mysqli_fetch_assoc($result)) {

       		$r_code= $row['r_code'];
        	$r_group= $row['r_group'];

        	$r_territory= $row['r_territory'];
        	$r_region= $row['r_region'];

           	$r_name= $row['r_name'];
           	$r_bazar= $row['r_bazar'];

        	$r_proprietor= $row['r_proprietor'];
        	$r_cell= $row['r_cell'];

        	$d_name= $row['d_name'];
        	$d_cell= $row['d_cell'];

        	$f_name= $row['f_name'];
          	$f_cell= $row['f_cell'];

}
}
}

	if(isset($_POST["submit"])){

		$r_code = $_POST['r_code'];
		$d_check = $_POST['d_check'];
		$date = $_POST['date'];
		$memo_no = $_POST['memo_no'];
		$i_amount = $_POST['i_amount'];
		$p_amount = $_POST['p_amount'];
		$remarks = $_POST['remarks'];
		$status = "submitted";

		$name=$_SESSION["Name"];

		if(isset($_POST["entry"])){
		$entry = $_POST['entry'];
		}		
		else
		{
		$entry='yes';
		}

		if(isset($_POST["error"])){
		$error = $_POST['error'];
		}		
		else
		{
		$error='ok';
		}


		//$error = $_POST['error'];
$sql3="SELECT r_code,date,memo_no,i_amount FROM invoice2 WHERE r_code='$r_code'AND date='$date'AND memo_no='$memo_no' AND i_amount='$i_amount'";


$sql2= "INSERT INTO invoice2 (r_code, d_check, date, memo_no, i_amount, p_amount,Remarks, entry, user, status, error)
VALUES ('$r_code', '$d_check','$date','$memo_no', '$i_amount', '$p_amount', '$remarks', '$entry','$name','$status','$error' )";


	$dup = mysqli_query($conn, $sql3);
	if (mysqli_num_rows($dup)>0)
	{
	echo "<script>alert('Duplicate Found');</script>";

}
else if(mysqli_query($conn, $sql2)){

	echo "<script>alert('Added successfully');</script>";
   
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
}

$retailer=$r_code;






	$sql10 = "SELECT SUM(i_amount) as own FROM invoice2 WHERE d_check='yes' and r_code='$r_code'";
	$sql11 = "SELECT SUM(i_amount) as other FROM invoice2 WHERE d_check='no' and r_code='$r_code'";
	$sql12 = "SELECT count(id) as count FROM invoice2 WHERE r_code='$r_code'";

	$own=mysqli_query($conn, $sql10);

	if (mysqli_num_rows($own)>0){
		while($row = mysqli_fetch_assoc($own)) {
			$r_own= $row['own'];

		}
	}

	$other=mysqli_query($conn, $sql11);

	if (mysqli_num_rows($other)>0){
		while($row = mysqli_fetch_assoc($other)) {
			$r_other= $row['other'];

		}
	}

	$count=mysqli_query($conn, $sql12);

	if (mysqli_num_rows($count)>0){
		while($row = mysqli_fetch_assoc($count)) {
			$r_count= $row['count'];

		}
	}
	//	echo $r_own;
	//	echo $r_other;

		$r_total=$r_own+$r_other;
	//	echo $r_total;
	
	//Slab Calculation


	$sql20 = "SELECT * FROM slab2 WHERE '$r_own' BETWEEN a_start and a_end";
	 $slab=mysqli_query($conn, $sql20);
	if (mysqli_num_rows($slab)>0){
		while($row = mysqli_fetch_assoc($slab)) {
			$c_slab= $row['c_slab'];
			$n_slab= $row['n_slab'];
			$gift= $row['gift'];
			$a_start=$row['a_start'];
			$a_end=$row['a_end'];
		}
	}
	
	   //Additional Gift
	  $agf=floor(($r_own-$a_start)/50000);
	  $a_gift=$agf*1500;
	  $t_gift=$gift+$a_gift;
	  
	  
	  //Additional Gift Amonut
	  $agft=ceil(($r_own-$a_start)/50000);
	  $aga=($a_start+($agft*50000))-$r_own;
	  if($aga==0)
	  {
	      $a_g_amount=50000;
	  }
	  else{
	      $a_g_amount=$aga;
	  }
	 
	
	 //next Slab
	 $sql21 = "SELECT * FROM slab2 WHERE c_slab='$n_slab'";
     $slab_next=mysqli_query($conn, $sql21);

 	if (mysqli_num_rows($slab_next)>0){
		while($row = mysqli_fetch_assoc($slab_next)) {

			$n_slab_gift= $row['gift'];
			$n_a_start=$row['a_start'];
			
		}
	}
    	 $n_slab_amount=$n_a_start-$r_own;
    	 
    	 
    	 
    	 //
	

	$sql22 = "SELECT * FROM `retailer` r,`distributor` d,`fa` f WHERE r.`r_code`='$r_code' AND r.`d_code`=d.`d_code` AND r.`f_code`=f.`f_code`";
	$result = mysqli_query($conn, $sql22);

	if (mysqli_num_rows($result)>0){

while($row = mysqli_fetch_assoc($result)) {

       		$r_code= $row['r_code'];
        	$r_group= $row['r_group'];

        	$r_territory= $row['r_territory'];
        	$r_region= $row['r_region'];

           	$r_name= $row['r_name'];
           	$r_bazar= $row['r_bazar'];

        	$r_proprietor= $row['r_proprietor'];
        	$r_cell= $row['r_cell'];

        	$d_name= $row['d_name'];
        	$d_cell= $row['d_cell'];

        	$f_name= $row['f_name'];
          	$f_cell= $row['f_cell'];

}
}



}


?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/insert.css">

	<script src="https://kit.fontawesome.com/57ae8ebfe0.js" crossorigin="anonymous"></script>
    <script src="js\typeahead.min.js"></script>
    <script>
      
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'searchPrev.php?key=%QUERY',
       limit : 18
    });
});
    </script>

</head>
<body>
	 <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#" style="color:Gray;">Home</a></li>
    <li class="breadcrumb-item" aria-current="page" style="color:DodgerBlue;">Jul-Dec 2020</li>
  </ol>
	<div class="container-fluid">
		<div class="table-responsive-sm">
			<form id="retailer_code" method="POST">

				<div class="row">
					<div class="column left">
						<div class="card">

    	<fieldset>
			<legend>Retailer Information</legend>
  		<table class="table table-sm table-striped table-bordered">
  			<tbody style="text-align: left">
  				<tr>
  				<td>Retailer Code: </td> <td><strong><?php echo $r_code; ?> </strong></td>	
  				<td>Group: </td> <td><strong><?php echo $r_group; ?> </strong></td>
  				</tr>

  				<tr>
  					<td>Territory: </td> <td><strong><?php echo $r_territory; ?> </strong></td>
  					<td>Region: </td> <td><strong><?php echo $r_region; ?> </strong> </td>
  				</tr>



  				<tr>
  					<td>Retailer Name: </td> <td><strong><?php echo $r_name; ?> </strong></td>
  					<td>Retailer Bazar: </td> <td><strong><?php echo $r_bazar; ?> </strong></td>
  				</tr>


  				<tr>
  				<td>Proprietor Name: </td> <td><strong><?php echo $r_proprietor; ?> </strong></td>
  				<td>Retailer Cell: </td>
  				<td ><strong> 
  					<?php echo "<a href='tel:+880.$r_cell'>$r_cell</a>"; ?>
  				</strong></td>

  				</tr>

  				<tr>
  					<td>Distributor Name: </td> <td> <strong><?php echo $d_name; ?> </strong></td>
  					<td>Distributor Cell: </td>
  					 <td><strong>
  					<?php echo "<a href='tel:+880.$d_cell'>$d_cell</a>"; ?>
  					</strong></td>

  				</tr>


  				<tr>
  					<td>FA Name: </td> <td> <strong><?php echo $f_name; ?> </strong></td>
  					<td>FA Cell: </td>
  					 <td><strong>
  					<?php echo "<a href='tel:+880.$f_cell'>$f_cell</a>"; ?>
  					</strong></td>
  	
  				</tr>

  				 <tr>
  					<td>Own Purchase: </td> <td> <strong><?php echo $r_own; ?> </strong></td>
  					<td>Other Purchase: </td> <td> <strong><?php echo $r_other; ?> </strong></td>
  				</tr>

  				<tr>
  					<td>Total Purchase: </td> <td> <strong><?php echo $r_total; ?> </strong></td>
  					<td>Current Slab: <strong><?php echo $c_slab;?></strong></td> <td>Next Slab: <strong><?php echo $n_slab;?></strong></td>
  				</tr>
  				
  				
  				 <tr>	
  					<td colspan="">Current Slab Gift: </td> <td> <strong><?php echo $gift;?></strong></td>
  					<td colspan="">Add. Gift Amount: </td> <td> <strong><?php echo $a_g_amount;?></strong></td>
  				</tr>
   				<tr>	
  					<td colspan="">Additional Gift: </td> <td> <strong><?php echo $a_gift;?></strong></td>
  					<td colspan="">Next Slab Amount: </td> <td> <strong><?php echo $n_slab_amount;?></strong></td>
  				</tr>
  				
  				<tr>
  				    <td>Total Gift Amount: </td> <td><strong><?php echo $t_gift;?></strong></td>
  					<td>Next Slab Gift: </td> <td> <strong><?php echo $n_slab_gift; ?></strong></td>
  					
  			</tr>
  				
  			</tbody>

		</table>  
	
		</fieldset>

    </div>
  </div>

  <div class="column right">
    <div class="card">

		<fieldset>

		<legend>Input invoice Data</legend>
		<table class="table table-sm table-borderless">
 <form id="search_data" method="POST">
		<tbody style="text-align: left">
			<tr>
				<td>Retailer Code:</td>
				<td><input type="text" class=" typeahead tt-query" autocomplete="off" spellcheck="false" name="typeahead" value="<?php echo $r_code; ?>" required></td>
				<td>
				<input type="submit" name="search" class="btn btn-primary btn-sm" value="Search">
				</td>
			</tr>

		</tbody>
</form>

<form id="add_data" method="POST">
	<tbody style="text-align: left">
	<tr>
		<td> 
		 <input class="form-control" type="hidden" name="r_code" value="<?php echo $r_code; ?>" required></td>
	</tr>
	<tr>
		<td>Distributor check:</td>
		<td><select class="form-control form-control-sm" name="d_check" required>
			<option disabled selected value>--Select--</option>
			<option value="yes">YES</option>
			<option value="no">NO</option>
		</select></td>


	</tr>

	<tr>
		<td >Date: </td><td ><input class="form-control form-control-sm" type="Date" name="date" required></td>
	</tr>
	<tr>
		<td>Memo No.: </td><td><input class="form-control form-control-sm" type="text" name="memo_no" required></td>
		</tr>

		<tr>
		<td>invoice Amount: </td><td><input class="form-control form-control-sm" type="text" name="i_amount" required></td
		</tr>

		<tr>
		<td>Paid Amount: </td><td><input class="form-control form-control-sm" type="text" name="p_amount"></td
		</tr>


			<tr>
			<td>Remarks:</td>
			<td>
			<input class="form-control form-control-sm" type="text" name="remarks" value="" /></td>

			</tr>

	<tr>
			<td style="color: red;">Error: 
			</td>
			<td >
			<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="error" name="error" value="error">
			<label style="color: red;" class="custom-control-label" for="error">ERROR</label>
			</div>
			</td>
	</tr>

	<tr>
			<td style="color: blue;">No Entry: 
			</td>
			<td >
			<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" id="entry" name="entry" value="no">
			<label style="color: blue;" class="custom-control-label" for="entry">NO</label>
			</div>
			</td>
	</tr>
	<tr>
			<td colspan="3" style="text-align: center;">
			<input class="btn btn-success btn-sm btn-block" type="submit" name="submit" value="Submit">
			</td>
	</tr>


		</tbody>
	    </table>
        </fieldset>
	</form>

    </div>
  </div>
 </div>

 <br>
  
  <div class="row">
    <div class="down">
    <div class="card">
		<fieldset>
			<legend>invoice Data    (Total invoice: <strong><?php echo $r_count; ?></strong>)</legend>
		<table class="table table-sm table-hover table-bordered">
		<thead >
			<th width="4%">ID</th>
			<th width="6%">D Check</th>
			<th width="8%">Date</th>
			<th width="8%">Memo No.</th>
			<th width="10%">Total</th>
			<th width="10%">Paid</th>
			<th width="20%">Remarks</th>
			<th width="4%">Entry</th>
			<th width="4%">Error</th>
			<th width="10%">Edit</th>
			<th width="10%">Status</th>
			<th width="6%">By</th>
		</thead>
<?php 

if(isset($_POST['search']))
{
	$retailer_code=$_POST['typeahead'];

		$sql4 = "SELECT * FROM `invoice2` WHERE `r_code`='$r_code'";

	$result4 = mysqli_query($conn, $sql4);

	if (mysqli_num_rows($result4)>0){

while($row = mysqli_fetch_assoc($result4)) {

      /* 		$id= $row['id'];
        	$distributor_check= $row['distributor_check'];
        	$date= $row['date'];
        	$memo_no= $row['memo_no'];
        	$amount= $row['amount'];
        	*/   
        	echo "<tr>";
        	echo "<td>{$row['id']}</td>
			<td>{$row['d_check']}</td>
			<td>{$row['date']}</td>
			<td>{$row['memo_no']}</td>
			<td>{$row['i_amount']}</td>
			<td>{$row['p_amount']}</td>
			<td>{$row['remarks']}</td>
			<td>{$row['entry']}</td>
			<td>{$row['error']}</td>
			";
if ($row['status']=="Verified" && $_SESSION['type'] == "user") {
	        echo "<td>Not Allowed</td>";
	    }
		else{
			echo "<td>
				<a href='add_data.php?eid={$row['id']}'><i class='fas fa-edit' style='font-size:20px;color:blue;'></i></a> &nbsp
				<a href='add_data.php?did={$row['id']}'><i class='fas fa-trash-alt' style='font-size:20px;color:red;'></i></a> &nbsp&nbsp
				<a href='add_data.php?vid={$row['id']}'><i class='fas fa-check-square' style='font-size:21px;color:green;'></i></a>
			</td>";
}
				
			echo "<td>{$row['status']}</td>";	
			echo "<td>{$row['user']}</td>";	


			echo "</tr>";

}
}

}
elseif(isset($_POST['submit']))
{
	$r_code=$_POST['r_code'];

		$sql4 = "SELECT * FROM `invoice2` WHERE `r_code`='$r_code'";

	$result4 = mysqli_query($conn, $sql4);

	if (mysqli_num_rows($result4)>0){

while($row = mysqli_fetch_assoc($result4)) {

      /* 		$id= $row['id'];
        	$distributor_check= $row['distributor_check'];
        	$date= $row['date'];
        	$memo_no= $row['memo_no'];
        	$amount= $row['amount'];
        	*/   
        	echo "<tr>";
        	echo "<td>{$row['id']}</td>
			<td>{$row['d_check']}</td>
			<td>{$row['date']}</td>
			<td>{$row['memo_no']}</td>
			<td>{$row['i_amount']}</td>
			<td>{$row['p_amount']}</td>
			<td>{$row['remarks']}</td>
			<td>{$row['entry']}</td>
			<td>{$row['error']}</td>
			";
if ($row['status']=="Verified") {
	        echo "<td>Not Allowed</td>";
	    }
		else{
			echo "<td>
				<a href='add_data.php?eid={$row['id']}'><i class='fas fa-edit' style='font-size:20px;color:blue;'></i></a> &nbsp
				<a href='add_data.php?did={$row['id']}'><i class='fas fa-trash-alt' style='font-size:20px;color:red;'></i></a> &nbsp&nbsp
				<a href='add_data.php?vid={$row['id']}'><i class='fas fa-check-square' style='font-size:21px;color:green;'></i></a>
			</td>";
}
				
			echo "<td>{$row['status']}</td>";	
			echo "<td>{$row['user']}</td>";			


			echo "</tr>";

}
}

}


if (isset($_GET['did'])) {
	$del=$_GET['did'];
	$sql3= "DELETE FROM invoice2 WHERE id='$del'";
	mysqli_query($conn, $sql3);
	echo "	<script type='text/javascript'>
			alert('invoice2 $del; Delete Successful');
			window.location = 'add_data.php';
		</script>";
}


if (isset($_GET['eid'])) {
	$edit=$_GET['eid'];
	$sql4="SELECT * FROM invoice2 WHERE id='{$edit}'";
	$select=mysqli_query($conn, $sql4);
	$srow= mysqli_fetch_array($select);

	echo "<form id='edit_data' method='POST'>
		<fieldset>
			<legend>Edit invoice2 Data</legend>
		<table class='table table-borderless'>
	<tr>
		<td> <input type='hidden' name='e_id' value='{$srow['id']}' ></td>
		
		<td width='15%'>D Check<select name='e_d_check' required>
			<option value='{$srow['d_check']}'>{$srow['d_check']}</option>
			<option value='yes'>YES</option>
			<option value='no'>NO</option>
		</select></td>

		<td width='10%'>Date<input type='Date' name='e_date' value='{$srow['date']}' required></td>
		<td width='20%'>Memo No.<input type='text' name='e_memo_no' value='{$srow['memo_no']}'required></td>

		<td width='15%'>Total Amount<input type='text' name='e_i_amount' value='{$srow['i_amount']}'required></td>
		<td>

		<td width='15%'>Paid Amount<input type='text' name='e_p_amount' value='{$srow['p_amount']}'required></td>
		<td>

		<td width='20%'>Remarks<input type='text' name='e_remarks' value='{$srow['remarks']}'></td>
		<td>

		<td width='20'>Entry<select name='e_entry' required>
			<option value='{$srow['entry']}'>{$srow['entry']}</option>
			<option value='yes'>YES</option>
			<option value='no'>NO</option>
		</select></td>


		<td width='20'>Error<select name='e_error' required>
			<option value='{$srow['error']}'>{$srow['error']}</option>
			<option value='ok'>OK</option>
			<option value='error'>ERROR</option>
		</select></td>

		<input type='submit' name='update' class='btn btn-success' value='Update'>
		</td>

	</tr>
	</form>";
	if(isset($_POST["update"])){

		$e_id = $_POST['e_id'];
		$e_d_check = $_POST['e_d_check'];
		$e_date = $_POST['e_date'];
		$e_memo_no = $_POST['e_memo_no'];
		$e_i_amount = $_POST['e_i_amount'];
		$e_p_amount = $_POST['e_p_amount'];
		$e_remarks = $_POST['e_remarks'];
		$e_error = $_POST['e_error'];
		$e_entry = $_POST['e_entry'];
		$e_status = "updated";
		$e_name=$_SESSION["Name"];

		$sql5="UPDATE invoice2 SET d_check='{$e_d_check}', date ='{$e_date}', memo_no='{$e_memo_no}', i_amount= '{$e_i_amount}', p_amount= '{$e_p_amount}', remarks= '{$e_remarks}', entry= '{$e_entry}',error= '{$e_error}', user= '{$e_name}', status= '{$e_status}'WHERE id='{$e_id}'";
		$update=mysqli_query($conn,$sql5);
			echo "<script type='text/javascript'>
			alert('invoice2:$edit;Update Successful.');
			window.location = 'add_data.php';
		</script>";

	}

}



if (isset($_GET['vid'])) {

$verify=$_GET['vid'];
$v_name=$_SESSION["Name"];
$v_status = "Verified";
$sql6 ="UPDATE invoice2 SET status='{$v_status}', user='{$v_name}' WHERE id='{$verify}'";
$result6=mysqli_query($conn,$sql6);
	echo "<script type='text/javascript'>
	alert('invoice2:$verify; Verified');
	window.location = 'add_data.php';
	</script>";
	
}




mysqli_close($conn);


?>	
	    </table>
        </fieldset>
    </div>
  </div>
  </div>


</body>
</html>


<?php
} else {
    header('Location: disconnect.php');

}

?>