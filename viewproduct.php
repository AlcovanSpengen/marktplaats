<?php

class ViewProduct extends Product {

    public function showAllProducts() {
        $datas = $this->getAllProducts();
        foreach ($datas as $data) {
            echo "Product ID: ".$data['productid']."<br>";
            echo "Product: ".$data['productnaam']."<br>";
            echo "Prijs: ".$data['prijs']."<br>";
        }
    }
}