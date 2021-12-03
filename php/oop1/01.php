<?php
 class Fund{
     private $fund;


     function __construct($mon=0){
         $this->fund = $mon;
     }
      public function addFund($money)
     {
        $this->fund += $money;
     }
     public function deductFund($money)
     {
        $this->fund -= $money;
     }
     public function getTotal()
     {
        echo "Total fund is {$this->fund}\n";
     }
 }
$ourFund = new Fund(100);

$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->deductFund(7);
$ourFund->getTotal();
// $ourFund ->fund=100;
// $ourFund->getTotal();