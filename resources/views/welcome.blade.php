<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Vacunación Universidad Mariana</title>
        <link rel="icon" href="{!! asset('img/qwe.png') !!}"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <!--  background-image: url('img/abcde.jpg');-->
           <!--       background-repeat: repeat;-->
           <!--       background-size: 1100px 1100px; -->
        <style>
            body {
             
              background-image: url('img/abf.png');
                  background-repeat: repeat;
                background-size: 1510px 1600px; 

            }
            .navbar {
              height: 40px;
            }

            .navbar-brand {
              padding: 0px;
              height: 0px;
              line-height: 0px;
            }

            .navbar-toggle {
              /* (80px - button height 34px) / 2 = 23px */
              margin-top: 23px;
              padding: 9px 10px !important;
            }

            @media (min-width: 768px) {
              .navbar-nav > li > a {
                padding-top: 20.5px;
                padding-bottom: 20.5px;
              line-height: 100px;
              }
              /* CSS styles */
 
}

        </style>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body class="antialiased">
      <!-- Navbar --><nav class="navbar navbar-expand-lg navbar-light bg-light"><!-- Container wrapper -->
<div class="container-fluid"><!-- Toggle button --> <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> </button> <!-- Collapsible wrapper -->
<div style="padding-bottom: 0px;" id="navbarSupportedContent" class="collapse navbar-collapse"><!-- Navbar brand -->
 <a style="  padding-top: 0.5px;
    padding-bottom: 0.5px;
  line-height: 1px;" > <img  src="img/qwe.png" alt="Logo" height="37" /> </a> <!-- Left links -->
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link" >Vacunación Universidad Mariana</a></li>
</ul>
<!-- Left links --></div>
<!-- Collapsible wrapper --> <!-- Right elements -->
<div class="d-flex align-items-center"><!-- Icon --> <!-- Notifications -->


</div>
<!-- Right elements --></div>
<!-- Container wrapper --></nav><!-- Navbar -->
    <div >
    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
   
  @endif
  @if(session('status1'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('status1') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
   
  @endif

  <div style="padding-bottom: 0px;">
  </div>
<img style="width:50%;  display: block;
  margin: auto;"  src="img/abc1.png" alt="">
</div>


    <div class="container" style="padding-top: 10px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">


                        <div class="card-header">
                            <h3 class="mb-0">Registrar Vacuna</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">

                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf

  <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail2">Identificacion</label>
      <input  name="a1" type="number" class="form-control" id="inputEmail2" placeholder="123">
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail3">Fecha</label>
    @php
    $date = date('Y-m-d');
@endphp
<input name="a2" type="date" class="form-control" id="inputEmail3"   placeholder="2018-07-22" min="2020-06-01" max="{{$date}}" required>
  </div>
  
    <div class="form-group col-md-4">
      <label for="inputState">Nombre Vacuna</label>
      <select name="a3"  id="inputEmail4" class="form-control">
      <option selected>Pfizer</option>
        <option>Moderna</option>
        <option>AstraZeneca</option>
        <option>Jhonson</option>
        <option>Sputnik</option>
        <option>SinoVac</option>
        <option>Abdala</option>
        <option>Bharat</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Dosis a registrar</label>
      <select name="a4" id="inputEmail5" class="form-control">
        <option selected>1</option>
        <option>2</option>
      </select>
    </div>

    </div>
  </div>
  <button type="submit" class="btn btn-primary">Continuar</button>
</form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->



<div class="container" style="padding-top: 0px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Citas</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">
                        <form name="add-blog-post-form1" id="add-blog-post-form" method="post" action="{{url('store-form1')}}">
       @csrf

       <div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputEmail8">Identificacion</label>
      <input name="b1" type="number" class="form-control" id="inputEmail2" placeholder="123" required>
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail9">Fecha</label>
    <input  id="ejemplov0" name="b2" type="date" class="form-control" id="inputEmail3"   placeholder="2018-07-22" min="{{$date}}" max="2024-06-20" required>
  </div>
       </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
          $('#ejemplov0').change(function() {
    var date = $(this).val();
    var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/ModificarHoras/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#ejemplov3').empty();
                            $.each(data, function(valor,value){
                                $('#ejemplov3').append('<option value="'+ value +'">' +value+ '</option>');
                            });
                        }else{
                            $('#ejemplov3').empty();
                        }
                     }
                   });
               }else{
                 $('#ejemplov3').empty();
               }
        
});
        </script>
    <div class="form-group col-md-4">
      <label for="inputState">Hora</label>
      <select id="ejemplov3"  name="b3" id="inputEmail11" class="form-control">
        <option selected></option>
      </select>
    </div>

    </div>
    <button type="submit" class="btn btn-primary ">Continuar</button>
  </div>

</form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->






<div class="container" style="padding-top: 0px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 min-vh-5 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Consulta individual</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">
                        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail6">Consultar por identificacion</label>
      <div class="row">
  <div class="col-8"> <input id="ejemplov5"  type="number" class="form-control" id="inputEmail7" placeholder="123"></div>
  <div class="col-4">  <button type="button" class="btn btn-primary">
    <i class="fa fa-search"></i>
  </button></div>
</div>
     
     

    </div>
      </div>
      <label>Dosis aplicadas: </label> <input  id="ejemplov10" type="text" name="firstname" placeholder="" disabled>
      <script>
          $('#ejemplov5').change(function() {
    var date = $(this).val();
    var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/ConsultaIndividual/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#ejemplov10').empty();
                                $("#ejemplov10").val(data);
                          
                        }else{
                            $("#ejemplov10").val("sin vacuna registrada");
                        }
                     }
                   });
               }else{
                $("#ejemplov10").val("no es un id valido");
               }
        
});
        </script>
  </div>
</form>
                        </div>



                        
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->





<div class="container" style="padding-top: 0px;padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-12 min-vh-5 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0">Consulta general</h3>
                        </div>
                        <div class="card-body" style="padding-bottom: 20px;">
                        <form>


    <div class="form-group col-md-8">
      <label for="inputState">Consultar numero de vacunados por dosis</label>
      <select id="ejemplov11" class="form-control">
        <option selected> </option>
        <option >1</option>
        <option>2</option>
      </select>
    </div>
    <div style="padding-left: 15px;">
    <label>Porcentaje de estudiantes vacunados: </label> 
  
    <div id="ejemplovb0"> 
   
  </div>
  </div>
  @php
  $porcentajev3=10;
  $porcentajev2=0;
@endphp
      <script>
          $('#ejemplov11').change(function() {
    var date = $(this).val();
    var categoryID = $(this).val();
               if(categoryID) {
                   $.ajax({
                       url: '/ConsultaVarios/'+categoryID,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                                ///$("#ejemplov100").val(data );
                                var splitted = data.split("%");
                                var Name1 = splitted[0]; 
                               ////ajax no puede mosificar php
                                name2='/GraficoTorta/'+Name1;
                                $.get(name2, function(Name1) {
                document.getElementById('links_container').innerHTML = Name1;
            })
                        }else{
                          $.get('/GraficoTorta/0', function(Name1) {
                document.getElementById('links_container').innerHTML = Name1;
            })
                        }
                     }
                   });
               }else{
                $.get('/GraficoTorta/0', function(Name1) {
                document.getElementById('links_container').innerHTML = Name1;
            })
               }
        
});
        </script>
  </div>
 
</form>

<div  style="padding-bottom: 15px;" id="links_container">
                @include('cosas')
            </div>
                        </div>
                        </div>


                        
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->



   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>






