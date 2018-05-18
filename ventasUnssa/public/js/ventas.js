function guardarRegistro(){

  let folder        =  $("#inpFolder").val();
  let impresiones   =  $("#inpImpresiones").val();
  let faster        =  $("#inpFaster").val();
  let anillados     =  $("#inpAnillados").val();
  let pBond         =  $("#inpPapelBond").val();
  let otros         =  $("#inpOtros").val();
  resetValores();
  
  let v_folder = vLongitud(folder);
  let v_impresiones = vLongitud(impresiones);
  let v_faster = vLongitud(faster);
  let v_anillados = vLongitud(anillados);
  let v_pBond = vLongitud(pBond);
  let v_otros = vLongitud(otros);
  if(v_folder == 1 && v_impresiones == 1 && v_faster ==1 && v_anillados == 1 && v_pBond == 1 && v_otros == 1 ){
    toastr.error("Inserción de datos nulos, !!Ingrese almenos un campo!!", "!!ATENCIÓN!!");
  }else{
    var varurl = "/ventas";
 
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  
      type: "post",
      url : varurl,
      datatype:'json',
      data :{'folder':folder ,'impresiones':impresiones,'faster' : faster, 'anillados':anillados, 'pBond': pBond, 'otros': otros,},
      success : function(resul){
  
          if($.isEmptyObject(resul.error)){
              $("#vnt-contenedor").load(" #vnt-contenedor");
              toastr.success(resul.msj,"!!ATENCIÓN!!" );
              limpiarRegistro();
          }else{
              toastr.error("Solo se admiten valores númericos menores a 500","!!ATENCIÓN!!" );
              resul.error.forEach(function(error) {
                // alert(error);
                  switch(parseInt(error)) {
                      case 1:
                         $("#inpFolder").css("border", "1px solid rgb(177, 43, 43)");
                          break;
                      case 2:
                          $("#inpImpresiones").css("border", "1px solid rgb(177, 43, 43)");
                          break;
                      case 3:
                          $("#inpFaster").css("border", "1px solid rgb(177, 43, 43)");
                          break;
                      case 4:
                          $("#inpAnillados").css("border", "1px solid rgb(177, 43, 43)");
                          break;
                      case 5:
                          $("#inpPapelBond").css("border", "1px solid rgb(177, 43, 43)");
                          break;
                      case 6:
                          $("#inpOtros").css("border", "1px solid rgb(177, 43, 43)");
                          break;
                      default:
                          toastr.error("Error no especificado","!!ATENCIÓN!!" );
                  } 
                 
              });
          }   
      }
      });

  }
 
}

function limpiarRegistro(){
    $("#inpFolder").val("");
    $("#inpImpresiones").val("");
    $("#inpFaster").val("");
    $("#inpAnillados").val("");
    $("#inpPapelBond").val("");
    $("#inpOtros").val("");
    }
    
 function vLongitud(valor){
    let cadena = valor.trim();
    if(cadena.length > 0){
        return 0;
    }else{
        return 1;
    } 
    
 } 

function resetValores(){
    $("#inpFolder").css("border", " 1px solid #46b8da");
    $("#inpImpresiones").css("border", " 1px solid #46b8da");
    $("#inpFaster").css("border", " 1px solid #46b8da");
    $("#inpAnillados").css("border", " 1px solid #46b8da");
    $("#inpPapelBond").css("border", " 1px solid #46b8da");
    $("#inpOtros").css("border", " 1px solid #46b8da");
}  


/*paginacion de url*/
$(document).on('click', '#vnt-contenedor .pagination a', function(e){
      e.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
     // console.log($(this).attr('href'));
      $("#vnt-contenedor").load($(this).attr('href')+" #vnt-contenedor" );
       var page = $(this).attr('href').split('page=')[1];
      console.log($(this).attr('href'));
      $("#vnt-contenedor").load($(this).attr('href')+" #vnt-contenedor" );
});
  
 
 $(document).ready(function(){
  $("#inpFolder").focus();
  //document.getElementById('inpFolder').focus();
 });

 function deleteVenta(id){
    let varurl = "/delete/venta"; 
    let a = 1;
     $.alertable.confirm("Esta seguro de eliminar la venta con correlativo:"+id).then(function(){
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  
            type: "get",
            url : varurl,
            datatype:'json',
            data :{'valor': id,},
            success : function(resul){
                $("#vnt-contenedor").load(" #vnt-contenedor");
                toastr.error(resul.msj ,"!!ATENCIÓN!!" ); 
            }
            });

     });
 }

 
function cargarlistado(){  
        window.open("crear_reporte_semana/1/12-2-12/12-2-12");
}