<?php 
class ConvertToRoman {
    private static $decimalNums    =[1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
    private static $romanNums    = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];

    public static function getConvert($argNum = null) {
        $romanVal = '';
        for ($index = 0; $index < count(self::$decimalNums); $index++) {
            while (self::$decimalNums[$index] <= $argNum) {
               $romanVal.= self::$romanNums[$index];
               $argNum-=self::$decimalNums[$index];
           }
       }
       return $romanVal;
   }
}
$getValue = ConvertToRoman::getConvert(101);
var_dump($getValue);
?>