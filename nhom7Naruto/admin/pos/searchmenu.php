<?php
	if(isset($_POST['menuname'])){
		require_once('../library/database.php');
		require_once('./controllers/products.php');

		$menuname = $_POST['menuname'];
		$menu = new Products;
		$result = $menu->searchmenus($menuname);
		
		if($result>0){
			echo '<ul class="list-group">';
			foreach ($result as $rows) { ?>
				<li class="list-group-item list-group-item-action data-menu-<?php echo $rows->Id;?>" onclick="cms_select_menu('<?php echo $rows->Id;?>')">
					<img src="../public/assets/images/<?php echo $rows->Images; ?>" width="50px">
					<?php echo $rows->NameMenu; ?>
				</li>
			<?php }
			echo '</ul>';
		}else{
			echo 'Không tìm thấy kết quả';
		}
	}
?>