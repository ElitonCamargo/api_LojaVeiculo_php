<?php
function div($x,$y, $out){
    if($y != 0){
        $out = $x/$y;
        return true;
    }
    $out = 0;
    return false;
}