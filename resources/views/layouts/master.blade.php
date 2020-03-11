<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/css/header.css">
    @yield('css')
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
    <title> Financiera @yield('title')</title>
  </head>
  <body>
    <header>

    </header>
    <main>
      @yield('main')
    </main>
    <footer>
      <div class="bg-cont">
        <div class="izq">
          <div class="redes">
            <h3>Redes Sociales</h3>
            <ul>
              <a href="https://www.instagram.com" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
              <a href="https://www.twitter.com" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
              <a href="https://www.facebook.com" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
              <a href="https://www.youtube.com" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
            </ul>
          </div>
        </div>

        <div class="der">
          <h3>Dónde estamos:</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3496434793474!2d-58.38383774949727!3d-34.620603565802206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ed147873%3A0xa6a660992184c8be!2sUnnamed%20Road%2C%20C1103%20CABA!5e0!3m2!1ses-419!2sar!4v1569443551766!5m2!1ses-419!2sar" width="300" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>


      </div>
      <div class="copyright">
        <p> Financiera</p>
        <br>
        <p> Todos los derechos reservados.</p>
      </div>
    </footer>
    @yield ('scripts')

    <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
