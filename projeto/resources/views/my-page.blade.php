<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta lang="pt-br">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <meta name="viewport" content="width=500, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap-grid.css')?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/components/icon.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/menu.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/header.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/card.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/footer.css')?>" type="text/css">
    <title>RealNews</title>
</head>
<body>

    <!-- MENU -->
    @include('layouts/menu')

<header class="container-fluid header px-0">
    <div class="container d-lg-flex px-5">
        <div class="col-lg-6 col-12">
        <h1 class="white">Se mantenha por dentro das notícias do Brasil e do Mundo com a RealNews</h1>
        <p class="white mt-2">Acompanhe as últimas notícias agora mesmo!</p>
    </div>
    <div class="col-lg-6 col-12 mt-lg-5 mt-0">
        <img class="mt-lg-5 mt-0" src="{{ asset('images/phone.png') }}">
    </div>
    </div>
</header>

<!-- SECTION ONE, TWO, THREE, FOUR, FIVE -->
@include('noticias')


<!-- Footer -->
@include('layouts/footer')

<script src="<?php echo asset('js/jquery-3.4.1.min.js')?>"></script>
<script src="<?php echo asset('js/menu.js')?>"></script>
<script src="<?php echo asset('js/search.js')?>"></script>

</body>
</html>
