<?php
if (php_sapi_name() !== 'cli') echo("<pre>");
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
$s =str_split("PHP Data Operations");
#$s=["123456789"]

echo("----------------------------------------------------------------------------------------\n");
echo("Question: ".join('', $s)." || Take 4 characters after the 4th character and reverse it \n ");
echo("-----------------------------------------------------------------------------------------\n");
echo '<br>';
echo("Expected to print \"PHP ataD Operations\": ");
reverseString($s, 4, 4); // Reversing some part of the array
echo(join('', $s) . "\n");

?>