<?php

if(isset($_POST["enviar"])){
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["asunto"]) && !empty($_POST["tel"]) && !empty($_POST["msg"]) && !empty($_POST["file"])){
        $destino = "s4merza@gmail.com";
        $texto = $_POST["name"] . "\r\n" . $_POST["email"] . "\r\n" . $_POST["tel"];
        $content = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
        $filename = $_FILES['file']['name'];
        $eol = PHP_EOL;
        $texto .= $eol;
        $texto .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
        $texto .= "Content-Transfer-Encoding: base64" . $eol;
        $texto .= "Content-Disposition: attachment" . $eol;
        $texto .= $content . $eol;
        $asunto ="Curriculum";
        $file =$_POST["file"];
        $header = "From: sumate upbpo" . "\r\n";
        $header = "reply-To: sumate upbpo" . "\r\n";
        $header ="X-Mailer: PHP/" . phpversion();
        $mail = @mail($destino,$asunto,$texto,$header);
        if($mail){
            echo "<h4> Enviado Exitosamente </h4>";
        }
    }
}
?>