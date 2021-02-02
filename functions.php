<?php

function addButton($number) {
    $output = $number;
    if ($number%4 == 0) {
        echo '<button class="btn success">' . $output . '</button>';
        }
        else { 
            echo '<button class="btn">' . $output . '</button>';
   
}
}

function addMultipleButtons($start, $end) {
    addButton($start);
   
    
    if ($start < $end) {
        addMultipleButtons($start + 1, $end);
 
    }
}
 