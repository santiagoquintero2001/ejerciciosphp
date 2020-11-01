<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
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
                  <img class="card-img-top w-100 img-fluid" src="img/calculadora.jpg" alt="Calculadora">
                </div>     
                </div>
            <div class="row mt-5 ml-5">
                <div class="col-md-8">
                    <form action="calculadora.php" method="POST">
                        <div class="row mt-5">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Numero 1" name="numero1">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" placeholder="Numero 2" name="numero2">
                            </div>
                        </div>
                            <select class="form-control mt-5" name="operaciones">
                                <option value="0">Elija una operación</option>
                                <option value="1" >Suma</option>
                                <option value="2">Resta</option>
                                <option value="3">Multiplicación</option>
                                <option value="4">División</option>
                            </select>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4" name="btnCalcular">CALCULAR</button>
                            </div>
                            <?php if(isset($_POST["btnCalcular"])){       

                                $numero1=$_POST["numero1"];
                                $numero2=$_POST["numero2"];
                                $operaciones=$_POST["operaciones"];

                                switch($operaciones){
                                    case 0:
                                        echo("Elija una operación.");
                                        break;
                                    case 1:
                                        $resultado=$numero1+$numero2;
                                        break;
                                    case 2:
                                        $resultado=$numero1-$numero2;
                                        break;
                                    case 3:
                                        $resultado=$numero1*$numero2;
                                        break;
                                    case 4:
                                        $resultado=$numero1/$numero2;
                                        break;
                                    default;
                                        echo("Elija una operación.");
                                
                                    }
                                }    
                            ?>
                            <div class="col mt-4">
                                <input type="number" class="form-control" placeholder="Resultado" name="resultado" value="<?php echo($resultado)?>">
                            </div> 
                    </form>           
                </div>
            </div>
            <hr>  
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