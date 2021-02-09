<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  include "head.php";
  include "functions.php";
?>

<label>number:1</label>
  <input type="text" name="number-1">
 
  <label>operation: </label>
  <select name="operator" id="">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
    </select>
  <input type="text" name="number-2">
  <label>number:2</label>
   
    <button type="submit">submit</button>
    </form>


    <?php
    if (isset($_GET['number-1']) && 
    isValueInt($_GET['number-1']) && 
    isset($_GET['number-2']) && 
    isValueInt($_GET['number-2'])  && 
    $_GET['operator'] == "+") {
      echo $_GET['number-1'] + $_GET['number-2'] . '<br>' . '<br>';
      }
      elseif (isset($_GET['number-1']) && 
      isValueInt($_GET['number-1']) && 
      isset($_GET['number-2']) && 
      isValueInt($_GET['number-2']) &&
       $_GET['operator'] == "-") {
          echo $_GET['number-1'] - $_GET['number-2'] . '<br>' . '<br>';
      }
      else if (isset($_GET['number-1']) && 
      isValueInt($_GET['number-1']) &&
       isset($_GET['number-2']) && 
       isValueInt($_GET['number-2']) &&
        $_GET['operator'] == "*") {
          echo $_GET['number-1'] * $_GET['number-2'] . '<br>' . '<br>';
      }
      else if (isset($_GET['number-1']) && 
      isValueInt($_GET['number-1']) && isset($_GET['number-2']) &&
       isValueInt($_GET['number-2']) && $_GET['operator'] == "/") {
          echo $_GET['number-1'] / $_GET['number-2'] . '<br>' . '<br>';
      }
      
?>