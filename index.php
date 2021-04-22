<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="index.php" method="post">

    <h2>Contact information</h2>

    <table border="1" align="center">

        <tr>
            <td>Name:</td>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <td>Comment::</td>
            <td><input type="textarea" name="comment"/></td>
        </tr>
        <tr>
            <td>Date::</td>
            <td><input type="Date" name="date"/></td>
        </tr>
        <tr>
            <td><input type="submit"/></td>
        </tr>

    </table>
</form>
<?php
error_reporting(1);

$username=$_POST['username'];

$comment=$_POST['comment'];

$date=$_POST['date'];

echo "Your username is: $username<br>";

echo "You commented $comment, and the date was $date";

?>

<form action="index.php" method="post">

    <h2>Area of rectangle calculator</h2>
    <h3>To input decimals, use a dot (.)</h3>

    <table border="1" align="center">

        <tr>
            <td>Length of a side: (in cm)</td>
            <td><input type="number" step="any" name="side-1"/></td>
        </tr>
        <tr>
            <td>Length of the other side: (in cm)</td>
            <td><input type="number" step="any" name="side-2"/></td>
        </tr>

        <tr>
            <td><input type="submit"/></td>
        </tr>

    </table>
</form>

<?php
error_reporting(1);

$side1=$_POST['side-1'];

$side2=$_POST['side-2'];

$area = $side1 * $side2;

$areaRounded = round($area, 2);

echo "the area of your object is: $area (rounded to 2 decimals)<br>";

?>

<form action="index.php" method="post">

    <h2>Count average</h2>
    <h3>input multiple comma separated values (eg. 1, 6, 10, 19) </h3>

    <table border="1" align="center">

        <tr>
            <td>Enter your numbers here</td>
            <td><input type="text" name="num" size="10" /></td>
        </tr>

        <tr>
            <td><input type="submit"/></td>
        </tr>

    </table>
</form>

<?php
error_reporting(1);


$num = explode(',', $_POST['num']); // This removes the commas from the string $_POST['num'] and becomes an array with the explode function.
$averageOfNumbers = array_sum($num) / count($num);
echo "the average of your numbers is: $averageOfNumbers";
?>

<form action="index.php" method="post">

    <h2>Count text length and capitalize all vowels</h2>

    <table border="1" align="center">
        <tr>
            <td>Input text here</td>
            <td><input type="textarea" name="text"/></td>
        </tr>
            <td><input type="submit"/></td>
        </tr>

    </table>
</form>
<?php
error_reporting(1);


$text=$_POST['text'];

$lengthOfString = strlen($text);
nl2br($text);

$vowels = array('a', 'e', 'i', 'o', 'u', 'å', 'ä', 'ö');
$vowelsCaps = array('A', 'E', 'I', 'O', 'U', 'Å', 'Ä', 'Ö');

$textVowelsCapitalized = str_replace($vowels, $vowelsCaps, $text);

echo "The length of your text is: $lengthOfString, 
and here is your text with all vocals capitalized: $textVowelsCapitalized"

?>

<form action="index.php" method="post">

    <h2>Convert month number to name</h2>

    <table border="1" align="center">
        <tr>
            <td>Enter number of month</td>
            <td><input type="number" name="monthNumber"/></td>
        </tr>
        <td><input type="submit"/></td>
        </tr>

    </table>
</form>

<?php
error_reporting(1);


$mNumber=$_POST['monthNumber'];
$monthNames = array('empty', 'Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'Juli', 'August', 'Sep', 'Oct', 'Nov', 'Dec');
$converted = $monthNames[$mNumber];

echo "$converted"

?>
</body>

</html>


