<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Convenio</h1>
    <div class="row">
            <label class="col-sm-4 form-control-label">Campus: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="campus">{{ $convenios->campus }}</label>

            </div>
        </div>

        <div class="row mg-t-30">
            <label class="col-sm-4 br-section-label">Datos de la organización
                <hr>
            </label>
        </div>
        {{-- Nombre empresa --}}
        <div class="row mg-t-10">
            <label class="col-sm-4 form-control-label">Nombre de la Empresa/Negocio: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="empresa">{{ $convenios->nombre_empresa }}</label>
            </div>
        </div>
        {{-- Giro --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Giro con 5 opciones:</label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="giro">{{ $convenios->giro_empresa }}</label>
            </div>
        </div>
        {{-- Dirección --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Dirección: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="direccion">{{ $convenios->direccion_empresa }}</label>
            </div>
        </div>
        {{-- Nombre del representante legal --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Nombre del representante legal: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="representate">{{ $convenios->nombre_representante_legal }}</label>
            </div>
        </div>
        {{-- Nombre del contacto --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Nombre del contacto: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="contacto">{{ $convenios->nombre_contacto }}</label>
            </div>
        </div>

        {{-- Teléfono del contacto --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Teléfono de Contacto: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="telefono">{{ $convenios->telefono_contacto }}</label>
            </div>
        </div>

        {{-- Correo del contacto --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Correo de Contacto: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="correo">{{ $convenios->correo_contacto }}</label>
            </div>
        </div>

        {{-- Fecha de Inicio --}}
        <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Fecha de inicio: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <label name="fecha">{{ $convenios->fecha_inicio }}</label>
            </div>


        </div>

        <div class="row mg-t-20">
            <label class="col-sm-4 br-section-label">Datos del convenio
                <hr>
            </label>
        </div>



        <div class="row">
            <label class="col-sm-4 form-control-label">Convenio para:</label>
            <label name="beca">{{ $convenios->convenio_para_beca_convenio }}</label>
            <label name="practicas">{{ $convenios->convenio_para_practicas }}</label>
            <label name="servicioSocial">{{ $convenios->convenio_para_servicio_social }}</label>
            <label name="servicio">{{ $convenios->convenio_para_servicio_otro }}</label>
            <label name="otro">{{ $convenios->convenio_otro_especificar }}</label>
        </div>
        <!--Modalidad presencial-->
        <div class="row mg-t-30" id="ModalidadPresencial">
            <label class="col-sm-4 br-section-label">Modalidad Presencial
                <hr>
            </label>
        </div>

        <div class="row mg-t-20">
            <label class="col-sm-4">Nivel: </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <label name="nivel">{{ $convenios->nivel_presencial }}</label>
            </div>
        </div>
        <div class="row mg-t-5">
             <label class="col-sm-4">Porcentaje: </label>
             <div class="col-sm-8 mg-t-10 mg-sm-t-0">
             <p><label class="form-control-label">{{ $convenios->beca_pre }} % de {{ $convenios->tipo_pre }} en {{ $convenios->aplica_pre }}</label></p>
           </div>
        </div>
        <div class="row mg-t-5">
        <label class="col-sm-4">Doble beneficio: </label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
        <label name="DB">{{ $convenios->doble_beneficiopre }}</label>
        </div>
    </div>
    <div class="row mg-t-5">
        <label class="col-sm-4">Porcentaje: </label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
        <p><label class="form-control-label">{{ $convenios->beca_preDB }} % de {{ $convenios->tipo_preDB }} en {{ $convenios->aplica_preDB }}</label></p>
        </div>
    </div>
    <div class="row mg-t-5">                    
    <label class="col-sm-2 section-label">Legales
        <hr>
    </label>
   </div> 
   <div class="row mg-t-5">
        <label class="col-sm-4">Vigencia: </label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
         <p><label class="form-control-label">{{ $convenios->vigencia_pre }}</label></p>
         </div>
   </div>
   <div class="row mg-t-5">
        <label class="col-sm-4">Ciudad donde es aplicable:  </label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
         <p><label class="form-control-label">{{ $convenios->ciudad_pre }}</label></p>
         </div>
   </div>
   <div class="row mg-t-5">
        <label class="col-sm-4">Ciclo de Vigencia:  </label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
         <p><label class="form-control-label">{{ $convenios->cvigencia_pre }}</label></p>
         </div>
   </div>
   <div class="row mg-t-5">
        <label class="col-sm-4">A quien aplica el beneficio:  </label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
         <p><label class="form-control-label">{{ $convenios->aqa_pre }}</label></p>
         </div>
   </div>
   <div class="row mg-t-5">
        <label class="col-sm-4">Observaciones:  </label>
        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
         <p><label class="form-control-label">{{ $convenios->observaciones_pre }}</label></p>
         </div>
    </div>

    <!--Modalidad 100% en línea-->
        <div class="row mg-t-30" id="ModalidadEnLinea">
            <label class="col-sm-4 br-section-label">Modalidad en línea
                <hr>
            </label>
        </div>
        <div class="row mg-t-20">
                <label class="col-sm-4">Nivel: </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <label name="nivel">{{ $convenios->nivel_enlinea  }}</label>
            </div>
        </div>
        <div class="row mg-t-5">
                <label class="col-sm-4">Porcentaje:  </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <p><label class="form-control-label">{{ $convenios->beca_el }} % de {{ $convenios->tipo_el }} en {{ $convenios->aplica_el }}</label></p>
            </div>
        </div>
        <div class="row mg-t-5">
                <label class="col-sm-4">Doble beneficio:  </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <label name="DB">{{ $convenios->doble_beneficio }}</label>
            </div>
        </div>
        <div class="row mg-t-20">
                <label class="col-sm-4">Porcentaje:  </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
            <p><label class="form-control-label">{{ $convenios->beca_elDB }} % de {{ $convenios->tipo_elDB }} en {{ $convenios->aplica_elDB }}</label></p>
            </div>
        </div>
        <div class="row">                    
        <label class="col-sm-2 section-label">Legales
            <hr>
        </label>
       </div> 
       <div class="row mg-t-5">
            <label class="col-sm-4">Vigencia:  </label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
             <p><label class="form-control-label">{{ $convenios->vigencia_el }}</label></p>
             </div>
            </div>
            <div class="row mg-t-5">
                    <label class="col-sm-4">Ciudad donde es aplicable:  </label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
             <p><label class="form-control-label">{{ $convenios->ciudad_el }}</label></p>
             </div>
            </div>
            <div class="row mg-t-5">
                    <label class="col-sm-4">Ciclo de Vigencia:  </label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
             <p><label class="form-control-label">{{ $convenios->cvigencia_el }}</label></p>
             </div>
            </div>
            <div class="row mg-t-5">
                    <label class="col-sm-4">A quien aplica el beneficio:  </label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
             <p><label class="form-control-label">{{ $convenios->aqa_el }}</label></p>
             </div>
            </div>
            <div class="row mg-t-5">
                    <label class="col-sm-4">Observaciones:  </label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
             <p><label class="form-control-label">{{ $convenios->observaciones_el }}</label></p>
             </div>
        </div>

        <div class="row mg-t-20">
                <label class="col-sm-4 br-section-label">Alcance
                    <hr>
                </label>
            </div>
        <div class="row mg-t-10">
            <label class="col-sm-4 form-control-label">Alcance: {{ $convenios->alcance }}</label>
        </div>
        <div class="row mg-t-20">
                <label class="col-sm-4 br-section-label">Documento
                    <hr>
                </label>
            </div>
        <div class="row mg-t-10">
            <label class="col-sm-4 form-control-label">Nombre: {{ $convenios->nombre_documento }}</label>
        </div>

        </div><!-- form-layout -->

</form>

          </div><!-- col-6 -->

</div><!-- row -->
</div>
</div>

</body>
</html>