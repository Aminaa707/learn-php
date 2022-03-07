<?php

// JOkhon e kono class er property k amra kono function er modde access debo tokho "this" key word lagbe.

class learning {
     public $React = "Jhankar";
     public $CSE = "Priton";
     public $JS = "Stack Learner";

     public function Course(){
        echo $this -> CSE;
    }
 }

$want = new learning();
$want->Course();

?>