<?php
function get_num_chars($char) {
    $string = '120201M, 121212M-1, 21121212M, 232323M-2, 32323K, 323232K-1';
    return preg_match_all('/'.$char.'(?=,|$)/', $string, $m);
}

echo get_num_chars('M');    // 2
echo get_num_chars('M-1');  // 1
echo get_num_chars('M-2');  // 1
echo get_num_chars('K');    // 1
echo get_num_chars('K-1'); 
?>
