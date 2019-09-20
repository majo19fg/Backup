@extends('index')

@section('title', 'Convenios empresariales')

@section('meta-desc', 'Conoce todas las becas que la universidad tiene para ti.')

@section('content')
   <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/multi/images/banners/10.jpg">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">Convenios empresariales </h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="/">Inicio</a></li>
                <li><a href="#">Somos UANE</a></li>
                <li class="active text-gray-silver">Convenios empresariales </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0"></h6>
              <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">Convenios empresariales</h2>
              {{-- <h4 class="text-theme-colored">Lorem ipsum dolor sit amet soluta saepe odit error, maxime praesentium sunt udiandae!</h4> --}}
              <p align="justify">En la Universidad Autónoma del Noreste creamos vínculos con las empresas comprometidas con el desarrollo de sus empleados. A través de nuestros convenios empresariales, brindamos becas a diversas organizaciones importantes desde nivel estatal hasta nivel internacional para beneficio de sus empleados y de sus familiares directos como cónyuges e hijos, quienes pueden formarse con estudios de bachillerato, carreras profesionales o postgrados.</p>
              <p>Te invitamos a participar y conocer nuestros convenios para que inicies tus estudios en nuestras dos modalidades: Presencial y 100% en Línea, en cualquiera de nuestros 8 campus en el país.</p>
            </div>
            <div class="col-md-6">
              <div class="video-popup">                
                  <img alt="" src="/multi/images/convenios.jpg" class="img-responsive img-fullwidth">
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    
    @include('partial.datos')

@endsection