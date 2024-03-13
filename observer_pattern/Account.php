<?php 
    class Account extends Subject {
        private $observer = array();
        private $name = '';
        function attach(Observer $observer) {
            $this->observer[] = $observer;
        }
        
        function detach(Observer $observer) {
            foreach ($this->observer as $key => $value) {
                if ($value == $observer) {
                    unset($this->observer[$key]);
                }
            }
        }

        public function notify(){
            foreach ($this->observer as $key => $value) {
                $value->update();
            }
        }

        public function getData(){
            return $this->name;
        }

        public function setData($name){
            return $this->name = $name;
        }

        public function save(){
            $this->notify();
        }
    }
?>