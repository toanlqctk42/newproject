<ul>
<?php
	include('../library/database.php');
	require_once 'controllers/products.php';
	if(isset($_POST['id'])){
		$idcate= $_POST['id'];
		if($idcate==0){
			$sql = new Products;
			$result=$sql->getallproducts();
			foreach ($result as $rowmenu) { ?>
				<li>
					<a href="#" onclick="cms_select_menu('<?php echo $rowmenu->Id;?>')" title="<?php echo $rowmenu->NameMenu;?>">
						<div class="img-product">
							<img src="../public/assets/images/<?php echo $rowmenu->Images; ?>">
						</div>
						<div class="product-info">
							<span class="product-name"><?php echo $rowmenu->NameMenu;?></span><br>
							<strong><?php echo number_format($rowmenu->Price,0);?></strong>
						</div>
					</a>
				</li>
		<?php }
			}else {
			$sql = new Product;
			$result=$sql->getproductstocate($idcate);
			foreach ($result as $rowmenu) { ?>
				<li>
					<a href="#" onclick="cms_select_menu('<?php echo $rowmenu->Id;?>')" title="<?php echo $rowmenu->NameMenu;?>">
						<div class="img-product">
							<img src="../public/assets/images/<?php echo $rowmenu->Images; ?>">
						</div>
						<div class="product-info">
							<span class="product-name"><?php echo $rowmenu->NameMenu;?></span><br>
							<strong><?php echo number_format($rowmenu->Price,0);?></strong>
						</div>
					</a>
				</li>
		<?php }
		}
	}
?>
</ul>