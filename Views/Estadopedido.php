<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
  </script>

  <title>Helpdesk Pro</title>
</head>

<style>

#imagenpedido{

min-width: 550px;
max-width: 550px;
}



      </style>

<body>
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Helpdesk</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03"
        aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-6 m-5">
        <div class="d-flex justify-content-center">
          <h3>Consulta tu pedido</h3>
        </div>
        <div class="bd-example">
          <form class="row g-2 needs-validation was-validated" action="clientController.php" method="POST"
            novalidate="">
            <div class="col-12">
              <label for="validationCustom01" class="form-label">Ingresa el número de referencia</label>
              <input type="text" class="form-control" id="validationCustom01" name="numeroderecibo"
                placeholder="Ingresa aqui" required="">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
                     <button class="btn btn-primary" type="submit">Consultar</button>
              </form>
        </div>
      </div>
      <div class="col-4">
       <img src="/HELPDESK/Img/Imagenesgenerales/envio.jpg" class="fluid rounded mt-4" id="imagenpedido" alt="">
  
      </div>
 </div>
  </div>


  
  <div class="container">
    <div class="d-flex justify-content-center ">
      <h1>Resultados de la busqueda</h1>

    </div>


  </div>




  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Inicio</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Sobre nosotros</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Precios</a></li>
      </ul>
      <p class="text-center text-muted">© 2021 Grupo 7 NRC</p>
    </footer>
  </div>

</body>

</html>