  <?php

    $cat_id=0;
    $med_id=0;
    $tipoitemid=0;
    $estilo ='';
    if (isset($producto)) {
      $cat_id = $producto->prod_categoria_id;
      $med_id = $producto->prod_medida_id;
      $estilo ='readonly';
    } 
   ?>

  <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="general-info" class="section general-info">
                                        <div class="info">
                                            <h6 class="">Ingresar Producto</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
                                                                <input type="file" id="input-file-max-fs" class="dropify" data-default-file="cork/assets/img/200x200.jpg" data-max-file-size="2M" />
                                                                <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Subir Imagen</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="prod_nombre">Nombre del Producto</label>
                                                                            <input type="text" class="form-control mb-4" id="prod_nombre" placeholder="Full Name" value="">
                                                                        </div>
                                                                    </div>
                  
                                                                    <div class="form-group col-md-3">
                                                                                <label for="inputState">Categoria</label>
                                                                                <select id="prod_categoria" name="prod_categoria" class="form-control">
                                                                                    <option selected>Choose...</option>
                                                                                    <?php foreach ($categoria as $value): ?>
                  <option value="<?php echo $value->ccat_id;?>" <?php if($value->ccat_id == $producto->prod_categoria_id):?> selected <?php endif?> > <?php echo $value->cat_nombre;?></option>  
                <?php endforeach ?> 
                                                                                </select>
                                                                   </div>

                                                                    <div class="form-group col-md-3">
                                                                                <label for="inputState">Medida</label>
                                                                                <select id="inputState" class="form-control">
                                                                                    <option selected>Choose...</option>
                                                                                    <option>...</option>
                                                                                </select>
                                                                   </div>
                                                           </div>

                                                      <div class="row">
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="fullName">Precio de Conpra</label>
                                                                <input type="text" class="form-control mb-3" id="fullName" placeholder="Full Name" value="1.00">
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="fullName">Precio de Venta</label>
                                                                <input type="text" class="form-control mb-3" id="fullName" placeholder="Full Name" value="1.00">
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="fullName">Codigo</label>
                                                                <input type="text" class="form-control mb-3" id="fullName" placeholder="Full Name" value="#412587">
                                                               </div>
                                                            </div> 
                                                            <div class="col-sm-3">
                                                               <div class="form-group">
                                                                <label for="fullName">Codigo de Barra</label>
                                                                <input type="text" class="form-control mb-3" id="fullName" placeholder="Full Name" value="#124578">
                                                               </div>
                                                            </div> 
                                                      </div>



                                                                <div class="form-group">
                                                                    <label for="profession">Profession</label>
                                                                    <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="Web Developer">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>




<!--////////////////////////////////////////segunda parte//////////////////////////////////////////////-->


                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="about" class="section about">
                                        <div class="info">
                                            <h5 class="">Ingresar Categoria</h5>
                                            <div class="row">
                                                  <div class="col-sm-6">
                                                       <div class="form-group">
                                                         <label for="fullName">Nombre del categoria</label>
                                                         <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="Ejem.(Lacteos)">
                                                       </div>
                                                  </div>
                                                 <div class="col-md-12 text-right mb-5">
                                                    <button id="add-work-platforms" class="btn btn-primary">Agregar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

<!--////////////////////////////////////////Tercera parte//////////////////////////////////////////////-->

   <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="about" class="section about">
                                        <div class="info">
                                            <h5 class="">Ingresar Unidad de Medida</h5>
                                            <div class="row">
                                                  <div class="col-sm-6">
                                                       <div class="form-group">
                                                         <label for="fullName">Nombre Unidad Medida</label>
                                                         <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="ejem. (Metro)">
                                                       </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                       <div class="form-group">
                                                         <label for="fullName">Prefijo Uni Medida</label>
                                                         <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="Ingresar Prefijo (mt)">
                                                       </div>
                                                  </div>
                                                 <div class="col-md-12 text-right mb-5">
                                                    <button id="add-work-platforms" class="btn btn-primary">Agergar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

<!--////////////////////////////////////////segunda parte//////////////////////////////////////////////-->

                                



                               <!-- </div></div></div></div></div></div>-->