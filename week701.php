<?php
    class Calculate{
        public $a,$b,$c; //properties

        function sum(){ //method
            $this->c = $this->a + $this->b;
            return $this->c;
        }
        function sub(){
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    $obj1 = new Calculate(); //object1
    $obj2 = new Calculate(); //object2

    $obj1->a = 20;
    $obj1->b = 10;
    print("object1 = " .$obj1->sum());

    $obj2->a = 50;
    $obj2->b = 30;
    print("object2 = " .$obj2->sum());
?>