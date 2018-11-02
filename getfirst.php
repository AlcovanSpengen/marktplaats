<?php 
class Getfirst extends Dbh {
    protected function getvirst() {
        $sql = "SELECT * FROM producten LIMIT 1";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
