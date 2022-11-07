<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TESLA_SAMPLE</title>

    <style>
      .scroll-container {
        height: 100vh;
        overflow-y: scroll;
        scroll-snap-type: y mandatory;
      }

      .section {
        height: 100vh;
        scroll-snap-align: start;
        scroll-snap-stop: always;
      }

      .section {
        object-fit: cover;
        object-position: center;
        width: 100%;
      }

      body {
        margin: 0;
      }
    </style>
  </head>
  <body class="antialiased">
    <div class="scroll-container">
      <img class="section" src="https://tesla-cdn.thron.com/delivery/public/image/tesla/03e533bf-8b1d-463f-9813-9a597aafb280/bvlatuR/std/4096x2560/M3-Homepage-Desktop-LHD">
      <img class="section" src="https://tesla-cdn.thron.com/delivery/public/image/tesla/8e2df1b9-a4bf-4eb9-beec-2cf5cc77fca0/bvlatuR/std/2880x2400/Desktop-ModelY?quality=70">
      <img class="section" src="https://tesla-cdn.thron.com/delivery/public/image/tesla/ddc135ed-1638-40fb-8ab1-f8045059ecef/bvlatuR/std/4096x2560/Homepage-Model-X-Desktop-LHD">
      <img class="section" src="https://tesla-cdn.thron.com/delivery/public/image/tesla/16b04537-a4be-4bf9-8637-86862a858da8/bvlatuR/std/2880x1800/_25-HP-SolarPanels-D">
      <img class="section" src="https://tesla-cdn.thron.com/delivery/public/image/tesla/c877126e-0db5-409d-a412-04fc94b59b76/bvlatuR/std/2880x1800/HP-SR-Design-D">
    </div>
  </body>
</html>
