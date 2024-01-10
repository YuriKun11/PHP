<?php

    $child = true;
    $senior = true;
    $fare = null;

    if($child || $senior){
        $fare = 13;
    }else{
        $fare = 15;
    }
    echo "The fare is ₱{$fare}"

?>