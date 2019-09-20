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
                          <h2 class="text-uppercase text-theme-colored font line-bottom line-height-1 mt-0 mb-0">45 <span class="text-theme-color-2 font-weight-400">Aniversario</span></h2>
                        </div>
                      </div>
                    </div>
                    <div class="row mtli-row-clearfix">
                      <div class="col-xs-12 col-md-6">
                         <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
                          <a class="gallery" href="{{ route('programas.lic') }}">
                              <img src="{{ asset('/multi/images/1.jpg') }}" class="img-responsive center-block"/>
                          </a>
                            <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-9" align="middle">Licenciatura</h4>
                            <p class="text-gray font-13 mb-0" align="middle">Contamos con más de 20 Licenciaturas Presenciales y en Línea</p>
                        </div>    
                      </div>
                      <div class="col-xs-12 col-md-6">
                          <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
                           <a class="gallery" href="{{ route('programas.lic') }}">
                               <img src="{{ asset('/multi/images/1.jpg') }}" class="img-responsive center-block"/>
                           </a>
                             <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-9" align="middle">Licenciatura</h4>
                             <p class="text-gray font-13 mb-0" align="middle">Contamos con más de 20 Licenciaturas Presenciales y en Línea</p>
                         </div>    
                       </div>
                       <div class="col-xs-12 col-md-6">
                          <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
                           <a class="gallery" href="{{ route('programas.lic') }}">
                               <img src="{{ asset('/multi/images/1.jpg') }}" class="img-responsive center-block"/>
                           </a>
                             <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-9" align="middle">Licenciatura</h4>
                             <p class="text-gray font-13 mb-0" align="middle">Contamos con más de 20 Licenciaturas Presenciales y en Línea</p>
                         </div>    
                       </div>
                       <div class="col-xs-12 col-md-6">
                          <div class="icon-box iconbox-theme-colored bg-white p-15 mb-30 border-1px">
                           <a class="gallery" href="{{ route('programas.lic') }}">
                               <img src="{{ asset('/multi/images/1.jpg') }}" class="img-responsive center-block"/>
                           </a>
                             <h4 class="icon-box-title font-16 font-weight-600 m-0 mb-9" align="middle">Licenciatura</h4>
                             <p class="text-gray font-13 mb-0" align="middle">Contamos con más de 20 Licenciaturas Presenciales y en Línea</p>
                         </div>    
                       </div>
                    </div>
        </div>
      </div>
    </section>

@endsection