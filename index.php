<?PHP

echo("PHP version" + phpversion());

$factorial = 1;
for ($x=1; $x<=69; $x++)
{
    $factorial = $factorial * $x;
    echo "<br> $x! = $factorial";

}
?>