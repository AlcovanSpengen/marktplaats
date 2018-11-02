<?php
class Viewfirst extends Getfirst {
    public function showvirst() {
        $datas = $this->getvirst();
        foreach ($datas as $data) {
            echo "Product ID: ".$data['productid']."<br>";
            echo "Product: ".$data['productnaam']."<br>";
            echo "Prijs: ".$data['prijs']."<br>";
        }
    }
}
