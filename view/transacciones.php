<?php
include_once "../model/Remisiones_model.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="../style.css" rel="stylesheet">

    <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow" style="background: #000080;">
            <div class="container" style="align-items:center;">
                <center>
                <img src="LogoPNGBlanco.png" width="250">
                </center>
            </div>
    </nav><br>
</head>


<body>
    <div class="table-responsive">
        <table class="tabla">
            <thead>
                <tr>
                    <th width="500">Nombre_cliente</th>
                    <th colspan="1" width="250">Remisiones</th>

                    <th colspan="2">Transaccciones</th>
                </tr>
            </thead>
                    <?php Remision_model::getRemision();
                    //foreach ($consulta as $fila){
                    ?>
                <tr>

                    <td><?//$fila['nombre_cliente']; ?></td>

                    <td>
                        <?php  ?>

                            <div class="mini">
                            </div>
                            <div class="valor_remision">
                                $<?//round($fila['valor_remision']); ?><br>
                                <?php
                                
                                ?>


                            </div>
                            <br style="clear: both;" />
                        <?php  ?>
                    </td>

                    <td>
                        <?php $total_transaccion = 0;
                        ?>

                            <div class="valor_transaccion tooltip <??>">

                                <span class="tooltiptext"><? ?>
                                    <br />
                                    <? ?>
                                    <br />
                                    <??>
                                </span>
                                $<? ?><br />
                                <?php
                                 ?>
                            </div>
                            <div class="mini <? ?>">

                            </div>
                            <br style="clear: both;" />
                    </td>
                    <td>

                    </td>
                </tr>
                <?php //} ?>
        </table>


        <table class="tabla" id="transacciones_sinremision">
            <thead>
                <tr>
                    <th width="500"></th>
                    <th colspan="1" width="250"></th>

                    <th></th>
                </tr>
            </thead>
                <tr>

                    <td></td>

                    <td>

                    </td>

                    <td>
                        <?php  ?>

                            <div class="valor_transaccion tooltip <? ?>">

                                <span class="tooltiptext"><? ?>
                                    <br />
                                    <?  ?>
                                    <br />
                                    <??>
                                </span>
                                $<??><br />
                            </div>
                            <div class="mini <? ?>">
                                <??>

                            </div>
                            <br style="clear: both;" />
                        <?php 

                        ?>
                    </td>
                <?php 


                ?>
                </tr>
        </table>





    </div>
</body>