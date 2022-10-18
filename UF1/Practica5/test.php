<?php
    class Test extends Db {
        public function getProducts(){
            $sql = "SELECT * FROM productes";
            $consulta = $this->connect()->query($sql);
            
            while($row = $consulta->fetch()){
                echo $row['Name'] . '<br>';
            }
        }
    }

    function getProductsPrepareStmt($nameProduct, $descProduct){
        $sql = "SELECT * FROM productes WHERE Name = ? AND Description = ?";
        $consulta = $this->connect()->prepare($sql);
        $consulta->execute([$nameProduct, $descProduct]);
        $products = $consulta->fetchAll();
        
        foreach ($products as $product){
            echo $product['Name'] . '<br>';
        }
    }
?>