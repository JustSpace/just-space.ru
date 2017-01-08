<?php
    $email = "Отсписавшийся email: " . $_POST["email"] . "\n";
    $file = fopen($_SERVER["DOCUMENT_ROOT"] . "/logs/unsubscribe.txt", "a+");
    fputs($file, $email);
    fclose($file);

    if(mail("info@just-space.ru","Just Space - Отписка от рассылки", $email)){
        //mail($_POST["email"],"Just Space", "Благодарим вас за оформиление заказа на нашем сайте, по указанному телефону с вами свяжется наш менеджер.");
        echo json_encode("OK");
    }
?>
