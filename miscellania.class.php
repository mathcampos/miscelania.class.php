<?php
class Miscellania {

public function dec_to_hex($dec) 
{ 
    $sign = ""; // suppress errors 
    if( $dec < 0){ $sign = "-"; $dec = abs($dec); } 

    $hex = Array( 0 => 0, 1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 
                  6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 'a', 
                  11 => 'b', 12 => 'c', 13 => 'd', 14 => 'e',    
                  15 => 'f' ); 
        
    do 
    { 
        $h = $hex[($dec%16)] . $h; 
        $dec /= 16; 
    } 
    while( $dec >= 1 ); 
    
    return $sign . $h; 
} 

}
?>
