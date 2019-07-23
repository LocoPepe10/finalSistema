<?php $__env->startSection('contenido'); ?>
<div class="row">
    <div class="col-md-6">
        <h3>Nuevo Ingeso</h3>
        <?php if(count($errors)>0): ?>
        <div class="alert alert-danger">
            <ul>
            <?php foreach($errors->all() as $error): ?>
                <li>
                    <?php echo e($error); ?>

                </li>
            <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</div>       
        <?php echo Form::open(array('url'=>'compras/ingreso','method'=>'POST','autocomplete'=>'off')); ?>

        <?php echo e(Form::token()); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="proveedor">Prveedor</label>
                    <select name="idproveedor" id="idproveedor" class="form-control">                        
                        <?php foreach($personas as $persona): ?>
                        <option value="<?php echo e($persona->idpersona); ?>">
                            <?php echo e($persona->nombre); ?>

                        </option>
                        <?php endforeach; ?>  
                    </select>
                </div>
            </div>
           
            <div class="col-md-4">
                <div class="form-group">
                    <label>Comprobante</label>
                    <select name="tipo_comprobante" class="form-control">                        
                        <option value="Boleta">Boleta</option>
                        <option value="Factura">Factura</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="serie_comprobante">Serie Comprobante</label>
                    <input type="text" name="serie_comprobante" value="<?php echo e(old('serie_comprobante')); ?>" class="form-control" placeholder="Serie de comprobante..."/>                
                </div>                
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="num_comprobante">Número Comprobante</label>
                    <input type="text" name="num_comprobante" value="<?php echo e(old('num_comprobante')); ?>" class="form-control" placeholder="Número comprobante..."/>                
                </div>                
            </div>
        </div>
        <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Artículo</label>
                            <select name="pidarticulo" class="form-control" id="pidarticulo" data-live-search="true">
                                <?php foreach($articulos as $articulo): ?>
                                <option value="<?php echo e($articulo->idarticulo); ?>">
                                    <?php echo e($articulo->articulo); ?>

                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>                        
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="pcantidad" id="pcantidad" class="form-control" placeholder="cantidad"/>                
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="precio_compra">Precio Compra</label>
                            <input type="number" name="pprecio_compra" id="pprecio_compra" class="form-control" placeholder="P. compra"/>               
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="precio_venta">Precio Venta</label>
                            <input type="number" name="pprecio_venta" id="pprecio_venta" class="form-control" placeholder="P. Venta"/> 
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"> 
                            <label>  </label>                           
                            <button type="button" name="bt_add" id="bt_add" class="btn btn-primary btn-block mt-2">
                                Agregar
                            </button> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color: #A9D0F5;">
                                <th>Opciones</th>
                                <th>Artículos</th>
                                <th>Cantidad</th>
                                <th>Precio Compra</th>
                                <th>Precio Venta</th>
                                <th>Subtotal</th>
                            </thead>
                            <tfoot>
                                <th>TOTAL</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><h4 id="total">S/. 0.00</h4></th>
                            </tfoot>
                        </table>
                    </div>
            
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
                <div class="form-group">
                    <input name="_token" value="<?php echo e(csrf_token()); ?>" type="hidden"/>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button>
                </div>
            </div>
        </div>        
        
        
        <?php echo Form::close(); ?>


<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
  

    $(document).ready(function(){
       $("#bt_add").click(function(){
            agregar();
       });
    });

    var cont=0;
    var total=0;
    var subtotal=[];
    $("#guardar").hide();
    
    function agregar(){
        var idarticulo = $("#pidarticulo").val();
        articulo = $("#pidarticulo option:selected").text();
        cantidad = $("#pcantidad").val();
        precio_compra = $("#pprecio_compra").val();
        precio_venta = $("#pprecio_venta").val();
        
        if(idarticulo!="" && cantidad!="" && cantidad>0 && precio_compra!="" && precio_venta!=""){
            subtotal[cont] = (cantidad*precio_compra);
            total = total+subtotal[cont];
            
            var fila = '<tr class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-warning" onclick="eliminar('+cont+');">x</button></td><td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td><td><input type="number" name="cantidad[]" value="'+cantidad+'"></td><td><input type="number" name="precio_compra[]" value="'+precio_compra+'"></td><td><input type="number" name="precio_venta[]" value="'+precio_venta+'"></td><td>'+subtotal[cont]+'</td></tr>';
            cont++;
            limpiar();
            $("#total").html("S/. "+total);
            evaluar();
            $('#detalles').append(fila);
        }else{
            alert("Error al ingresar el detalle del ingreso, revise los datos del articulo");
        }
    }
    
    function limpiar(){
        $("#pcantidad").val("");
        $("#pprecio_compra").val("");
        $("#pprecio_venta").val("");
    }
    function evaluar(){
        if(total>0){
            $("#guardar").show();
        }else{
            $("#guardar").hide();
        }
    }
    function eliminar(index){
        total = total-subtotal[index];
        $("#total").html("S/."+total);
        $("#fila"+index).remove();
        evaluar();
    }

</script>

<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>