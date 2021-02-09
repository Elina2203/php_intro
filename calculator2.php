<link rel="stylesheet" href="style1.css" >


<?php
$n1 = '';
$n2 = '';
$operator =  '';
$allowed_operations=['+' => '+', '-' => '-', '*'=> '*', '/'=>'/',"**"=>"ˆ"];


if (array_key_exists('number-1', $_GET) &&
   array_key_exists('number-2', $_GET) &&
   array_key_exists('operator', $_GET)
) {
    $n1 = $_GET['number-1'];
    $n2 = $_GET['number-2'];
    $operator = $_GET['operator'];
        if (isValueInt($n1) &&
    isValueInt($n2) &&
    array_key_exists($operator, $allowed_operations)
 ) {
    switch($operator){
        case "+":
            $result=$n1+$n2;
            break;
        case "-":
             $result=$n1-$n2;
             break;
        case "*":
             $result=$n1*$n2;
             break;
        case "/":
            $mod= $n1%$n2;
             $result=($n1-$mod)/$n2 ."+". $mod ."/" .$n2;
             break;
             case "**":
                $result=$n1**$n2;
                break;


         default:
             $result="unknown";

    }
            echo "$n1  $operator $n2 = $result";
                    }
                else {
                    echo "wrong field values";
                }
                }
                else {
                echo 'please set values';
            }




function isValueInt($value) {
    if ((int) $value > 0 || $value === "0") {
        return true;
    }
    return false;
}
?>

<div class="calculator">
    <form action="" method="get">
    <div>
        <label>number1: </label>
        <input type="number" name="number-1" value="<?=$n1;?>">
        </div>
        <label>operation: </label>
        <select name="operator" id="">
    <?php
    foreach($allowed_operations as $key=>$opr){
        $selected=$operation === $key ? 'selected':'';
    
    echo "<option value='$key'>$opr</option>";
    
    }
    ?>
            <option value="+"<?php echo $operator === '+' ? "selected" :'';?>>+</option>
            <option value="-"<?php echo $operator === '-' ? "selected" :'';?>>-</option>
            <option value="*"<?php echo $operator === '*' ? "selected" :'';?>>*</option>
            <option value="/"<?php echo $operator === '/' ? "selected" :'';?>>/</option>
            <option value="**"<?php echo $operator === '**' ? "selected" :'';?>>ˆ</option>

        </select>
        <div>
        <label>number2: </label>
        <input type="number" name="number-2" value="<?=$n2;?>">
        </div>
        <button class="btn" type="submit">submit</button>
    </form>
<div>
<a href="calculator2.php">reload </a>