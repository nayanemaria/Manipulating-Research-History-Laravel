<div class="nav-wrapper container-fluid px-0">
      <nav class="navbar py-3 px-lg-5">
         <h1 class="logo px-lg-4 px-3">RealNews</h1>
         <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav no-search px-lg-3">
            <li class="nav-item mt-lg-2 mt-4"><a href="#section-one">Destaques</a></li>
            <li class="nav-item mt-lg-2 mt-1"><a href="#section-two">Tecnologia</a></li>
            <li class="nav-item mt-lg-2 mt-1"><a href="#section-three">Filmes & Séries</a></li>
            <li class="nav-item mt-lg-2 mt-1"><a href="#section-four">Música</a></li>
            <li class="nav-item mt-lg-2 mt-1"><a href="#section-five">Esporte</a></li>
            <li class="nav-item">
              <div class="search-form">
                @include('/inserir_pesquisa')
              </div>
                @include('/listar_pesquisa')
          </li>
      </ul>
  </nav>
</div>
