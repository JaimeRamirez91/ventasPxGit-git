<!DOCTYPE html>
 
<html lang="es">
 
<head>
<title>Titulo de la web</title>
<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" title="Pozolería RSS" type="application/rss+xml" href="/feed.rss" />
<script src="{{'js/app.js'}}"></script>
<script src="{{'js/toastr.js'}}"></script>
<script src="{{'js/jquery.alertable.js'}}"></script>
<link href="css/toastr.css" rel="stylesheet">
<link href="css/app.css" rel="stylesheet">
<link href="css/jquery.alertable.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="3.3.1.min.js"></script>
<script src="js/gijgo.js" type="text/javascript"></script>
<link href="css/open-iconic-bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/gijgo.css" rel="stylesheet" type="text/css" />


</head>
 
<body>
    @include('plantillas.navbar')
    
    <!--Contenido-->
     @yield('contenido')

    <footer>
    </footer>
<script src="{{'js/ventas.js'}}"></script>  
<script>
        $('#datepickerF1').datepicker({
            uiLibrary: 'bootstrap4',
             format: 'yyyy-mm-dd',
             // container: container,
              todayHighlight: true,
              autoclose: true,
             
        });
        $('#datepickerF2').datepicker({
            uiLibrary: 'bootstrap4',
             format: 'yyyy-mm-dd',
             // container: container,
              todayHighlight: true,
              autoclose: true,
             
        });
       
    </script>  
</body>
</html>