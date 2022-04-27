<?php
function reverseWord(&$str)
{
    /// START OF YOUR ANSWER - YOU CAN WRITE YOUR ANSWER BELOW
    ///-------------------------------------------------------------------------
    $str[count($str)]=" ";
    $z_content = "";
    for ($z=0; $z < count($str); $z++) { 
        if($str[$z]==" "){
            $top=0;
            for ($x=0; $x < strlen($z_content); $x++) { 
                $top =($z - $x);
                $str[ $top ]=substr($z_content ,$x,1);
            }
            $top--;
            $str[$top]=" ";
            $z_content="";
        }
        else{
            $z_content.=$str[$z];
        }
    }
    ///-------------------------------------------------------------------------
    /// END OF YOUR ANSWER
    ///-------------------------------------------------------------------------
    // @note  Call reverseWord($str) for "12 345 67890" should change str to "21 543 09876"
}


?>