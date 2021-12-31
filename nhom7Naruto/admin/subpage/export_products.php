<?php
    require_once './controllers/products.php';
    $cssFile ="public/css/cardstyle.css";
    $products = new Products;
    $data = $products->getallproducts();
    $count = 0;
    $newrow = true;
    echo "<link rel='stylesheet' href='" . $cssFile . "'>";
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
