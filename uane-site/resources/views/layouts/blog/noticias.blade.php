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

            <div class="col-md-6">
              <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/multi/images/blog/Licenciatura/PHOTOCINEMA-6284.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                  {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                  </div> --}}
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="{{ route('blog.InicioClases') }}">Bienvenidos Alumnos UANE Piedras Negras</a></h5>
                  <p class="text-left mb-20 mt-15 font-13">¡Alumnos de las diferentes licenciaturas del Campus Piedras Negras inician clases!</p>
                  <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.InicioClasesLic') }}">Leer más</a>
                  <ul class="list-inline entry-date pull-right font-12 mt-5">
                    <li><span class="text-theme-colored">Ago 19, 2019</span></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </article>
          </div>
            <div class="col-md-6">
              <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="/multi/images/blog/PrepaUANE/PHOTOCINEMA-0066.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                  {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                  <div class="display-table">
                    <div class="display-table-cell">
                      <ul>
                        <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                        <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                      </ul>
                    </div>
                  </div>
                  </div> --}}
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="{{ route('blog.InicioClases') }}">Bienvenida Prepa UANE Piedras Negras</a></h5>
                  <p class="text-left mb-20 mt-15 font-13">¡Los alumnos de preparatoria del Campus Piedras Negras inician clases!</p>
                  <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.InicioClases') }}">Leer más</a>
                  <ul class="list-inline entry-date pull-right font-12 mt-5">
                    <li><span class="text-theme-colored">Ago 20, 2019</span></li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </article>
          </div>
            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/noticias/diplomado-titulacion.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                    {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div> --}}
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="{{ route('blog.titulacion') }}">¿Sabías que en UANE...</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Próximamente te graduarás y seguramente estás considerando cada una de las alternativas para titularte...</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.titulacion') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">Jun 20, 2019</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>

            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/noticias/cv.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                    {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div> --}}
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Tips para mejorar tu Currículum</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">El Currículum Vitae es el primer contacto que tendrá una empresa contigo, por eso es importante...</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.cv') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">Mar 29, 2019</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/noticias/interuane.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                    <!-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div>-->
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">InterUANE 2019</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">UANE campus Saltillo abrió sus puertas para celebrar el ya tradicional InterUANE en su edición 2019,</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.interuane') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">Mar 28, 2019</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>
          </div>
            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/comunicados-del-rector.gif" alt="" class="img-responsive img-fullwidth"> </div>
                    {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div> --}}
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: Analogía del oso</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">"En sus inicios la universidad escogió al oso como mascota de la institución, por sus diversas características y atributos tan particulares.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left" href="{{ route('blog.rector1') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">Ago 9, 2018</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>

            <div class="col-md-6">
                <article class="post clearfix maxwidth600 mb-30 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="/multi/images/comunicados-del-rector.gif" alt="" class="img-responsive img-fullwidth"> </div>
                    {{-- <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                    <div class="display-table">
                      <div class="display-table-cell">
                        <ul>
                          <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                          <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                        </ul>
                      </div>
                    </div>
                    </div> --}}
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Mensaje del rector: "Una experiencia que transforma"</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">"El Hoy es ahora, me siento muy agradecido y sumamente honrado de formar parte de esta casa de estudios como Rector de UANE.</p>
                    <a class="btn btn-flat btn-dark btn-theme-colored btn-sm pull-left"  href="{{ route('blog.rector2') }}">Leer más</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><span class="text-theme-colored">May 13, 2018</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
            </div>

            
          </div>
        </div>
      </div>
    </section>

@endsection