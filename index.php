<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
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
        <div class="container" style="padding-top: 25px;">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card in.line" style="width: 18rem;">
                        <img src="img/calculadora.jpg" class="card-img-top" alt="Calculadora">
                        <div class="card-body">
                            <h5 class="card-title">Calculadora</h5>
                            <p class="card-text">1.Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación y división de dos números enteros
                            almacenados en 2 variables diferentes (utilice formularios HTML).</p>
                            <a href="calculadora.php" class="btn btn-primary stretched-link">Ir a calculadora</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/gym.jpg" class="card-img-top" alt="Gym">
                        <div class="card-body">
                            <h5 class="card-title">Gimnasio</h5>
                            <p class="card-text">2.El gimnasio Bodytech, lo contrata para desarrollar una aplicación web que permita a sus usuarios calcular el índice de masa corporal </p>
                            <a href="gimnasio.php" class="btn btn-primary stretched-link">Ir a IMC</a>
                        </div>
                    </div>
                </div>
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/salario.jpg" class="card-img-top" alt="Salario">
                    <div class="card-body">
                        <h5 class="card-title">Salario</h5>
                        <p class="card-text">Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora.</p>
                        <a href="postobon.php" class="btn btn-primary stretched-link">Ir a Salario</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="img/zapatos.jpg" class="card-img-top" alt="Spring Step">
                    <div class="card-body">
                        <h5 class="card-title">Spring Step</h5>
                        <p class="card-text">3.Codificar un programa en PHP para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de zapatos que se compren.</p>
                        <a href="zapatos.php" class="btn btn-primary stretched-link">Ir a Spring Step</a>
                    </div>
                </div>
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