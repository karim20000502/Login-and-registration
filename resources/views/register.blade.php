<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="text-danger">K</span>ARIMO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Service</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Login</a>
                  </li>
                  
                </ul>
            </form>
          </div>
        </div>
      </nav><br><br><br>


     <div class="container w-50">
        @if (Session::has('success'))
            <div class="alert alert-success text-center" role="alert">
                {{ Session::get('success') }}
            </div>

        @endif
        <div class="row">
            <h1 class="text-primary text-center">REGISTRATION</h1><br>
            <form action="{{ route('register') }}" method="post">
                @csrf
            <div class="mb-3 row">
              <label for="inputName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="inputName">
              </div>
            </div>
            <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="inputemail">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label"> Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword">
            </div>
          </div>

          <div class="mb-3">
            <div class="d-grid">
                <button class="btn btn-primary">Register</button>
            </div>
          </div>
        </form>
        </div>
     </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
