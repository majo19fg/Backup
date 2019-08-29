@extends('index-admin')

@section('content')
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Dashboard</a>
        <a class="breadcrumb-item" href="#">Convenios</a>
        <span class="breadcrumb-item active">Guardar convenio</span>
    </nav>
</div>
<!-- br-pageheader -->

<div class="br-pagetitle">
    <i class="icon icon ion-ios-bookmarks-outline"></i>
    <div>
        <h4>Convenios empresariales</h4>
        <p class="mg-b-0">Llena cada uno de los campos para guardar un convenio empresarial en el sistema.</p>
    </div>
</div>
<!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="row mg-t-10">
            <div class="col-xl-10 offset-1">
                <form action="{{ route('convenios.actualizar', $convenio) }}" method="post" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="form-layout form-layout-4">

                        @if (session()->has('success'))

                        <div class="alert alert-success alert-bordered" role="alert">

                            <div class="d-sm-flex align-items-center justify-content-start">
                                <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                                <div class="mg-t-20 mg-sm-t-0">
                                    <h5 class="mg-b-2 tx-success">Convenio actualizado exitosamente.</h5>
                                    <p class="mg-b-0 tx-gray">¡El convenio se ha actualizado exitosamente!</p>
                                </div>
                            </div>
                            <!-- d-flex -->
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-bordered" role="alert">

                            <div class="d-sm-flex align-items-center justify-content-start">
                                <i class="icon ion-ios-close alert-icon tx-52 mg-r-20 tx-danger"></i>
                                <div class="mg-t-20 mg-sm-t-0">
                                    <h5 class="mg-b-2 tx-danger">¡Ups! Parece que algo salio mal.</h5>
                                    <ul style="list-style:none;" class="list-group">
                                        @foreach ($errors->all() as $error)

                                        <li>- {{ $error }}</li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- d-flex -->
                        </div>
                        @endif

                        {{-- Campus --}}
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Campus: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2" name="campus"
                                    data-placeholder="Selecciona un campus">
                                    <option label="Selecciona un campus"></option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Saltillo' ? 'selected' : '' }}
                                        value="Campus Saltillo">Campus Saltillo</option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Torreón' ? 'selected' : '' }}
                                        value="Campus Torreón">Campus Torreón</option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Monclova' ? 'selected' : '' }}
                                        value="Campus Monclova">Campus Monclova</option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Sabinas' ? 'selected' : '' }}
                                        value="Campus Sabinas">Campus Sabinas</option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Piedras Negras' ? 'selected' : '' }}
                                        value="Campus Piedras Negras">Campus Piedras Negras</option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Monterrey' ? 'selected' : '' }}
                                        value="Campus Monterrey">Campus Monterrey</option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Reynosa' ? 'selected' : '' }}
                                        value="Campus Reynosa">Campus Reynosa</option>
                                    <option {{ old('campus', $convenio->campus) == 'Campus Matamoros' ? 'selected' : '' }}
                                        value="Campus Matamoros">Campus Matamoros</option>
                                    <option {{ old('campus', $convenio->campus) == 'Rectoría' ? 'selected' : '' }} value="Rectoría">
                                        Rectoría</option>
                                </select>
                            </div>
                        </div>



                        <div class="row mg-t-30">
                            <label class="col-sm-4 br-section-label">Datos de la organización
                                <hr>
                            </label>
                        </div>
                        {{-- Nombre empresa --}}
                        <div class="row mg-t-10">
                            <label class="col-sm-4 form-control-label">Nombre de la Empresa/Negocio <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('empresa', $convenio->empresa) }}" name="empresa" class="form-control"
                                    placeholder="">
                            </div>
                        </div>
                        {{-- Giro --}}
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Giro con 5 opciones</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <select class="form-control select2 " name="giro_empresa"
                                    data-placeholder="Choose Browser">
                                    <option {{ old('giro_empresa', $convenio->giro_empresa) == 'Industrial' ? 'selected' : '' }}
                                        value="Industrial">Industrial</option>
                                    <option {{ old('giro_empresa', $convenio->giro_empresa) == 'Servicios' ? 'selected' : '' }}
                                        value="Servicios">Servicios</option>
                                    <option {{ old('giro_empresa', $convenio->giro_empresa) == 'Comercial' ? 'selected' : '' }}
                                        value="Comercial">Comercial</option>
                                    <option {{ old('giro_empresa', $convenio->giro_empresa) == 'No Gubernamental' ? 'selected' : '' }}
                                        value="No Gubernamental">No Gubernamental</option>
                                    <option {{ old('giro_empresa', $convenio->giro_empresa) == 'Sin fines de Lucro' ? 'selected' : '' }}
                                        value="Sin fines de Lucro">Sin fines de Lucro</option>
                                </select>
                            </div>
                        </div>
                        {{-- Dirección --}}
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Dirección <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('direccion_empresa', $convenio->direccion_empresa) }}" name="direccion_empresa"
                                    class="form-control" placeholder="">
                            </div>
                        </div>
                        {{-- Nombre del representante legal --}}
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Nombre del representante legal <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('nombre_representante_legal', $convenio->nombre_representante_legal) }}"
                                    name="nombre_representante_legal" class="form-control" placeholder="">
                            </div>
                        </div>
                        {{-- Nombre del contacto --}}
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Nombre del contacto <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('nombre_contacto', $convenio->nombre_contacto) }}" name="nombre_contacto"
                                    class="form-control" placeholder="">
                            </div>
                        </div>

                        {{-- Teléfono del contacto --}}
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Teléfono de Contacto <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('telefono_contacto', $convenio->telefono_contacto) }}" name="telefono_contacto"
                                    class="form-control" placeholder="">
                            </div>
                        </div>

                        {{-- Correo del contacto --}}
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Correo de Contacto <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="{{ old('correo_contacto', $convenio->correo_contacto) }}" name="correo_contacto"
                                    class="form-control" placeholder="">
                            </div>
                        </div>

                        {{-- Fecha de Inicio --}}
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Fecha de inicio <span
                                    class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="fecha_inicio" value="{{ old('fecha_inicio', $convenio->fecha_inicio->format('m/d/Y')) }}" class="form-control fc-datepicker"
                                        placeholder="dd/mm/yyyy" readonly="readonly">
                                </div><!-- input-group -->
                            </div>


                        </div>

                        <div class="row mg-t-30">
                            <label class="col-sm-4 br-section-label">Datos del convenio
                                <hr>
                            </label>
                        </div>



                        <div class="row mg-t-30">
                            <label class="col-sm-4 form-control-label">Convenio para:</label>
                        </div>

                        <div class="row mg-t-10">

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_beca_convenio" {{ old('convenio_para_beca_convenio', $convenio->convenio_para_beca_convenio) == 'Beca convenio' ? 'checked' : '' }} value="Beca convenio"
                                        type="checkbox"><span>Beca convenio</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_practicas" {{ old('convenio_para_practicas', $convenio->convenio_para_practicas) == 'Prácticas' ? 'checked' : '' }} value="Prácticas"
                                        type="checkbox"><span>Prácticas</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_servicio_social" {{ old('convenio_para_servicio_social', $convenio->convenio_para_servicio_social) == 'Servicio social' ? 'checked' : '' }} value="Servicio social"
                                        type="checkbox"><span>Servicio social</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="convenio_para_servicio_otro" {{ old('convenio_para_servicio_otro', $convenio->convenio_para_servicio_otro) == 'Otro' ? 'checked' : '' }} value="Otro" type="checkbox"
                                        id="check_otro"><span>Otro</span>
                                </label>
                            </div>
                        </div>

                        <div class="row" id="otro_check">
                            <div class="col-lg-12">
                                <label class="col-sm-4 form-control-label mg-t-10"></label>
                                <textarea rows="3" class="form-control" placeholder="Especificar otro:" name="convenio_otro_especificar">{{ old('convenio_otro_especificar', $convenio->convenio_otro_especificar) }}</textarea>  
                            </div>
                        </div>




                        <div class="row mg-t-70">
                            <label class="col-sm-4 form-control-label">% beca presencial:</label>
                        </div>

                        <div class="row mg-t-10">

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="col-sm-4 form-control-label">Bachillerato <span
                                        class="tx-danger"></span></label>
                                <select class="form-control select2 col-lg-12" name="beca_para_bach"
                                    data-placeholder="N/A">
                                    <option value="N/A" selected>N/A</option>
                                    @for ($i = 0; $i < 101; $i++) <option {{ old('beca_para_bach', $convenio->beca_para_bach) == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}% de beca</option>
                                        @endfor

                                </select>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="col-sm-4 form-control-label">Licenciatura/Ingenieria <span
                                        class="tx-danger"></span></label>
                                <select class="form-control select2 col-lg-12" name="beca_para_lic"
                                    data-placeholder="N/A">
                                    <option value="N/A" selected>N/A</option>
                                    @for ($i = 0; $i < 101; $i++) <option {{ old('beca_para_lic', $convenio->beca_para_lic) == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}% de beca</option>
                                        @endfor

                                </select>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="col-sm-4 form-control-label">Postgrado <span
                                        class="tx-danger"></span></label>
                                <select class="form-control select2 col-lg-12" name="beca_para_post"
                                    data-placeholder="N/A">
                                    <option value="N/A" selected>N/A</option>
                                    @for ($i = 0; $i < 101; $i++) <option {{ old('beca_para_post', $convenio->beca_para_post) == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}% de beca</option>
                                        @endfor

                                </select>
                            </div>
                        </div>


                        <div class="row mg-t-70">
                            <label class="col-sm-4 form-control-label">% beca en línea:</label>
                        </div>

                        <div class="row mg-t-10">

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="col-sm-4 form-control-label">Bachillerato <span
                                        class="tx-danger"></span></label>
                                <select class="form-control select2 col-lg-12" name="beca_para_bach_linea"
                                    data-placeholder="N/A">
                                    <option value="N/A" selected>N/A</option>
                                    @for ($i = 0; $i < 21; $i++) <option {{ old('beca_para_bach_linea', $convenio->beca_para_bach_linea) == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}% de beca</option>
                                        @endfor

                                </select>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="col-sm-4 form-control-label">Licenciatura/Ingenieria <span
                                        class="tx-danger"></span></label>
                                <select class="form-control select2 col-lg-12" name="beca_para_lic_linea"
                                    data-placeholder="N/A">
                                    <option value="N/A" selected>N/A</option>
                                    @for ($i = 0; $i < 21; $i++) <option {{ old('beca_para_lic_linea', $convenio->beca_para_lic_linea) == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}% de beca</option>
                                        @endfor

                                </select>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="col-sm-4 form-control-label">Postgrado <span
                                        class="tx-danger"></span></label>
                                <select class="form-control select2 col-lg-12" name="beca_para_post_linea"
                                    data-placeholder="N/A">
                                    <option value="N/A" selected>N/A</option>
                                    @for ($i = 0; $i < 21; $i++) <option {{ old('beca_para_post_linea', $convenio->beca_para_post_linea) == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}% de beca</option>
                                        @endfor

                                </select>
                            </div>
                        </div>


                        <div class="row mg-t-30">
                            <label class="col-sm-4 form-control-label">Alcance del convenio:</label>
                        </div>

                        <div class="row mg-t-10">

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="alcance_Municipal" {{ old('alcance_Municipal', $convenio->alcance_Municipal) == 'Municipal' ? 'checked' : '' }} value="Municipal"
                                        type="checkbox"><span>Municipal</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="alcance_Estatal" {{ old('alcance_Estatal', $convenio->alcance_Estatal) == 'Estatal' ? 'checked' : '' }} value="Estatal" type="checkbox"><span>Estatal</span>
                                </label>
                            </div>

                            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                <label class="ckbox">
                                    <input name="alcance_Nacional" {{ old('alcance_Nacional', $convenio->alcance_Nacional) == 'Nacional' ? 'checked' : '' }} value="Nacional"
                                        type="checkbox"><span>Nacional</span>
                                </label>
                            </div>
                        </div>


                        <div class="row" id="otro_check">
                            <div class="col-lg-12">
                                <label class="col-sm-4 form-control-label mg-t-10">Observaciones</label>
                                <textarea rows="3" class="form-control" placeholder="" name="alcance_observaciones">{{ old('alcance_observaciones', $convenio->alcance_observaciones) }}</textarea>  
                            </div>
                        </div>



                        {{-- <div class="row mg-t-20">
                            <div class=" col-md-12 ht-200 bg-gray-200 d-flex align-items-center justify-content-center">
                                <input type="file" id="file-1" class="inputfile" name="documento"
                                    data-multiple-caption="{count} files selected"
                                    accept="application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf">
                                <label for="file-1" class="tx-white bg-info">
                                    <i class="icon ion-ios-upload-outline tx-24"></i>
                                    <span>Sube un documento DOCX o PDF</span>
                                </label>
                            </div><!-- ht-200 -->
                        </div> --}}

                        <div class="form-layout-footer mg-t-30">
                            <button class="btn btn-info">actualizar convenio</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->

                </form>
            </div><!-- col-6 -->
        </div><!-- row -->
    </div>
</div>
@endsection

@push('css')
<link href="/admin/lib/select2/css/select2.min.css" rel="stylesheet">

@endpush

@push('js')



<script>
    $(function(){
      
        'use strict';
    
        $( '.inputfile' ).each( function()
        {
        var $input	 = $( this ),
            $label	 = $input.next( 'label' ),
            labelVal = $label.html();
    
        $input.on( 'change', function( e )
        {
            var fileName = '';
    
            if( this.files && this.files.length > 1 )
            fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
            fileName = e.target.value.split( '\\' ).pop();
    
            if( fileName )
            $label.find( 'span' ).html( fileName );
            else
            $label.html( labelVal );
        });
    
        // Firefox bug fix
        $input
        .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
        .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
        });
    
    });

    $('.fc-datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true,
        changeYear: true,
        changeMonth: true,
        dropdownCssClass: 'hover-success',
        monthNamesShort: ['Enero','Febrero','Marzo','Abril','Mayo','Junio', 'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        dayNamesMin: ['Do.','Lu.','Ma.','Mi.','Ju.','Vi.','Sa.'],
        yearRange: '-60: +1', 
        // dateFormat: 'dd/mm/yy'
    });


    if ($('#check_otro').is(':checked')) {
        $('#otro_check').show();
    }else{
        $('#otro_check').hide();
    }
    

    $("#check_otro").click(function(){
        if ($(this).is(':checked')) {
            $('#otro_check').fadeIn();
        }else{
            $('#otro_check').fadeOut();
        }
    })

    


      
</script>


@endpush