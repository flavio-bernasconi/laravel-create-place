<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row mb-5">
        <div class="col-6">
          <a class="btn btn-dark mb-3" href="{{ route('createCompany')}}">Add new Company</a>
          <ul class="list-group list-group-flush">
            @foreach ($arrCompanies as $company)
                <li class="list-group-item mt-3 mb-3 shadow bg-white">
                  <h3>{{$company -> name}}</h3>
                  <h5>{{$company -> mail}}</h5>
                  <p>{{$company -> phone}}</p>
                  <a href="#">{{$company -> website}}</a>
                </li>
            @endforeach
          </ul>
        </div>

      </div>

    </div>



  </body>
</html>
