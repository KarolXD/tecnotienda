
<?php
include_once 'public/headerCliente.php';
?>

<div class="container">
    <center><h5> Desglose de mis compras!</h5></center>
    <br>
    <br>
    <div class="form-group ">   <div  class="alertControl alert alert-primary" name="alertControl" id="alertControl"> </div></div>

    <div class="row">

        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="tblSubCategorias">
                <hr style="color: #6d7fcc">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cliente </th>       
                        <th scope="col">Detalle  </th>
                        <th scope="col">Monto </th>
                            <th scope="col">Fecha </th>
                    </tr>
                </thead>

                <tbody>


                    <?php
                    foreach ($vars['listado'] as $item) {
                        ?>
                        <tr>                          
                            <td><?php echo $item[0] ?></td>
                            <td><?php echo $item[1] ?></td>
                            <td><?php echo $item[2] ?></td>
                            <td><?php echo $item[3] ?></td>
 <td><?php echo $item[4] ?></td>
                        </tr>

                        <?php
                    }
                    ?>

                </tbody>


            </table>
        </div>
    </div>
</div>
<BR><BR>

<?php
include_once 'public/footer.php';
?>