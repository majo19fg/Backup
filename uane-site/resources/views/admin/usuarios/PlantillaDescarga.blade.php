@extends('index-admin')
@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Plantilla de Diseños</a>
        <span class="breadcrumb-item active">Descargas</span>
    </nav>
</div><!-- br-pageheader -->
<div class="br-pagetitle">
        <i class="icon ion-ios-gear-outline"></i>
    <div>
        <h4>Archivos de Descarga </h4>
        <p class="mg-b-0"></p>
    </div>
</div><!-- d-flex -->


<section class="">
    <div class="container">
        <div class="section-content">
            <div class="row"> 
              <!--  <div class="col-md-12">
                  <br/>
                 <p align="justify"><b>Facebook.</b></p>
                </div>
                 <div class="col-md-3">
                  <div class="gallery">
                      <div><a href="{{ asset('/multi/pdf/RESULTADOS CURSOS JUNIO 2019.pdf') }}"><img src="{{ asset('/multi/images/campus/Experiencias laborales.jpg') }}"width="100px" height="100px"id=experiencias1 /></a>
                    </div>
                  </div>  
              </div>  
              <div class="col-md-3">
                      <div class="gallery">
                    <div align="center"><a href="{{ asset('/multi/pdf/INFORME POR DIMENSIONES.pdf') }}"><img src="{{ asset('/multi/images/campus/Informe de dimensiones.jpg') }}" width="100px" height="100px"id=informe1 /></a>
                    </div>
                  </div>
                </div>
            <div class="col-md-3">
                <div class="gallery">
                    <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS SALTILLO.pdf') }}" onMouseOver="cambiar();" onMouseOut="volver();"><img src="{{ asset('/multi/images/campus/uane-saltillo.jpg') }}" width="100px" height="100px"id=saltillo1 /></a> 
                  </div>
                </div>  
            </div>  
            <div class="col-md-3">
                    <div class="gallery">
                  <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS TORREON.pdf') }}"onMouseOver="cambiar3();" onMouseOut="volver3();"><img src="{{ asset('/multi/images/campus/uane-torreon.jpg') }}" width="100px" height="100px"id=torreon1 /></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                    <div class="gallery">
                      <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS SABINAS.pdf') }}"onMouseOver="cambiar5();" onMouseOut="volver5();"><img src="{{ asset('/multi/images/campus/uane-sabinas.jpg') }}" width="100px" height="100px"id=sabinas1 /></a>
                  </div>
                  </div>
                </div>     
                <div class="col-md-3"> 
                 <div class="gallery">
                          <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS PIEDRAS NEGRAS.pdf') }}"onMouseOver="cambiar6();" onMouseOut="volver6();"><img src="{{ asset('/multi/images/campus/uane-piedras-negras.jpg') }}" width="100px" height="100px"id=piedras1 /></a>
                    </div>   
                   </div>
                  </div> 
                  <div class="col-md-3">
                        <div class="gallery">
                      <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS MONTERREY.pdf') }}"onMouseOver="cambiar2();" onMouseOut="volver2();"><img src="{{ asset('/multi/images/campus/uane-monterrey.jpg') }}" width="100px" height="100px"id=monterrey1 /></a> 
                    </div>
                  </div> 
                </div>   
                <div class="col-md-3"> 
                      <div class="gallery">
                        <div><a href="{{ asset('/multi/pdf/INFORME CAMPUS REYNOSA.pdf') }}"onMouseOver="cambiar4();" onMouseOut="volver4();"><img src="{{ asset('/multi/images/campus/uane-reynosa.jpg') }}" width="100px" height="100px"id=reynosa1 /></a>
                  </div>   
                 </div>
                </div> -->
                <div class="col-md-12">
                    {{-- <p class="mb-10">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</p> --}}
                    <div id="accordion1" class="br-menu-item show-sub">
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span>+ Folletos</a> </div>
                        <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <table border="1" style=”width: 100%”>
                              <caption>Titulo de tabla</caption>
                              <colgroup>
                                <col style="width: 60%"/>
                                <col style="width: 20%"/>
                                <col style="width: 20%"/>
                                <col style="width: 20%"/>
                              </colgroup>
                              <thead>
                                <tr>
                                  <th rowspan="2">Nombre</th>
                                  <th rowspan="2">Fecha</th>
                                  <th rowspan="2">Tamaño</th>
                                  <th rowspan="2">Descarga</th>
                                </tr>
                              </thead>
                              <tfoot>
                              </tfoot>
                              <tbody>
                                <tr>
                                  <th>Folleto EAYL-2019.pdf</th>
                                  <td>30 de Mayo</td>
                                  <td>53.6 MB</td>
                                  <td><a href="{{ asset('/multi/images/Folletos/Folleto EAYL-2019.pdf') }}"><img src="{{ asset('/multi/images/download.png') }}" /></a></td>
                                </tr>
                                <tr>
                                  <th>Fila 2</th>
                                  <td>Fila 2 Columna 1</td>
                                  <td>Fila 2 Columna 2</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span>+ Promociones</a> </div>
                        <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span>+ Diplomas</a> </div>
                        <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <p>Vive la experiencia de ser campeón siendo parte en alguno de nuestros clubes deportivos o culturales los cuales han ganado torneos nacionales.</p>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span>+ Presentaciones</a> </div>
                        <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <p>Contamos con diferentes Carreras y maestrías en línea en las cuales podrás organizar tu tiempo para cursarlas y disfrutar los mejores momentos de tu vida.</p>
                          </div>
                        </div>
                      </div>
                      <div class="panel">
                        <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="" aria-expanded="true"> <span class="open-sub"></span>+ Video</a> </div>
                        <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                          <div class="panel-content">
                            <p>Contamos con diferentes Carreras y maestrías en línea en las cuales podrás organizar tu tiempo para cursarlas y disfrutar los mejores momentos de tu vida.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

        </div>
    </div>
    </div>
