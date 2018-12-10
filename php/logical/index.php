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
        if(3>10){
            print "trīs ir lielāks par 10";
        } else {
            print "trīs nav lielāks par 10";
        }

        if(3>10){
            print "trīs ir lielāks par 10";
        } elseif (4>5){
            print "četri ir lielāks par 5";
        } else {
            print "Nekas neizpildījās";
        }

        if (1==2){
            print "Go home you are drunk";
        }
        if (1=="1"){
            print "I work";
        }
        if (1==="1"){
            print "I not work";
        }


        // vienāds ==
        // identiski vienāds === (sakrīt arī datu tipi!!!)
        // salīdzināšana  < > >= <= <>
        // nav vienāds !=
        // nav identisks !==
?> <br> <?php
        if (1===1 && 2===2){
            print "OK";
        }

        //  un &&
        // vai ||

    ?>
<br>
<br>
<?php
//switch
    $number = 100;

    switch($number){
        case 34:
            print "34";
            break;
        case 100:
            print "100";
            break;
        default:
            print "Default triggered!!!";
    }
?>
</body>
</html>