<?php
include_once 'test.php';

class Test extends Message {
 
    public function hello(){
        echo $this->getMessage();
    }
}

$test = new Test();
$test->hello();