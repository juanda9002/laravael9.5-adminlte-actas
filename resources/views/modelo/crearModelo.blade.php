@extends('admin.layout')

@section('contenido')

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Modelo de equipo
        <small>Optional description</small>
      </h1>
     
 </section>

 <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body row">
              <div class="form-group col-md-4">
                  <label for="exampleInputPassword1">Nombre modelo</label>
                  <input type="text" class="form-control"  placeholder="Escriba el modelo">
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputPassword1">Categoria</label>
                  <input type="text" class="form-control"  placeholder="Selecciona fabricante">
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputPassword1">Fabricante</label>
                  <input type="text" class="form-control"  placeholder="Seleccione fabricante">
                </div>               
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

 

        
@stop