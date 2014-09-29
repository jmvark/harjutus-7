<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8">
<title>harjutus-7</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h2>While loop</h2>

	<?php
		$count = 10;


		while ($count <= 100) {
        echo $count . ", ";
        $count += 1;
    }
echo "<br>";
    $count = 100;


		while ($count <= 1000) {
        echo $count . ", ";
        $count += 100;
    }
	?>

	<?php
//    	$count = 1;
//  	while ($count <= 10) {
//    	echo $count;
//      }

?>

<h3>Conditional statements in while loop</h3>

<?php
    $count = 1;
    while ($count < 10) {
        if ($count == 3) {
            echo "kolm";
        }elseif 
		($count == 7) {
            echo "seitse";
        }
		else {
            echo $count;
        }
        $count += 1;
    }
    echo "<br>";
?>
<h2>For loop</h2>

<?php
    for ($count = 1; $count <= 20; $count += 1) {
	if ($count %2==0) {echo "number $count on paarisarv";}
	elseif ($count %2==1) {echo "number $count on paaritu arv";}
    }
?>

<h2>Foreach loop</h2>
<?php
    $name = array("Andmebaasid", "Veebikujundus", "Veebiarendus", "Erialane füüsika", "Sisuhaldussüsteemid");
    $nr = 1;
    foreach ($name as $name) {
        echo $nr . " " . $name ;
		$nr++;

    }
     echo "<br>";
?>
<br>
<table class="tabel">
<?php
    $contact = array(
        "first_name" => "Joonas",
        "last_name" => "Jaanus",
        "e_mail" => "Kabja-Paluoja",
        "age" => 89);
  foreach ($contact as $attribute => $value ) {
    	$attribute_formatted = ucfirst(str_replace("_", " ", $attribute));
        echo "<tr><td>{$attribute_formatted}:</td><td> {$value}<br></td></tr>";
    }
?>
</table>
</body>
</html>
