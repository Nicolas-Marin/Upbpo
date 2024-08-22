<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="media/Logomanos.png" type="image/x-icon">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Up</title>
</head>
<body>
        <header class="banner">
            <section class="space">
                <div>
                    <a href="index.html"><img src="media/Logomanos.png" alt="" class="icon"></a>
                </div>
                <div>
                    <img src="media/upbpo.png" alt="" class="logo">
                </div>
            </section>
        </header>
            <section class="navi-content">
                <nav>
                    <ul>
                        <li><a href="it.html">IT Consulting</a></li>
                        <li><a href="Contactcenter.html">Contact Center</a></li>
                        <li><a href="work.html">Wallet</a></li>
                        <li><a href="dev.html">Development & Branding</a></li>
                        <li><a href="business.html">Business Consulting</a></li>
                    </ul>
                </nav>
            </section>
    <main>
        <div class="navi-content2">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="quienes.html">Quienes Somos</a></li>
                <li><a href="sumate.php">Sumate</a></li>
                <li><a href="contactanos.php">Contáctanos</a></li>
        </div>
            <section class="grid3fr zoom10" style="margin-top: 10%;">
                <article class="titilar">
                    <h2>Trabaja en UP BPO</h2>
                </article>
                <article>
                    <p>
                        Porque sabemos que la elección de un nuevo trabajo es una decisión muy importante. <br><br>
                        Desde UP BPO te ofrecemos ser parte de una empresa que cuenta con tus mismos intereses, con capacitaciones constantes, y un entorno que te permita crecer profesionalmente. <br><br>
                        Sumate a nuestro staff!!! Compartinos tu CV.                        
                    </p>
                </article>
                <article>
                    <form action="" method="POST" class="trabaja">
                        <label for="">Tu Nombre</label>
                        <input type="text" name="name" required="">
                        <br><br>
                        <label for="">Correo Electrónico</label>
                        <input type="text" name="email" required="">
                        <br><br>
                        <label for="">Asunto</label>
                        <input type="text" name="asunto" required="">
                        <br><br>
                        <label for="">Teléfono</label>
                        <input type="number" name="tel" required="" id="">
                        <label for="">Tu mensaje (Opcional)</label>
                        <textarea name="msg" required="" id="" cols="30" rows="10"></textarea>
                        <input type="file" required="" name="file">
                        <input type="submit" name="enviar">
                    </form>
                </article>
            </section>
    </main>
<?php
    include("cvs.php");
?>
    
</body>
<footer class="footer">
    <section class="right">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="4" y="4" width="16" height="16" rx="2" />
            <line x1="8" y1="11" x2="8" y2="16" />
            <line x1="8" y1="8" x2="8" y2="8.01" />
            <line x1="12" y1="16" x2="12" y2="11" />
            <path d="M16 16v-3a2 2 0 0 0 -4 0" />
          </svg></a>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <rect x="4" y="4" width="16" height="16" rx="4" />
            <circle cx="12" cy="12" r="3" />
            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
          </svg></a>
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon-tabler" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
          </svg></a>
          <a class="copy" href="#">Up BPO Todos lo Derechos Reservados ©2021 </a>
    </section>
</footer>
</html>