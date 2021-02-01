<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style type="text/css">
    #all{
      padding-top: 100px;
    }
  </style>
</head>
<body>
  <div class="row">
        <div class="col-lg-3">
          <h1 class="my-4">Menu</h1>
          <div class="list-group">
            
            <a href="houses.php" class="list-group-item">Houses</a>
            <a href="tenants.php" class="list-group-item">tenants</a>
            <a href="water.php" class="list-group-item">water</a>
            <a href="payments.php" class="list-group-item">payments</a>
            <a href="unpaid.php" class="list-group-item">unpaid</a>
           
          </div>
          <h1 class="my-4">Account Info</h1>
           <li class="list-group">
            <ul class="list-group-item">User: <span class="float-right"></span></ul>  
          </li>
      </div>
      <div class="col-lg-9" id="all">
        <div class="jumbotron">
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:#9184ab!important">
      <h3>Sun Jua Apartments</h3>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
      
        <form class="form-inline col-4 mt-2 mt-md-0" method="GET" action="/search">
          <input class="form-control mr-sm-2 col-9" type="text" name="q" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown" >
            <span class="nav-link dropdown-toggle" data-toggle="dropdown" href="/parts">menu</span></span>
            <div class="dropdown-menu dropdown-menu-right ">
              
              <a class="dropdown-item" href="/water">water</a>
              <a class="dropdown-item" href="/late">late</a>
              <a class="dropdown-item" href="/defaulters">defaulters</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="/logout">Logout </a>
            </div>  
          </li>
                  
        </ul>
      </div>
    </nav><br><br><br>
    
         
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>