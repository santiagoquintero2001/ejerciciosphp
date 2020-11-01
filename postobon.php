<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postobon</title>
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
            <div class="row mt-5 justify-content-center">
              <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top w-100 img-fluid" src="img/salario.jpg" alt="Salario">
                </div>     
              </div>
              <div class="col-md-8">
                    <form action="postobon.php" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-md-8 mt-4">
                                <input type="number" class="form-control" placeholder="Ingresa las horas trabajadas" name="horas">
                            </div>                    
                        </div>
                        <div class="row justify-content-center mt-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary text-center" name="btnCalcular">Calcular Salario</button>
                                </div>
                                <?php 
                                if(isset($_POST["btnCalcular"])){
                                    $horas = $_POST["horas"];
                                    
                                    
                                    if(!empty($horas)){
                                      if($horas <=40){
                                        $resultado = $horas *20000;
                                      }
                                      elseif($horas > 40){
                                        $resultado = ($horas -40)*25000+(40*20000);
                                      }
  
                                    }
                                    else{
                                        echo ("Debes ingresar las horas trabajads: ".$resultado);
                                    }
                                  }  
                                ?>
                                <div class="col-md-8 mt-4">
                                    <input type="number" class="form-control" placeholder="Salario" name="resultado" value="<?php echo($resultado)?>">
                                </div>
                            </div>
                        </div>
                        </form>  
                      </div>
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