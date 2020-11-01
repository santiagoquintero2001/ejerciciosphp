<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio</title>
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
                <div class="row mt-5 ml-5">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top w-100 img-fluid" src="img/gym.jpg" alt="Gimnasio">                      
                        </div>     
                    </div>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <form action="gimnasio.php" method="POST">
                            <div class="row mt-5">
                                <div class="col">
                                    <input type="decimal" class="form-control" placeholder="Peso (Kg)" name="peso">
                                </div>
                                <div class="col">
                                    <input type="decimal" class="form-control" placeholder="Altura (Metros)" name="altura">
                                </div>
                            </div> 
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary mt-4" style="padding-bottom: 15px;" name="btnCalcular">CALCULAR</button>
                            </div>
                            <?php if(isset($_POST["btnCalcular"])):       
                                
                                $peso=$_POST["peso"];
                                $altura=$_POST["altura"];                               
                              
                                $operacion= $peso/($altura*$altura)?>

                                <?php if($operacion<18.5&&$operacion>=10):?>
                                    <img src="img/pesoinsu.png" class="mx-auto d-block img-fluid" alt="pesoInsuficiente">
                                    <?php echo("<br>")?>
                                    <?php echo("Tu indice de masa corporal (IMC) es: ".$operacion)?>  
                                    <?php echo("<br>")?>
                                    <?php echo("Tienes peso insuficiente")?>
                                <?php elseif($operacion>=18.5&&$operacion<=24.9):?> 
                                       <img src="img/pesonormal.png  "class="mx-auto d-block img-fluid" alt="pesonorhombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal (IMC) es: ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Tienes peso Normal")?>
                                <?php elseif($operacion>=25&&$operacion<=26.9):?> 
                                       <img src="img/sobrepeso.png  "class="mx-auto d-block img-fluid" alt="sobrepeso1hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal (IMC) es: ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Tienes sobrepeso grado I")?>
                                <?php elseif($operacion>=27&&$operacion<=29.9):?> 
                                       <img src="img/sobrepeso.png  "class="mx-auto d-block img-fluid" alt="sobrepeso2hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal (IMC) es: ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Tienes sobrepeso grado 2 (Preobesidad)")?>
                                <?php elseif($operacion>=30&&$operacion<=34.9):?> 
                                       <img src="img/obesidad.png  "class="mx-auto d-block img-fluid" alt="obesidad1hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal (IMC) es: ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Tienes obesidad tipo I")?>
                                <?php elseif($operacion>=35&&$operacion<=39.9):?> 
                                       <img src="img/obesidadtipo.png  "class="mx-auto d-block img-fluid" alt="obesidad2hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal (IMC) es: ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("tienes obesidad tipo II")?> 
                                <?php elseif($operacion>=40&&$operacion<=49.9):?> 
                                       <img src="img/obesidadm.png  "class="mx-auto d-block img-fluid" alt="obesidad3hombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal IMC es: ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Tienes obesidad tipo 3 (Obesidad mórbida)")?>
                                <?php elseif($operacion>=50):?> 
                                       <img src="img/obesidadm.png  "class="mx-auto d-block img-fluid" alt="obesidadexthombre">
                                       <?php echo("<br>")?>
                                        <?php echo("Tu indice de masa corporal (IMC) es: ".$operacion)?>  
                                        <?php echo("<br>")?>
                                        <?php echo("Tienes obesidad tipo 4 (Obesidad extrema)")?> 
                                <?php else:?>  
                                        <?php echo("Ingresar nuevamente los datos")?>
                                <?php endif?>
                            <?php endif?>
                        </form>   
                    </div>
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