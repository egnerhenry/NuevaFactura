 

  <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="formProducto" class="section general-info">
                                        <div class="info">
                                            <h6 class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>&nbsp Ingresar Producto</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" id="prod_imagen" class="dropify" data-default-file="cork/assets/img/200x200.jpg" data-max-file-size="2M" name="prod_imagen" value="" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>&nbsp Subir Imagen</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">

                                                                            <label for="prod_nombre">Nombre del Producto</label>
                                                                            <input type="text" class="form-control mb-4" id="prod_nombre" name="prod_nombre" placeholder="Full Name" value="">
                                                                        </div>
                                                                    </div>
                  
                                                                    <div class="form-group col-md-3 col-sm-6">
                                                                                <label for="inputState">Categoria</label>
                                                                                <select id="prod_categoria" name="prod_categoria" class="form-control">
                                                                                    <?php foreach ($categoria as $valor){?>                                                           
                                                                                    <option value="<?php echo $valor->cat_id ?>" ><?= $valor->cat_nombre?></option>
                                                                                  <?php }?>
                                                                                </select>
                                                                   </div>
                                                                   <div class="form-group col-md-3 col-sm-6">
                                                                                <label for="inputState">Medida</label>
                                                                                <select id="prod_medida" name="prod_medida" class="form-control">                                                            
                                                                                  <?PHP foreach($medida as $value){?>
                                                                                    <option value="<?php echo $value->medida_id ?>"><?= $value->medida_nombre?></option>
                                                                                  <?PHP }?>                                                                                      
                                                                                </select>
                                                                   </div>
                                                           </div>
                                                      <div class="row">
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_precio_compra">Precio de Compra</label>
                                                                <input type="text" class="form-control mb-3" id="prod_precio_compra" name="prod_precio_compra" placeholder="Precio Compra" >
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_precio_venta">Precio de Venta</label>
                                                                <input type="text" class="form-control mb-3" id="prod_precio_venta" name="prod_precio_venta" placeholder="Precio Venta" >
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_codigo">Codigo</label>
                                                                <input type="text" class="form-control mb-3" id="prod_codigo" name="prod_codigo" placeholder="Código">
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_codigo_barra">Codigo de Barra</label>
                                                                <input type="text" class="form-control mb-3" id="prod_codigo_barra" name="prod_codigo_barra" placeholder="Codigo Barra">
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_codigo_barra">Stock</label>
                                                                <input type="text" class="form-control mb-3" id="prod_stock" name="prod_stock" placeholder="Stock">
                                                               </div>
                                                            </div>  
                                                      </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                       <textarea class="form-control" id="prod_descripcion" name="prod_descripcion" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <br><br>                                              
                                                <div class="row">
                                                <div class="col-md-12 text-right mb-5">
                                                    <button type="button" id="btn_agregar_producto" class="btn btn-primary">Agregar</button>
                                                </div>
                                                </div>                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                              </div>

<!--///////////////////////////////////////segunda parte//////////////////////////////////////////////-->

<div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nombre de Producto </th>
                                            <th>Medida</th>
                                            <th>P.Venta</th>
                                            <th>Stock</th>
                                            <th class="no-content"></th>
                                            <th class="no-content"></th>
                                        </tr>
                                        <?php foreach ($productos as $value) {?>
                                            <tr>
                                            <td><?php echo $value->prod_codigo ?></td>
                                            <td><?php echo $value->prod_nombre?></td>
                                            <td><?php echo $value->prod_medida_id?></td>
                                            <td><?php echo $value->prod_precio_venta?></td>
                                            <td><?php echo $value->prod_stock?></td>
                                            <td>

                                                <button data-id="<?php echo $value->prod_id ?>" class="btn btn-primary btn_modificar"  id="" data-toggle='modal' data-target='#myModal1' data-backdrop="static" data-keyboard="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></button>
                                                </td>
                                            <td><a href="<?php echo base_url() ?>index.php/productos/eliminar/<?php echo $value->prod_id;?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                                            </tr>
                                      <?php  } ?>
                                    </thead>
                                    
                                    <tfoot>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Nombre de Producto </th>
                                            <th>Medida</th>
                                            <th>P.Venta</th>
                                            <th>Stock</th>
                                            <th class="no-content"></th>
                                            <th class="no-content"></th>
                                        </tr>

                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
          </div>
        </div>
