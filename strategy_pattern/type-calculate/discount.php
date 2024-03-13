<?php 

    class fixedDiscountPromotion implements Original_Promotion{
        private $discount;
        public function __contruct($discount){
            $this->discount = $discount;
        }
        public function calculatePromotion($price){
            return $price * ($this->discount / 100);
        }

    }
?>