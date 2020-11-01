<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spring Step</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
        <a class="navbar-brand nav" href="index.php">Ejercicios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link nav" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav" href="calculadora.php">Calculadora</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav" href="gimnasio.php">Gimnasio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav" href="postobon.php">Postobon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav" href="zapatos.php">Spring Step</a>
            </li>
            </ul>
        </div>
        </nav>
    </header>
    <main>
        <div class="container" style="padding-bottom: 50px;">
            <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="img/zapatos.jpg" alt="Zapatos">
                        </div>     
                    </div>
                
                    <div class="col-md-6">
                        <form action="zapatos.php" method="POST">
                            <div class="row">
                                <div class="col">
                                    <img src="img/zapatos1.jpg" class="img-fluid" alt="Zapatos1" name="zapatos1"></img>
                                    <label for="tenis" name="preciotenis">$120.000</label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidad1">
                                </div>
                                <div class="col">
                                    <img src="img/zapatos2.jpg" class="img-fluid" alt="Zapatos2" name="zapatos2" id="botas"></img>
                                    <label for="botas" name="preciobotas">$170.000</label>
                                    <input type="number" class="form-control" placeholder="Cantidad" name="cantidad2">
                                </div>
                            </div> 
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary mt-4" name="btnCalcular">CALCULAR DESCUENTO</button>
                            </div>
                            <br>
                            <?php if(isset($_POST["btnCalcular"])):       
                                
                                $cantidadZapatos1=$_POST["cantidad1"];
                                $cantidadZapatos2=$_POST["cantidad2"];
                                $precio1=120000;
                                $precio2=170000;
                                $dcto3=0.10;
                                $dcto3a8=0.20;
                                $dctomayor8=0.50;
                                
                                $cantidadZ=$cantidadZapatos1+$cantidadZapatos2;
                                $totalCompra=($cantidadZapatos1*$precio1)+($cantidadZapatos2*$precio2);?>

                                    <?php if($cantidadZ>="0" && $cantidadZ<"3"):?>
                                        <?php $totalPagar=$totalCompra?>
                                        <?php echo("El valor total de la compra es ".$totalPagar)?>
                                    <?php elseif($cantidadZ=="3"):?>
                                        <?php echo("El valor total de la compra es ".$totalPagar)?>
                                        <br>
                                        <?php $dcto=$totalCompra*$dcto3?>
                                        <?php echo("Por comprar ".$cantidadZ." pares de zapatos tienes 10% de descuento: ".$dcto)?>  
                                        <?php $totalPagar=$totalCompra-$dcto?>
                                        <br>
                                        <?php echo("Total a pagar: ".$totalPagar)?>
                                    <?php elseif($cantidadZ>"3"&&$cantidadZ<="8"):?> 
                                        <?php echo("Total de la compra: ".$totalCompra)?>
                                        <br>
                                        <?php $dcto=$totalCompra*$dcto3a8?>
                                        <?php echo("Por comprar ".$cantidadZ." pares de zapatos tienes 20% de descuento: ".$dcto)?>  
                                        <?php $totalPagar=$totalCompra-$dcto?>
                                        <br>
                                        <?php echo("Total a pagar: ".$totalPagar)?>
                                    <?php elseif($cantidadZ>"8"):?> 
                                        <?php echo("El valor total de la compra es ".$totalCompra)?>
                                        <br>
                                        <?php $dcto=$totalCompra*$dctomayor8?>
                                        <?php echo("Por comprar ".$cantidadZ." pares de zapatos tienes 50% de descuento: ".$dcto)?>  
                                        <?php $totalPagar=$totalCompra-$dcto?>
                                        <br>
                                        <?php echo("Valor total a pagar ".$totalPagar)?>
                                    <?php else:?>  
                                        <?php echo("Llenar correctamente todos los campos.")?>
                                <?php endif?>
                            <?php endif?>
                        </form>   
                    </div>
            </div>
    
    
    </main>
    <footer class="text-center" style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>© Santiago Quintero Quintero</p>
                    <p>santi.quintero67@gmail.com</p>
                    <p>Sabaneta - Antioquia</p>
                    <p>2020</p>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>