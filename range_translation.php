<?php

function reverseString(&$str, $start, $length)
{
    /// START OF YOUR ANSWER - YOU CAN WRITE YOUR ANSWER BELOW
    ///-------------------------------------------------------------------------
    
    $xcontent=""; 
    $xcount=$length;
    
    for ($i=0; $i < count($str); $i++) { 
        if( $i>=$start && $i<($start+$length)){
            $xcontent.=$str[$i];
        }
        if(strlen($xcontent)==$xcount){
            for ($x=0; $x < strlen($xcontent) ; $x++) { 
                $top=$i-$xcount+1;
                $str[$top]=substr($xcontent,(strlen($xcontent)-($x+1)),1);
                $xcount--;
                
            }
            $i=$i+$length;
        }
    }



    //-------------------------------------------------------------------------
    // END OF YOUR ANSWER
    //-------------------------------------------------------------------------
    // @note  Call reverseString($str, 3, 3) for "1234567890" should change $str to "1236547890"
}


?>