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
        </div class="size">
            <section class="title-cont zoom10"> 
                <div class="grid2fr">
                        <article>
                            <img src="media/contactanos.jpg" alt="img" class="contactoimg">
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
                                <input type="submit" name="enviar">
                        </form>
                            </article>  
                        </article>   
                        <article>
                            <article>
                                <h2 class="titilar" style="color: #6400eb;">Donde Estamos</h2>
                            </article>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.1025187004934!2d-64.19377488427607!3d-31.411301403150215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9432987efd5271f5%3A0x1fdbfa24776b3d66!2sAv.%20Figueroa%20Alcorta%20185%2C%20X5000%20KFB%2C%20C%C3%B3rdoba!5e0!3m2!1ses-419!2sar!4v1627863191542!5m2!1ses-419!2sar" width="516" height="740" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </article>
                </div>

            </section>
            <section class="grid3fr zoom10">
                <article>
                    <svg xmlns="http://www.w3.org/2000/svg" class="iconcontact" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                      </svg>
                      <article  class="a-contact">
                        <a href="tel:
                        +549351 5704400
                        ">
                        +549351-5704400
                        </a>
                    </article>
                </article>
                <article>
                    <svg xmlns="http://www.w3.org/2000/svg" class="iconcontact" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <rect x="3" y="5" width="18" height="14" rx="2" />
                        <polyline points="3 7 12 13 21 7" />
                      </svg>
                      <article  class="a-contact">
                        <a href="mailto:contacto@upbpo.com">contacto@upbpo.com</a>
                    </article>
                </article>
                <article>
                    <svg xmlns="http://www.w3.org/2000/svg" class="iconcontact" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="18" y1="6" x2="18" y2="6.01" />
                        <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                        <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                        <line x1="9" y1="4" x2="9" y2="17" />
                        <line x1="15" y1="15" x2="15" y2="20" />
                      </svg>
                      <article  class="a-contact">
                        <a href="#">Av. Figueroa Alcorta 185 5to Piso</a>
                    </article>
                </article>
            </section>
    </main>
<?php
    include("contacto.php");
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