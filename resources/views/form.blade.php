<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact Form Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>

<body class="bg-dark">



  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 mt-5 bg-light rounded">
        <h1 class="text-center font-weight-bold text-primary">Product Details</h1>
        <hr class="bg-light">
        <h5 class="text-center text-success"></h5>
        <form action="/form/store" method="POST" id="form-box" class="p-2">
            @csrf
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          </div>



          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="	far fa-id-card"></i></span>
            </div>
            <textarea name="detail" id="msg" class="form-control" placeholder="Write your Detail" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="POST">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
