<?php 
class ConvertToRoman {
    private $decimalNums    =[1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
    private $romanNums    = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];

    public function getConvert($argNum = null) {
        $romanVal = '';
        for ($index = 0; $index < count($this->decimalNums); $index++) {
            while ($this->decimalNums[$index] <= $argNum) {
               $romanVal.= $this->romanNums[$index];
               $argNum-=$this->decimalNums[$index];
           }
       }
       return $romanVal;
   }
}
$getValue = new ConvertTwoRoman();
var_dump($getValue->getConvert(101));
?>