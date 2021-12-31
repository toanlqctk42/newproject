<?php
require_once './controllers/categorieController.php';
$cssFile ="public/css/cardstyle.css";
echo "<link rel='stylesheet' href='" . $cssFile . "'>";
$NameMenu = filter_input(INPUT_GET,'title',FILTER_SANITIZE_STRING);
$products = new categorieController;
$data = $products->get_product_withcategory($NameMenu);
$count = 0;
$newrow = true;


foreach ($data as $data_cel){
        
    if ($newrow){
        echo "<div class='card-deck'>";
        $newrow = false;
    }
    echo "<div class='card'>";
        echo "<img class='card-image' src='public/assets/images/$data_cel->Images' >";
        echo "<div class='card-text'>";
        echo "    <h2>$data_cel->NameMenu</h2>";
        echo "</div>";
        echo "<div class='card-stats'>";
        echo "    <div class='stat'>";
        echo "    </div>";
        echo "   <div class='stat'>";
        echo "    <div class='type'>Giá Tiền:</div>";
        echo "    <div class='value'>$data_cel->Price <sup>VND</sup></div>";
        echo "    </div>";
        echo "    <div class='stat'>";
        echo "    </div>";
        echo "</div>";
        echo "</div>";


    $count++;

    if ($count == 3){
        echo "</div><br>";
        $newrow = true;
        $count = 0;
    }
    
}

?>