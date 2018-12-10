<?php 

$array = array("viens","divi","trīs");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<tbody>
<?php foreach ($array as $key => $value) {
           // print $value." ".$key."<br>";
            print "<tr>";
            print "<td>".$key;
            print "</td>";
            print "<td>".$value;
            print "</td>";
            print "</tr>";
        }
?>
</tbody>
</table>
    
</body>
</html>