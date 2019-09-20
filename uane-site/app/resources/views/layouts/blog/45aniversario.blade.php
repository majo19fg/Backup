@extends('index')

@section('content')
	<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/10.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Noticias y comunicados</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li class="active text-gray-silver">Noticias y comunicados</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: News & Blog -->
    <section id="news">
      <div class="container">
        <div class="section-content">
                <div class="row">
                        <div class="col-md-12">
                          <h2 class="text-uppercase text-theme-colored font line-bottom line-height-1 mt-0 mb-0">Tipos de <span class="text-theme-color-2 font-weight-400">programas</span></h2>
                        </div>
                      </div>
                    </div>
                    <div class="row mtli-row-clearfix">
                      <div class="col-xs-12 col-sm-8 col-md-4">
                        <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
                          <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" href="{{ route('programas.bach') }}">
                            <i class="fas fa-book-reader"></i>
                          </a>
                          <div class="icon-box-details">
                            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5"align="justify">Bachillerato</h4>
                            <p class="text-gray font-13 mb-0" align="justify">Contamos con 2 bachilleratos: BACH y BMB</p>
                          </div>
                        </div>    
                      </div>
                      <div class="col-xs-12 col-sm-8 col-md-4">
                        <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
                          <a class="icon icon-dark border-left-theme-color-2-3px pull-left flip mb-0 mr-0 mt-5" href="{{ route('programas.lic') }}">
                            <i class="fas fa-user-friends"></i>
                          </a>
                          <div class="icon-box-details">
                            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-5" align="justify">Licenciatura</h4>
                            <p class="text-gray font-13 mb-0" align="justify">Contamos con más de 20 Licenciaturas Presenciales y en Línea</p>
                          </div>
                        </div>    
                      </div>
                    </div>
        </div>
      </div>
    </section>

@endsection