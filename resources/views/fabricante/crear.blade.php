@extends('admin.layout')

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Fabricante de equipo
        <small>Optional description</small>
      </h1>
     
 </section> 
 <br>

 <div class="box box-primary justify-content-center">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('fabricante.guardar')}}" method="POST">    
              @csrf        
              <div class="box-body row col-center">
              <div class="form-group col-md-5">
                  <label for="exampleInputPassword1">Fabricante</label>
                  <input type="text" class="form-control" name="nombreFabricante" placeholder="Escriba el fabricante">
                </div>
                
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Aceptar</button>
              </div>
              
 


            </form>
          </div>

 

        
@stop