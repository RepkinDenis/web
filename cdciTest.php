<?php
function testButtonClick($buttonId, $expectedUrl) {
    $_GET[$buttonId] = 'click';
    ob_start();
    include 'index.php'; 
    $output = ob_get_clean();

    if (strpos($output, $expectedUrl) !== false) {
        echo "Тест пройден: страница $expectedUrl была загружена.";
    } else {
        echo "Тест не пройден: страница $expectedUrl не была загружена.";
    }
}


testButtonClick('tariff_header', 'php/tariff.php');
testButtonClick('registration_header', 'php/registration.php');
testButtonClick('comment_header', '/../comment/comment.php');
testButtonClick('qa_header', 'php/QA.php');
testButtonClick('singup_header', 'php/singup.php');
?>

