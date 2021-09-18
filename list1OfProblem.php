<?php
declare(strict_types=1);
/*
أكتب برنامج يطلب من المستخدم إدخال رقم. بعدها يعرض له ناتج جمع أعداد هذا الرقم.
مثال: إذا قام المستخدم بإدخال الرقم 123 فسيتم حساب مجموع أعداده هكذا 1 + 2 + 3 و النتيجة ستكون 6.
*/

// if(isset($_POST['btn']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
//     $nbr = $_POST['nbr'];
//     $sum = 0;
//     while($nbr > 0){
//         $n = $nbr/10;
//         $sum += explode(".",$n)[1];
//         $nbr = explode(".",$n)[0];
//     }
//     echo '</br>sum is '.$sum;
// }

/*
    أكتب برنامج يطلب من المستخدم إدخال رقم. بعدها يعرض له نسخة من هذا الرقم و لكن بشكل معكوس.
مثال: إذا قام المستخدم بإدخال الرقم 12345, النتيجة ستكون 54321.
*/

// if(isset($_POST['btn']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
//     $nbr = $_POST['nbr'];
//     while($nbr > 0){
//         $n = $nbr/10;
//        echo explode(".",$n)[1];
//         $nbr = explode(".",$n)[0];
//     }
// }


/*
    أكتب برنامج يطلب من المستخدم إدخال رقم. بعدها يعرض له إن كان هذا الرقم عبارة عن Palindrome أم لا.
الـ Palindrome عبارة عن رقم أعداده معكوسة بشكل متساوي من اليمين إلى اليسار و من اليسار إلى اليمين.

أمثلة: الأرقام التالية جميعها تعتبر أرقام Palindrome: 1001 - 123321 - 4554 - 45654.
*/

// if(isset($_POST['btn']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
//     $nbr = $_POST['nbr'];
//     $namber = $nbr;
//     $nbrs = [];
//     while($nbr > 0){
//         $n = $nbr/10;
//        $nbrs[] = explode(".",$n)[1];
//         $nbr = explode(".",$n)[0];
//     }
//     $ver = true;
//     $count = count($nbrs)-1;
//     for($i = 0 ; $i < count($nbrs) ; $i++){
//         if(!($nbrs[$i] === $nbrs[$count])){
//             $ver = false;
//         }
//         $count--;
//     }
//     if($ver == true){
//         echo '</br>'.$namber.' is Palindrome';
//     }
//     else{
//         echo '</br>'.$namber.' Not a Palindrome';
//     }


/*
قم بتعريف دالة إسمها ReverseString, عند استدعاءها نمرر لها نص, فترجعه معكوساً.
بعدها قم بتجربة هذه الدالة في البرنامج مع جعل المستخدم هو يدخل النص الذي سيتم عرضه بشكل عكسي.

مثال: إذا قمنا باستخدام الدالة ReverseString() و تمرير النص I love programming فمن المفترض أن ترجعه هكذا gnimmargorp evol I
*/


function my_reverser(string $value){
    $nv_value = '';
    for($i = strlen($value)-1;$i >= 0 ;$i--){
        $nv_value .= $value[$i];
    }
    return $nv_value;
}

if(isset($_POST['btn']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
   echo my_reverser($_POST['nbr']);
}



/*
قم بتعريف دالة إسمها CountOccurrences, عند استدعاءها نمرر لها نصيّن, فترجع عدد صحيح يمثل كم مرة النص الثاني مكرر في النص الأول.
بعدها قم بتجربة هذه الدالة في البرنامج مع جعل المستخدم هو من يدخل النصيّن.

مثال: إذا قمنا باستخدام الدالة CountOccurrences() لمعرفة كم مرة تكررت الكلمة cat في النص I like cats. I have one cat called Lola فإنها سترجع الرقم 2.


*/

function CountOccurrences(string $str_value , string $str_find){
    $conteur = 0;
    $str_test = '';
    for($i = 0 ;$i <strlen($str_value); $i++){
        if($str_value[$i] == ' '){
            $str_test = '';
        }
        $str_test .= $str_value[$i];
        if($str_test == $str_find){
            $conteur++;
        }
    }
    return $conteur;
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem1</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="nbr">
    <button type="submit" name="btn">send</button>
    </form>
</body>
</html>
