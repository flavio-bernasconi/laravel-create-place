<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
  </head>
  <body>
    <div class="container mt-5">
      <a class="btn btn-dark mb-3" href="{{ route('createCompany')}}">Add new Company</a>
      <ul class="list-group list-group-flush">
        @foreach ($arrCompanies as $company)
            <li class="list-group-item list-group-item-action pb-2">
              {{$company -> name}}
              <br>
              {{$company -> mail}}
              <br>
              {{$company -> phone}}
              <br>
              {{$company -> website}}
            </li>
        @endforeach
      </ul>
    </div>



  </body>
</html>
