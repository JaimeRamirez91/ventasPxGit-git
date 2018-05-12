<li role="separator" class="divider"></li>
<form >
  <div class="container">
        <div class="row">
          <div class="col-lg-1"></div>
            <div class="col-lg-10" id="contenedor">
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
            </div>
        </div>

  </div>
  
      <div class="container">
        <div class="row">  
                <div class="col-lg-1"></div>      
                <div class="col-lg-10 text-center">
                    <button type="button" class="btn btn-outline-success margen-top col-lg-2" onclick="guardarRegistro()" id="btnGuardar">Guardar</button>
                    <button type="button" class="btn btn-outline-danger margen-top col-lg-2" onclick="limpiarRegistro()" id="btnLimpiar">Limpiar</button>
                </div>
                <div class="col-lg-1"></div>
        </div> 
      </div>    
     
  
</form>