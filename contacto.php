<?php

if(isset($_POST["enviar"])){
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["asunto"]) && !empty($_POST["tel"]) && !empty($_POST["msg"])){
        $destino = "contacto@upbpo.com";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $asunto =$_POST["asunto"];
        $telefono =$_POST["tel"];
        $header = "From: sumate upbpo" . "\r\n";
        $header = "reply-To: sumate upbpo" . "\r\n";
        $header ="X-Mailer: PHP/" . phpversion();
        $mail = @mail($destino,$email,$asunto,$msg,$tel,$header);
        if($mail){
            echo "<h4> Enviado Exitosamente </h4>"
        }
    }
}
?>