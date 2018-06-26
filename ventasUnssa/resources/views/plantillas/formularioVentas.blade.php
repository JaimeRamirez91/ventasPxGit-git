<li role="separator" class="divider" style="color:white"></li>
<form >
  <div class="container" id="cont-principal-frm">
        <div class="row">
          <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-10 col-md-10" id="contenedor">
            <h4 class="bg-danger" style= " text-align: center; color: white; border: 1px solid #46b8da !important;
         background: #0D939B !important; border-radius: 10px !important; margin-top:10px;">VENTAS</h4>     
            <div class="row margen-top">
            <div class="col-lg-4 col-md-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Folder</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Cantidad" id="inpFolder">
                    </div>
                </div> 

                <div class="col-lg-4 col-md-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Impresiones</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Cantidad" id="inpImpresiones">
                    </div>
                </div> 

                <div class="col-lg-4 col-md-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Faster</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Cantidad" id="inpFaster">
                    </div>
                </div> 

            </div>
            <div class="row margen-top">
            <div class="col-lg-4 col-md-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Anillados</span>
                        </div>
                        <input type="text" class="form-control skin-input" placeholder="Cantidad" id="inpAnillados">
                    </div>
                </div> 
                <div class="col-lg-4 col-md-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">PAPEL BOND</span>
                        </div>
                        <input type="text" class="form-control skin-input" placeholder="Cantidad" id="inpPapelBond">
                    </div>
                </div> 
                <div class="col-lg-4 col-md-10">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default" >Otros</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Precio en $" id="inpOtros">
                    </div>
                </div> 
            </div>
            <div class="row">  
                <div class="col-lg-1 col-md-1"></div>      
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-center" >
                    <button type="button" id="btn-G-venta" class="btn btn-outline-success margen-top col-lg-2 col-md-6 col-sm-6 " onclick="guardarRegistro()" id="btnGuardar"><i class="fa fa-save ico"></i>Guardar </button>
                    <button type="button" id="btn-L-venta" class="btn btn-outline-danger margen-top col-lg-2 col-md-6 col-sm-6 " onclick="limpiarRegistro()" id="btnLimpiar"><i class="fa fa-recycle ico"></i>Limpiar</button>
                </div>
                <div class="col-lg-1"></div>
            </div> 
            </div>
            
        </div>

  </div>
</form>

<div class="container">
    
       

    <div class="row margen-top ">
    <h3 class="col-lg-1 col-md-1 col-xs-1"></h3>    
    <h5 class="text-center margen-tp col-lg-10 col-md-10 col-xs-10" style= " text-align: center; color: white; border: 1px solid #46b8da !important;
         background: #0D939B !important; border-radius: 10px !important; margin-top:10px;">MOSTRAR VENTAS</h3>
    <h3 class="col-lg-1 col-md-1 col-xs-1"></h3> 
                <div class="col-lg-3 col-md-2 col-sm-0 col-xs-0"></div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-0">
                        <div id ="calendario" class="input-group mb-1 ">
                        <input id="datepickerF1" placeholder="Desde" width="276" />
                        </div>
                </div> 

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-0">
                    <div class="input-group mb-3">
                    <input id="datepickerF2" placeholder="Hasta" width="276" />
                    </div>
                </div>

                <div class="col-lg-1 col-md-2 col-sm-0 col-xs-0"></div>
    </div>
    <div class="row">  
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-6"></div>      
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-center">
                    <button type="button" class="btn btn-outline-info margen-top col-lg-1 col-md-1 col-sm-1 col-xs-1 ico" onclick="buscarVentas()"><i class="fa fa-search ico"></i></button>
                    <button type="button"  class="btn btn-outline-danger margen-top col-lg-1 col-md-1 col-sm-1 col-xs-1 ico" onclick="limpiarFechas()" id="btnLimpiarpdf"><i class="fa fa-recycle ico"></i></button>
                </div>
                <div class="col-lg-1"></div>
            </div> 
</div>
          