<?php
    $name = "ФИО заказчика: " . $_POST["app-fio"] . "\n";
    $telephone = "Контактный телефон: " . $_POST["app-tel"] . "\n";
    $email = "Контактный email: " . $_POST["app-email"] . "\n";
    $description = "Описание задачи: " . $_POST["app-description"] . "\n";
    $separator = "------------------------------------------------------------------\n";
    $file = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/app-orders.txt", "a+");
    fputs($file, $name);
    fputs($file, $telephone);
    fputs($file, $email);
    fputs($file, $description);
    fputs($file, $separator);
    fclose($file);

    if(mail("info@just-space.ru","Just Space - Заказ", $name . $telephone . $email . $description)){
        mail($_POST["app-email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
        echo json_encode("OK");
    }
?>
