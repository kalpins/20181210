<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $name="Roland";
    $number =0;
        function calc(){
            print 45 +55;
        }
        function br(){
            print "<br>";
        }
        function summa($a,$b){
            print $a + $b;
        }
        function greeting($vards){
            global $name;
            print $name;
            print "Sveiks ".$vards;
        }

        function inc($skaitlis){
            $summa = $skaitlis + 1;
            return $summa;
        }

        $number = inc($number);//1
        // print($number);
        $number = inc($number);//2
        $number = inc($number);//3
        $number = inc($number);//4
        $number = inc($number);//5
        print $number;//5
        br();
        greeting($name);
        br();
        greeting("Tatjana");
        br();
        calc();
        br();
        calc();
        br();
        summa(20,30);



    ?>
</body>
</html>