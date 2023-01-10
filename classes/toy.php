<?php 
    require_once __DIR__ . "/product.php";

    class toy extends Product{
        public $materials;

        public function __construct($_category, $_image, $_name, $_price, $_type, $_materials)
        {
            parent::__construct($_category, $_image, $_name, $_price, $_type);
            $this->materials = $_materials;
        }
    }
?>