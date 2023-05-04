<?
function hasRequired($array, $requiredFields) {
    $array = 

    $keys = array_keys ( $array );
    foreach ($requiredFields as $fieldName ) {
        if (! in_array ($fieldName, $keys)) {
            return false;
        }
    }
    return true;
}
if ($_POST ['submitted']) {
    $testArray = array_filter($_POST);
    echo "<p>You ";
    echo hasRequired ( $testArray, array ( 'name', 'email_adress' )) ? "did" : "did not";
    echo " have all the required fields.</p>";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<p>
    Name: <input type="text" name="name" /><br /> Email adress:<input type="text" name="email_adress" /><br /> Age (optional): <input type="text" name="age" />
</p>
<p align="center">
    <input type="submit" value="Submit" name="submitted" />
</p>
</form>

<?
$person = array ('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$k = array_search("Wilma", $person);

echo("Fred's {$k} is Wilma\n");