<!------------------------------MODAL MODIFICAR ----------------->
    
        <div class="modal" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    

  <div class="modal-dialog" >
    <div class="modal-content " style="width: 1000px" >

      <div class="modal-header">
        
        <h5 class="modal-title" id="staticBackdropLabel">MODIFICAR</h5>
  
      </div>
      <div class="modal-body">
            <div class="layout-px-spacing">                
                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                               <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="formProducto" class="section general-info">
                                        <div class="info">
                                            <h6 class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>&nbsp Ingresar Producto</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" id="prod_imagen" class="dropify" data-default-file="cork/assets/img/200x200.jpg" data-max-file-size="2M" name="prod_imagen" value="" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>&nbsp Subir Imagen</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12">
                                                                        <div class="form-group">

                                                                            <label for="prod_nombre">Nombre del Producto</label>
                                                                            <input type="text" class="form-control mb-4" id="prod_nombre" name="prod_nombre" placeholder="Full Name" value="">
                                                                        </div>
                                                                    </div>
                  
                                                                    <div class="form-group col-md-3 col-sm-6">
                                                                                <label for="inputState">Categoria</label>
                                                                                <select id="prod_categoria" name="prod_categoria" class="form-control">
                                                                                    <?php foreach ($categoria as $valor){?>                                                           
                                                                                    <option value="<?php echo $valor->cat_id ?>" ><?= $valor->cat_nombre?></option>
                                                                                  <?php }?>
                                                                                </select>
                                                                   </div>
                                                                   <div class="form-group col-md-3 col-sm-6">
                                                                                <label for="inputState">Medida</label>
                                                                                <select id="prod_medida" name="prod_medida" class="form-control">                                                            
                                                                                  <?PHP foreach($medida as $value){?>
                                                                                    <option value="<?php echo $value->medida_id ?>"><?= $value->medida_nombre?></option>
                                                                                  <?PHP }?>                                                                                      
                                                                                </select>
                                                                   </div>
                                                           </div>
                                                      <div class="row">
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_precio_compra">Precio de Compra</label>
                                                                <input type="text" class="form-control mb-3" id="prod_precio_compra" name="prod_precio_compra" placeholder="Precio Compra" >
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_precio_venta">Precio de Venta</label>
                                                                <input type="text" class="form-control mb-3" id="prod_precio_venta" name="prod_precio_venta" placeholder="Precio Venta" >
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_codigo">Codigo</label>
                                                                <input type="text" class="form-control mb-3" id="prod_codigo" name="prod_codigo" placeholder="Código">
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_codigo_barra">Codigo de Barra</label>
                                                                <input type="text" class="form-control mb-3" id="prod_codigo_barra" name="prod_codigo_barra" placeholder="Codigo Barra">
                                                               </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="prod_codigo_barra">Stock</label>
                                                                <input type="text" class="form-control mb-3" id="prod_stock" name="prod_stock" placeholder="Stock">
                                                               </div>
                                                            </div>  
                                                          </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                       <textarea class="form-control" id="prod_descripcion" name="prod_descripcion" rows="10"></textarea>
                                                    </div>
                                                </div>
                                                <br><br>                                              
                                                                                                             
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                             
      </div>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">GUARDAR</button>
      </div>
  </div>



<!---------------------------FIN DEL MODAL-------->



<!--PASAR DATOS -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="<?PHP echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/jquery-ui-1.11.0.js"></script>
<link rel="stylesheet" href="<?PHP echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

<script type="text/javascript">

  $(document).ready(function(){
    
  //alert("prueba"); 
   

  $("#btn_agregar_producto").on('click',function(){
        //alert("hjkhk");
        $("#formProducto").submit();
      });

      $("#formProducto").on('submit',function(e){        
        e.preventDefault();
        $(".has-error.has-feedback").removeClass('has-error has-feedback');

              
              //var time = parseInt($("#stock_inicial").val())*30;
             // toast('success',time , 'Espere mientras se guarda el producto ... ');
        $.ajax({
          url:'<?php echo base_url()?>index.php/productos/guardar',
          dataType:'json',                    
          method : "POST",
          data:new FormData(this),
          contentType:false,
          processData:false,          
          success:function(response){

            if(response.status == 1)
            {
              if(response.tipo == '1')
              {
                var errores = response.errores;
                //toast('error', 1500, 'Faltan ingresar datos.');                
                $.each(errores, function(index, value){
                  $("#"+index).parent().addClass('has-error has-feedback');
                });
              }              
            }
            if(response.status == 2)
            {   

                alert('DATOS INGRESADOS CORRECTAMENTE');
                
              //toast('success', 1500, 'Producto ingresado');
              //dataSource.read();
              //$("#myModal").modal('hide');
            }
          }
        });
             });
$(".btn_modificar").click(function(){
          $("#modal1").modal('show');

        });
$(".btn_eliminar").click(function(){
  $("#modal2").modal('show');
});
        
      });
      
</script>       



    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="cork/plugins/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Productos Ingresados :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        });
    </script>                                                   

                                

                               