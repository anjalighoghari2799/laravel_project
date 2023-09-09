<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="{{ asset('cssfile/style.css')  }} ">

    <title>Document</title>
</head>
<body>
    <section class="intro">
        <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');">
          <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row"> <h3 class=" text-center text-white col-9">PRODUCT DETAIL</h3>
                       <a href="{{route('view.form') }} "> <h3 class="text-center col-12 btn btn-success">ADD NEW</h3></a>

                    </h3></div>

                  <div class="card bg-dark shadow-2-strong">
                    <div class="card-body">
                      <div class="table-responsive">






                        <table class="table table-dark table-borderless mb-0">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">DETAIL</th>
                              <th rowspan="2" class="text-center">ACTION</th>

                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($products as $product)
                            <tr>
                              <th scope="row">{{ $loop->index+1}} </th>
                              <td>{{$product->name}} </td>
                              <td>{{$product->detail}} </td>
                              <td><a href="/data/{{$product->id}}/edit"><input type="button" class="btn btn-warning btn-sm" value="EDIT"></td></a>
                              <td><a href="/data/{{$product->id}}/delete"><input type="button" class="btn btn-danger btn-sm" value="DELETE"></td></a>
                           </tr>

                          </tbody>
                          @endforeach
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>







