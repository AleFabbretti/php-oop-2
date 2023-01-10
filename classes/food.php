<?php 
    require_once __DIR__ ."/food.php";

    class Food extends Product {
        public $calorie;

        public function __construct($_category, $_image, $_name, $_price, $_type, $_calorie)
        {
            parent::__construct($_category, $_image, $_name, $_price, $_type);
            $this->calorie = $_calorie;
        }
    }
?>