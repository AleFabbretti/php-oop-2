<?php 
    require_once __DIR__ . "/../traits/name.php";
    class Product{
        use name;
        public $category;
        public $image;
        public $name;
        public $price;
        public $type;

        public function __construct(string $_category, string $_image, string $_name, float $_price, string $_type){
            $this->category = $_category;
            $this->image = $_image;
            $this->name = $_name;
            $this->price = $_price;
            $this->type = $_type;
        }
    }

?>