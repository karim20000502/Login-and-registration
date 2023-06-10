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
                <a class="nav-link active" aria-current="page" href="#">Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Article</a>
              </li>
            </ul>
            <form class="d-flex" role="search" action="{{ route('logout') }}" method="POST">
                @csrf
                @method('DELETE')
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item">
                    <button class="nav-link active btn btn-danger" aria-current="page">LOGOUT</button>
                  </li>
                </ul>
            </form>
          </div>
        </div>
      </nav><br><br>
      <div class="container-fluid">
        <h1 class="text-danger text-center"><span class="text-dark">Welcome</span> , {{ Auth::user()->name }}</h1>
      </div>

</body>
</html>
