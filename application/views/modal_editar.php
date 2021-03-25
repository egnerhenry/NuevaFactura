 <!--<div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="formProducto1" class="section general-info" action="<?php=base_url()?>index.php/productos/editar">
                                        <div class="info">
                                            <h6 class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>&nbsp Editar Producto</h6>
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
                                                    <button type="button" id="btn_agregar_producto" class="btn btn-primary">GUARDAR</button>
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