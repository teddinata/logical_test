<?php 

function FooBar($foobar)
{
    for ($a = 1; $a <= $foobar; $a = $a + 1) {
        if ($a % 3 == 0 && $a % 5 != 0) {
            echo "Foo" . '<br/>';
        } elseif ($a % 5 == 0 && $a % 3 != 0) {
            echo "Bar" . '<br/>';
        } elseif ($a % 3 == 0 && $a % 5 == 0) {
            echo "FooBar" . '<br/>';
        } else {
            echo $a . '<br/>';
        }
    }
    /*    return TRUE;*/
}
echo FooBar(50);

?>