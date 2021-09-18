<?php
/*
قم بتعريف دالة إسمها RemoveAll, عند استدعاءها نمرر لها نصيّن, فترجع نسخة من النص لا تحتوي على النص الثاني.
بعدها قم بتجربة هذه الدالة في البرنامج.

مثال: إذا قمنا باستخدام الدالة RemoveAll() و تمرير النص "I like cats. I have one cat." و الكلمة "cat" لها فإنها سترجع النص "I like s. I have one .".
*/

echo '################################################################';
function RemoveAll($value,$value_remove){
    $count_value_remove = strlen($value_remove);
    $nv_value = '';
    for($i = 0 ; $i < strlen($value); $i++){
        $value_compare = '';
        for($s = 0 ; $s < $count_value_remove; $s++){
            $value_compare .= $value[$i+$s];
        }
        if($value_compare == $value_remove){
            $i = $i+($count_value_remove-1);
        }
        else{
            $nv_value .= $value[$i];
        }
    }
    echo $nv_value;
}

RemoveAll("I like cats. I have one cat.","cat");
echo PHP_EOL;
echo '################################################################';
echo PHP_EOL;

/*
    قم بتعريف دالة إسمها ReplaceAll, فكرتها البحث في النص عن جزئية ( كلمة أو جملة ) محددة و تبديلها بجزئية أخرى.
عند استدعاءها يجب أن نمرر لها ثلاث نصوص. الأول يمثل نص عادي, الثاني يمثل الجزئية التي نريد البحث عنها, و الثالث يمثل الجزئية التي نريد وضعها مكان الجزئية الثانية.
في النهاية يجب أن ترجع نسخة من النص الأول بعد أن تم تبديل الجزئية التي البحث عنها بالجزئية التي نريد وضعها مكانها.
بعدها قم بتجربة هذه الدالة في البرنامج.

مثال: باستخدام الدالة ReplaceAll() يمكننا تبديل كل كلمة "cat" موجودة في النص "I like cats. I have one cat." بالكلمة "dog" و عندها سترجع لنا النص "I like dogs. I have one dog.".
*/

function ReplaceAll($value,$value_find,$value_replace){
    $value_output = '';
    $count_value_find = strlen($value_find);
    for($i = 0 ; $i < strlen($value); $i++){
        $value_compare = '';
        for($s = 0 ; $s < $count_value_find; $s++){
            $value_compare .= $value[$i+$s];
        }
        if($value_compare == $value_find){
            $i = $i+($count_value_find-1);
            $value_output .= $value_replace;
        }
        else{
            $value_output .= $value[$i];
        }
    }
    return $value_output;
}

echo ReplaceAll("I like cats. I have one cat.","cat","dog");
echo PHP_EOL;
echo '################################################################';
echo PHP_EOL;
/*
قم بتعريف دالة إسمها DoubleChars, نمرر لها نص عند إستدعاءها فتعيد لنا نسخة من هذا النص كل حرف فيها مكرر مرتين.

مثال: إذا قمنا باستخدام الدالة DoubleChars() و تمرير النص "Iron Man" فإنها سترجع النص "IIrroonn  MMaann".
*/

function DoubleChar($value){
    $output_value = '';
    for($s = 0 ; $s < strlen($value); $s++){
       $output_value .= $value[$s].$value[$s];
    }
    echo $output_value;
}

DoubleChar("Iron Man");
echo PHP_EOL;
echo '################################################################';
echo PHP_EOL;
/*
قم بإنشاء برنامج يطلب من المستخدم إدخال نص و من ثم إدخل حرف واحد.
بعدها سيقوم البرنامج بطباعة مكان كل ( Index ) موجود عليه هذا الحرف في النص.

مثال: إذا قام المستخدم بإدخال النص "Harmash is the best site to learn programming" و من ثم أدخل الحرف "a" فيجب أن يطبع له النتيجة التالية عند التشغيل.
*/

function GetIndexChar($value,$char){
    for($s = 0 ; $s < strlen($value); $s++){
        if($value[$s] == $char){
            echo "'.$char.' found at index: ".$s;
            echo PHP_EOL;
        }
     }
}
GetIndexChar("Harmash is the best site to learn programming","a");
echo PHP_EOL;
echo '################################################################';
echo PHP_EOL;
/*
قم بتعريف دالة إسمها CountWords, عند استدعاءها نمرر لها نص, فترجع عدد الكلمات الموجودة في هذا النص.
بعدها قم بتجربة هذه الدالة في البرنامج.

مثال: إذا قمنا باستخدام الدالة CountWords() و تمرير النص "Programming is easy to learn." فإنها سترجع الرقم 5.
*/


function CountWord($value){
    $NumberWord = 0;
    $value = trim($value);
    for($i = 0 ;$i < strlen($value) ; $i++){
        if($value[$i] == ' ' || $value[$i] == '\n'){
            $NumberWord++;
        }
    }
    echo 'Nomber Word is : '.++$NumberWord; 
}

CountWord("Programming is easy to learn.");
echo PHP_EOL;
echo '################################################################';
echo PHP_EOL;

//^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?๐฿]*$


/*
    قم بإنشاء برنامج يطلب من المستخدم إدخال نصّين, بعدها يقوم بطباعة ما إن كان النص الأول ينتهي بالنص الثاني أم لا.
*/

function CheckLastText($value,$find){
    if($find == substr($value,(strlen($value)-strlen($find)),strlen($value))){
        echo 'Text 1 is end with '."'$find'";
    }
    else{
        echo 'Text 1 is not end with '."'$find'";
    }
}
CheckLastText('Welcome to my world a','a');
echo PHP_EOL;
echo '################################################################';
echo PHP_EOL;


/*
قم بإنشاء برنامج يطلب من المستخدم إدخال نصّين, بعدها يقوم بطباعة ما إن كان النص الأول يبدأ بالنص الثاني أم لا
*/

function CheckFirstText($value,$find){
    if($find == substr($value,0,strlen($find))){
        echo 'Text 1 is start with '."'$find'";
    }
    else{
        echo 'Text 1 is not start with '."'$find'";
    }
}
CheckFirstText('Welcome to my world','Welcome');
echo PHP_EOL;
echo '################################################################';
echo PHP_EOL;


