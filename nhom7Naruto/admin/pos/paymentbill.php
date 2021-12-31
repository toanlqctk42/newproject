<?php
	session_start();
	require_once('../library/database.php');
	if(isset($_POST['data'])){
		$user = $_SESSION['uid'];
		$json =$_POST['data'];
		$table_id= $json['table_id'];
		$note = $json['note'];


		$sql = "SELECT * FROM Bill WHERE IdTable ='$table_id' AND Bill_Status=0";
		$result=mysqli_query($conn,$sql);
		$bill = mysqli_fetch_assoc($result);


		$idbill = $bill['Id'];
		$updatebill = "UPDATE Bill SET Bill_Status ='1' WHERE Id = '$idbill'";
		$result2=mysqli_query($conn,$updatebill);

		
		if(isset($result2)){
			$updatetable = "UPDATE tables SET Status ='0' WHERE Id ='$table_id'";
			$result3=mysqli_query($conn,$updatetable);
		}
		if(mysqli_num_rows($result)>0){
			echo '
			<h2 style="text-align:center">HÓA ĐƠN BÁN HÀNG</h2>
			<table class="table" style="width:100%">
			<thead>
				<tr>
					<th>STT</th>
					<th>Tên sản phẩm</th>
					<th>Số lượng</th>
					<th>Gía bán</th>
				</tr>
			</thead>
			<tbody>';
			$selectoder = "SELECT * FROM billdetail
			INNER JOIN 	menus ON billdetail.IdMenu = menus.Id WHERE IdBill ='$idbill'";
			$resultdetail = mysqli_query($conn,$selectoder);
			$stt=0;
			while ($rows = mysqli_fetch_array($resultdetail)) {
				$stt++;
			?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php echo $rows['NameMenu'];?></td>
					<td><?php echo $rows['Quantity']; ?></td>
					<td><?php echo number_format($rows['Price'],0);?></td>
				</tr>
		<?php }
			echo '<tr>
					<td colspan="3">Tổng cộng:</td>
					<td>'.number_format($bill['Totalprice']).'</td>
				</tr>
			</tbody></table>';
		}else{

			}
		}
?>