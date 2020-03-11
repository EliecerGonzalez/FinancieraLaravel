@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/home.css">
@endsection

@section('main')
  <body>

    <div class="container">
      <div class="banner-img">
        <script type="text/javascript">
          var bannersnack_embed = {"hash":"b1u36pkz2","width":970,"height":250,"t":1583624784,"userId":40711500,"type":"html5"};
        </script>
        <script type="text/javascript" src="//cdn.bannersnack.com/iframe/embed.js"></script>
      </div>

      <div class="articulos">
        <div class="moto">
          <img src="../../moto1.jpeg" alt="">
          <h2>Motos</h2>
        </div>

        <div class="efectivo">
          <img src="moto2.jpeg" alt="">
          <h2>Efectivo</h2>
        </div>

        <div class="equipo">
          <img src="../../gas.jpeg" alt="">
          <h2>Equipo de gas</h2>
        </div>

      </div>

      <div class="contacto">

        <h1 class="contactanos">Contactanos</h1>

          <div class="whatsapp">

            <a href="https://api.whatsapp.com/send?phone=5491166189733&amp;text=Hola%20Sigue%20disponible?%20" target="_blank" rel="noopener">
            <img src="../../wapsa.jpg"
            width="50px"
            height="50px"
            title="whatsapp">
            </a>

          </div>

          <div class="gmail">

            <a href="contacto">
            <img src="../../gmail.png"
            width="40px"
            height="40px">
          </a>

        </div>
      </div>
    </div>


  </body>

@endsection
