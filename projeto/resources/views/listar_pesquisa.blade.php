<div class="search-result" id="box">
    <div class="suggestions" id="suggestions">

    </div>
    <div class="hr"></div>
    <div class="historic" id="historic">
        @foreach ($historicos as $historico)
        <h5 onclick="redirect_historic({{$historico->id_titulo}})"><i class="clock outline icon"></i>{{$historico->texto}}</h5>
        @endforeach
    </div>
</div>
