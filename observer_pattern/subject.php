<?php
abstract class Subject {
    abstract function attach(Observer $observer);
    abstract function detach(Observer $observer);
    abstract function notify();
}
?>


