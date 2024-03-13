<?php 
include_once "interface.php";
include_once "type-calculate/discount.php";
    class Index {
        private $price;
        private $discount;
        public function __construct($price, fixedDiscountPromotion $discount) {
            $this->price = $price;
            $this->discount = $discount;
        }
        public function getFinalPrice(){
            return $this->discount->calculatePromotion($this->price);
        }

        public function getDiscount(){
            return $this->discount->calculatePromotion($this->price);
        }
    }

    $index = new  Index(200, new fixedDiscountPromotion(10));
    echo $index->getFinalPrice();
?>