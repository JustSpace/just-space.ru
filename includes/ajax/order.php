<?php
    $name = "ФИО заказчика: " . $_POST["fio"] . "\n";
    $telephone = "Контактный телефон: " . $_POST["tel"] . "\n";
    $email = "Контактный email: " . $_POST["email"] . "\n";
    $description = "Описание задачи: " . $_POST["description"] . "\n";
    $separator = "------------------------------------------------------------------\n";
    $file = fopen("../../logs/orders.txt", "a+");
    fputs($file, $name);
    fputs($file, $telephone);
    fputs($file, $email);
    fputs($file, $description);
    fputs($file, $separator);

    if(mail("info@just-space.ru","Just Space - Заказ", $name . $telephone . $email . $description)){
        mail($_POST["email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
        echo json_encode("OK");
    }
?>
