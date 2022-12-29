<?php use \App\Http\Controllers\TituloController; ?>
<?php $titulos = (array) TituloController::select();
?>

<!-- SECTION ONE -->
<section class="container my-5" id="section-one">
  <div class="col-12">
     <h2 class="center mt-0">Destaques</h2>
 </div>
 <div class="row px-lg-5 px-4 mt-lg-5 mt-3">
  <div class="col-lg-6 px-lg-4">
     <h1 class="search-text" id="{{$titulos[0]['id']}}">{{$titulos[0]['titulo']}}</h1>
     <p class="my-2">Segundo Sindicato Nacional dos Aeronautas, cerca de 70% dos trabalhadores aprovaram a nova proposta de convenção coletiva. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

     <a class="blue" href="#">Leia Mais</a>
 </div>
 <div class="col-lg-6 mt-lg-0 mt-3 px-lg-4">
     <div class="row mt-lg-0 mt-2">
        <div class="col-12">
          <h1 class="search-text mb-2" id="{{$titulos[1]['id']}}">{{$titulos[1]['titulo']}}</h1>
          <a class="blue" href="#">Leia Mais</a>
      </div>
      <div class="col-12 mt-3">
          <h1 class="search-text mb-2"  id="{{$titulos[2]['id']}}">{{$titulos[2]['titulo']}}</h1>
          <a class="blue" href="#">Leia Mais</a>
      </div>
  </div>
</div>
</div>
</section>

<!-- SECTION TWO -->
<section class="section-two container-fluid mt-lg-5 mt-4" id="section-two">
    <div class="parallax py-5 px-lg-5">
        <div class="col-12 d-lg-flex px-lg-5 mt-lg-5 mt-0">
            <div class="col-lg-6 col-12">
                <h1 class="search-text white" id="{{$titulos[3]['id']}}">{{$titulos[3]['titulo']}}</h1>
                <p class="white mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="white mt-3">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="card mt-lg-0 mt-4 one">
                            <h5 class="search-text white" id="{{$titulos[4]['id']}}">{{$titulos[4]['titulo']}}</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card mt-lg-0 mt-3 two">
                            <h5 class="search-text white" id="{{$titulos[5]['id']}}">{{$titulos[5]['titulo']}}</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card mt-3 three">
                            <h5 class="search-text white" id="{{$titulos[6]['id']}}">{{$titulos[6]['titulo']}}</h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card mt-3 four">
                            <h5 class="search-text white" id="{{$titulos[7]['id']}}">{{$titulos[7]['titulo']}}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts/cards')
