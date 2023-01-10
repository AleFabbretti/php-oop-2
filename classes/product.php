<?php 
    class Product{
        public $category;
        public $image;
        public $name;
        public $price;
        public $type;

        public function __construct($_category, $_image, $_name, float $_price, $_type){
            $this->category = $_category;
            $this->image = $_image;
            $this->name = $_name;
            $this->price = $_price;
            $this->type = $_type;
        }
    }

?>