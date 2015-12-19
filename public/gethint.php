<?php
// Array with names
	require("../includes/config.php");
$arr = query("SELECT SYMBOL from quotes2");
$a = array();

foreach($arr as $row) {
	foreach ($row as $ele)
		array_push($a,$ele);
}

/*$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";*/

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
	$i=0;
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
			$i++;
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
		if($i==10)
			break;
    }
}

// Output "no suggestion" if no hint was found or output correct values 
print $hint === "" ? "no suggestion" : $hint;
?>