<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      color: #fff;
      font-family: 'Poppins', sans-serif;
    }
    .menu-item {
      display: flex;
      align-items: center;
      padding-inline : 10px;
      padding-block: 2px;
    }
    .menu-item-icon {
      width : 18px;
      color: #fff;
    }
    .menu-item-text {
      margin-block : auto;
      margin-left : 20px;
    }
    .menu-grp-text {
      padding-left: 0;
      margin-top : 3px;
      margin-bottom: 1px;
    }
    ul {
      list-style-type: none;
    }
    svg {
      width : 30px;
      margin-left : 10px;
    }
  </style>

</head>
<body style="background : #121212">


  <div class="container-fluid text-center">
    <div class="row">

      <!-- sidebar -->
      <div class="col-2 p-3"  style="background : #3c3d32">
        <div class=" d-flex justify-content-between align-items-center">
          <div class="text-uppercase text-white">Admin</div>
          <button class="text-dark">toggle</button>
        </div> 
        <div style="width : 80%; margin-inline: auto" class="my-3">
          <img style="max-width: 100%; height: auto;" src="./assets/logo-full.png" alt="">
        </div>
        <div id="user-name" class=" text-center text-white">
          <p class="my-0 fs-3">Mohammed Ahsanul Kabir</p>
          <p>An Authenticated User</p>
        </div>
        <div class="ms-4">
          <a href="#" class="menu-item">
            <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
            <p class="menu-item-text" >Dashboard</p>
          </a>
        </div>
        <p class="menu-grp-text">Data</p>
        <ul>
          <li>
            <a href="#" class="menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
              <p class="menu-item-text" >Manage Team</p>
            </a>
          </li>
          <li>
            <a href="#" class="menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
            </svg>
              <p class="menu-item-text" >Modify Invoice</p>
            </a>
          </li>
          <li>
            <a href="#" class="menu-item">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 13.75c-2.34 0-7 1.17-7 3.5V19h14v-1.75c0-2.33-4.66-3.5-7-3.5zM4.34 17c.84-.58 2.87-1.25 4.66-1.25s3.82.67 4.66 1.25H4.34zM9 12c1.93 0 3.5-1.57 3.5-3.5S10.93 5 9 5 5.5 6.57 5.5 8.5 7.07 12 9 12zm0-5c.83 0 1.5.67 1.5 1.5S9.83 10 9 10s-1.5-.67-1.5-1.5S8.17 7 9 7zm7.04 6.81c1.16.84 1.96 1.96 1.96 3.44V19h4v-1.75c0-2.02-3.5-3.17-5.96-3.44zM15 12c1.93 0 3.5-1.57 3.5-3.5S16.93 5 15 5c-.54 0-1.04.13-1.5.35.63.89 1 1.98 1 3.15s-.37 2.26-1 3.15c.46.22.96.35 1.5.35z" />
            </svg>
              <p class="menu-item-text" >Show Invoice</p>
            </a>
          </li>
        </ul>
        <p class="menu-grp-text">Operation Structure</p>
        <ul>
          <li>
            <a href="#" class="menu-item">
              <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
              <p class="menu-item-text" >Create Department</p>
            </a>
          </li>
          <li>
            <a href="#" class="menu-item">
              <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
              <p class="menu-item-text" >Discount</p>
            </a>
          </li>
          <li>
            <a href="#" class="menu-item">
              <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
              <p class="menu-item-text" >Services</p>
            </a>
          </li>
        </ul>
        <p class="menu-grp-text">Reports</p>
        <ul>
          <li>
            <a href="#" class="menu-item">
              <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
              <p class="menu-item-text" >Revenue</p>
            </a>
          </li>
          <li>
            <a href="#" class="menu-item">
              <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
              <p class="menu-item-text" >Revenue Distribution</p>
            </a>
          </li>
        </ul>
        <p class="menu-grp-text">Operation</p>
        <ul>
          <li>
            <a href="#" class="menu-item">
              <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
              <p class="menu-item-text" >Service Booth</p>
            </a>
          </li>
          <li>
            <a href="#" class="menu-item">
              <img class="menu-item-icon" src="./assets/house-chimney-solid.svg" alt="home icon">
              <p class="menu-item-text" >Create Invoice</p>
            </a>
          </li>
        </ul>
      </div>
      <!-- end of sidebar -->


      <!-- main -->
      <div class="col">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
              <svg xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
          </div>
        </nav>