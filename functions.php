<?php

function addButton($number, $order) {
    if ($number % $order == 0) {
    echo '<button class="success">' . $number . '</button>';
    }
    else  echo '<button>' . $number . '</button>';

}

function addMultipleButtons($start, $end, $order) {
    addButton($start, $order);

        if ($start < $end) {
            addMultipleButtons($start + 1, $end, $order);
        }
}
function isValueInt($value) { 
	if ((int) $value >0 || $value==="0") {
		return true;
	}
 return false;
	 }
   

	

	
	