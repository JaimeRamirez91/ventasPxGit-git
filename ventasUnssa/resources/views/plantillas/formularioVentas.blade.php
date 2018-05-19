<li role="separator" class="divider" style="color:white"></li>
<form >
  <div class="container" id="cont-principal-frm">
        <div class="row">
          <div class="col-lg-1"></div>
            <div class="col-lg-10" id="contenedor">
            <h4 class="bg-danger" style= " text-align: center; color: white; border: 1px solid #46b8da !important;
         background: #0D939B !important; border-radius: 10px !important; margin-top:10px;">VENTAS</h4>     
            <div class="row margen-top">
            <div class="col-lg-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Folder</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Cantidad" id="inpFolder">
                    </div>
                </div> 

                <div class="col-lg-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Impresiones</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Cantidad" id="inpImpresiones">
                    </div>
                </div> 

                <div class="col-lg-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Faster</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Cantidad" id="inpFaster">
                    </div>
                </div> 

            </div>
            <div class="row margen-top">
            <div class="col-lg-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">Anillados</span>
                        </div>
                        <input type="text" class="form-control skin-input" placeholder="Cantidad" id="inpAnillados">
                    </div>
                </div> 
                <div class="col-lg-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default">PAPEL BOND</span>
                        </div>
                        <input type="text" class="form-control skin-input" placeholder="Cantidad" id="inpPapelBond">
                    </div>
                </div> 
                <div class="col-lg-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text skin-label" id="inputGroup-sizing-default" >Otros</span>
                        </div>
                        <input type="text" class="form-control skin-input"  placeholder="Precio en $" id="inpOtros">
                    </div>
                </div> 
            </div>
            <div class="row">  
                <div class="col-lg-1"></div>      
                <div class="col-lg-10 text-center">
                    <button type="button" class="btn btn-outline-success margen-top col-lg-2" onclick="guardarRegistro()" id="btnGuardar"><i class="fa fa-save ico"></i>Guardar </button>
                    <button type="button" class="btn btn-outline-danger margen-top col-lg-2" onclick="limpiarRegistro()" id="btnLimpiar"><i class="fa fa-recycle ico"></i>Limpiar</button>
                </div>
                <div class="col-lg-1"></div>
            </div> 
            </div>
            
        </div>

  </div>
</form>