</section>
@endsection

@push('css')
<style>
    div.gallery {
      margin: 10px;
      border: 2px solid #ccc;
      float: left;
      width: 250px;
      height: 250px;
    }
    
    div.gallery img {
        width: 100%;
      height: auto;
    }
    
    </style>
@endpush
@push('js')
<script type="text/javascript">
 
    function cambiar () {
     document.getElementById('saltillo1').src = "{{ asset('/multi/images/campus/MASLW.png') }}";
    }
    
    function volver () {
     document.getElementById('saltillo1').src = "{{ asset('/multi/images/campus/uane-saltillo.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar2 () {
     document.getElementById('monterrey1').src = "{{ asset('/multi/images/campus/MAMTY.png') }}";
    }
    
    function volver2 () {
     document.getElementById('monterrey1').src = "{{ asset('/multi/images/campus/uane-monterrey.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar3 () {
     document.getElementById('torreon1').src = "{{ asset('/multi/images/campus/MATORREON.png') }}";
    }
    
    function volver3 () {
     document.getElementById('torreon1').src = "{{ asset('/multi/images/campus/uane-torreon.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar4 () {
     document.getElementById('reynosa1').src = "{{ asset('/multi/images/campus/MAREY.png') }}";
    }
    
    function volver4 () {
     document.getElementById('reynosa1').src = "{{ asset('/multi/images/campus/uane-reynosa.jpg') }}";
    }
    
   </script>
   <script type="text/javascript">
 
    function cambiar5 () {
     document.getElementById('sabinas1').src = "{{ asset('/multi/images/campus/MASABINAS.png') }}";
    }
    
    function volver5 () {
     document.getElementById('sabinas1').src = "{{ asset('/multi/images/campus/uane-sabinas.jpg') }}";
    }
    
   </script>
      <script type="text/javascript">
 
        function cambiar6 () {
         document.getElementById('piedras1').src = "{{ asset('/multi/images/campus/MAPIEDRAS.png') }}";
        }
        
        function volver6 () {
         document.getElementById('piedras1').src = "{{ asset('/multi/images/campus/uane-piedras-negras.jpg') }}";
        }
        
       </script>
          <script type="text/javascript">
 
            function cambiar7 () {
             document.getElementById('experiencias1').src = "{{ asset('/multi/images/campus/Experiencias laborales.jpg') }}";
            }
            
            function volver7 () {
             document.getElementById('experiencias1').src = "{{ asset('/multi/images/campus/OExperiencias.jpg') }}";
            }
            
           </script>
              <script type="text/javascript">
         
                function cambiar8 () {
                 document.getElementById('informe1').src = "{{ asset('/multi/images/campus/Informe de dimensiones.jpg') }}";
                }
                
                function volver8 () {
                 document.getElementById('informe1').src = "{{ asset('/multi/images/campus/OInforme.jpg') }}";
                }
                
               </script>
@endpush