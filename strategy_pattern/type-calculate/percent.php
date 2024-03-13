<?php 

    class PerCentDiscountPromotion implements Original_Promotion{
        private $percent;
        public function __contruct($percent){
            $this->percent = $percent;
        }
        public function calculatePromotion($price){
            return $price * $this->percent / 100;
        }
    }
?>