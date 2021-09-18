<?php
declare(strict_types=1);

/*
قم بتعريف دالة إسمها CountOccurrences, عند استدعاءها نمرر لها نصيّن, فترجع عدد صحيح يمثل كم مرة النص الثاني مكرر في النص الأول.
بعدها قم بتجربة هذه الدالة في البرنامج مع جعل المستخدم هو من يدخل النصيّن.

مثال: إذا قمنا باستخدام الدالة CountOccurrences() لمعرفة كم مرة تكررت الكلمة cat في النص I like cats. I have one cat called Lola فإنها سترجع الرقم 2.


*/

function CountOccurrences(string $str_value , string $str_find){
    $conteur = 0;
    $str_test = '';
    $n = 0;
    for($i = 0 ;$i <strlen($str_value); $i++){
        $n++;
        if($str_value[$i] == ' '){
            $str_test = '';
        }
        else{
            $str_test .= $str_value[$i];
        }
        if($str_test == $str_find){
            $conteur++;
        }
    }
    return $conteur;
}


if(isset($_POST['btn']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    echo CountOccurrences($_POST['str_value'],$_POST['str_find']);
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem2</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="str_value" placeholder="string value">
    <input type="text" name="str_find" placeholder="string find">
    <button type="submit" name="btn">send</button>
    </form>
</body>
</html>
