<li role="separator" class="divider" style="color:white"></li>
<form >
  <div class="container" id="cont-principal-frm">
        <div class="row">
          <div class="col-lg-1"></div>
            <div class="col-lg-10" id="contenedor-pdf">    
            <h4 class="bg-danger" style= " text-align: center; color: white; border: 1px solid #46b8da !important;
         background: #0D939B !important; border-radius: 10px !important; margin-top:10px;">REPORTE DE VENTAS</h4>        
            <div class="row margen-top">
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                    <div class="input-group mb-3">
                       <input id="datepickerF1" placeholder="Desde" width="276" />
                    </div>
                </div> 

                <div class="col-lg-4">
                    <div class="input-group mb-3">
                      <input id="datepickerF2" placeholder="Hasta" width="276" />
                    </div>
                </div> 
                <div class="col-lg-2"></div>
            </div>
           
            <div class="row">  
                <div class="col-lg-1"></div>      
                <div class="col-lg-10 text-center">
                    <button type="button" class="btn btn-outline-info margen-top col-lg-1 ico" onclick="cargarlistado(1)" id="btnVerpdf"><i class="fa fa-eye ico"></i></button>
                    <button type="button" class="btn btn-outline-success margen-top col-lg-1 ico" onclick="cargarlistado(2)" id="btnGuardarpdf"><i class="fa fa-save ico"></i></button>
                    <button type="button" class="btn btn-outline-danger margen-top col-lg-1 ico" onclick="limpiarRegistro()" id="btnLimpiarpdf"><i class="fa fa-recycle ico"></i></button>
                </div>
                <div class="col-lg-1"></div>
            </div> 
            </div>
            
        </div>

  </div>
</form>