<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-2 p-3 d-flex justify-content-between align-items-center text-white"  style="background : #3c3d32">
        <div class="text-uppercase">Admin</div>
        <button>menu</button>
      </div>
      <nav class="navbar navbar-expand-lg bg-body-tertiary col">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CMH CC</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>


      <div class="col-2">
        3 of 3
      </div>
    </div>




    <div class="center-div" style="color: red;">
    <?php
      $person = [
        'first_name' => 'ahsan',
        'last_name' => 'kabir',
        'email' => 'makabir@yahoo.com'
      ];
      echo $person['first_name'];
      ?>
      <br>
      <?php
      $people = [
        [
          'first_name' => 'mamun',
        'last_name' => 'mamun',
        'email' => 'mamun@yahoo.com'
        ],
        [
          'first_name' => 'rakib',
        'last_name' => 'hasan',
        'email' => 'rakab@yahoo.com'
        ],
        ['first_name' => 'faisal',
        'last_name' => 'ahmed',
        'email' => 'faisal@yahoo.com']
      ];
      echo $people[0]['email'];
      echo $person['first_name'];
      echo date("s");
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
