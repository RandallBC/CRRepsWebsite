<html>
<head>
    <title></title>
    <script>
        $("#nuevo").click(function(e){
            e.preventDefault();
            if ($("#frmActivaUsuario").validationEngine("validate")) {
                var form_data = {
                    //Recuperar los valores de los campos del formulario
                    productoID:$("#productoID").val(),  //para acceder al valor de los campos input

                };
                $.ajax({
                    type: "POST",
                    url: "escriptphp.php",
                    data: form_data,
                    beforeSend: function(){
                        $("#nuevo").attr("value","Agregando..");
                        $("#nuevo").attr("disabled",true);
                    },
                    success: function(response){
                        $("#el_div_").html(response);
                        $("#nuevo").attr("value","Agregar");
                        $("#nuevo").attr("disabled",false);

                    }
                });
            }
    </script>
</head>
<body>
<form action="procesos_pedido.php" method="GET" name="agregar" id="agregar" >
    <fieldset>
        <legend>Agregar producto | servicio</legend>
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad" id="cantidad" size="15" /><br />
        <label for="servicio">Producto | Servicio</label>
        <input type="text" name="servicio" id="servicio" size="45" autocomplete="off" /><br /><br />
        <input type="hidden" name="productoID" id="productoID" />
        <label for="produccion"><input type="checkbox" name="produccion" id="produccion" value="1" /> Producci&oacute;n </label>
        <label for="diseno"><input type="checkbox" name="diseno" id="diseno" value="1" /> Dise&ntilde;o </label>
        <label for="inventario"><input type="checkbox" name="inventario" id="inventario" value="1" onClick="disableOthers(this)" /> Inventario </label><br />
        <label for="comentario_adicional">Comentario adicional</label>
        <textarea name="comentario_adicional" cols="45" rows="5"></textarea>
        <div id="mostrarDiv"><a href="javascript:mostrardiv();">+ almac&eacute;n</a></div>
        <div id="flotante" style="display:none;">
            <a href="javascript:cerrar();"> - almac&eacute;n</a><br />
            <div class="izquierda">
                <label for="existencias">Existencias</label>
                <input type="text" name="existencias" id="existencias" size="7" /><br />
                <label for="inventariado">Inventariado</label>
                <input type="text" name="inventariado" id="inventariado" size="7" />
            </div>
            <div class="derecha">
                <label for="minimo_stock">Minimo stock</label>
                <input type="text" name="minimo_stock" id="minimo_stock" size="7" /><br />
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" size="10" />
            </div>
        </div>
        <input type="submit" name="nuevo" id="nuevo" value="Agregar" />
    </fieldset>
</form>