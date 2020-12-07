<?php

class Products extends Model {

    private function verifyProduct($cod){
        //verificacao

        $sql = "SELECT * FROM products WHERE cod = :cod";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':cod',$cod);
        $sql->execute();

        if ($sql->rowCount()<= 0) {
            return true;
        }else{
            return false;
        }
    }

    public function getProducts($s='')
    {
        $array = array();
        
        if (!empty($s)) {
            $sql  = "SELECT * FROM products WHERE cod = :cod OR name LIKE :name";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":cod", $s);
            $sql->bindValue(":name", '%'.$s.'%');
            $sql->execute();
            //pesquisa por nome ou codigo 
        }else{
            $sql  = "SELECT * FROM products";
            $sql = $this->db->query($sql);
        }

        
        if ($sql->rowCount() > 0 ) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

    public function addProduct($cod, $name, $price, $quantity, $min_quantity)
    {
        if($this->verifyProduct($cod)) {
            $sql = "INSERT INTO products 
            (cod, name, price, quantity, min_quantity) VALUES
            (:cod, :name, :price, :quantity, :min_quantity)";

                 $sql = $this->db->prepare($sql);
                 $sql->bindValue(':cod',$cod);
                 $sql->bindValue(':name',ucwords($name));
                 $sql->bindValue(':price',$price);
                 $sql->bindValue(':quantity',$quantity);
                 $sql->bindValue(':min_quantity',$min_quantity);
                 $sql->execute();

        }else{
            return false;
        }
    }

    public function getProduct($id){
        $array = array();

        $sql  = "SELECT * FROM products WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();
        if ($sql->rowCount() > 0 ) {
            $array = $sql->fetch();
        }
        return $array;
    }

    public function editProduct($cod, $name, $price, $quantity, $min_quantity, $id){
               
               $sql = "UPDATE products SET
                cod = :cod, name = :name, price = :price , 
                quantity = :quantity, min_quantity = :min_quantity WHERE id = :id";

                $sql = $this->db->prepare($sql);
                $sql->bindValue(':cod',$cod);
                $sql->bindValue(':name',$name);
                $sql->bindValue(':price',$price);
                $sql->bindValue(':quantity',$quantity);
                $sql->bindValue(':min_quantity',$min_quantity);
                $sql->bindValue(':id',$id);
                $sql->execute();
    }

    public function getLowQuantityProducts(){
        
        $array = array();

        $sql = "SELECT * FROM products WHERE quantity < min_quantity";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
}