<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">

  </head>
  <body>
    <div class="container pt-5 pl-5">


      <div class="row ">
        <div class="col-12 mb-3">
          <a href="{{ route('start')}}" class="">Back</a>
        </div>
        <div class="col-12">
          <form action="{{ route('storeCompany')}}" method="post" >
            @csrf
            @method('POST')
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone"  placeholder="Phone">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Mail</label>
                <input type="text" class="form-control" name="mail"  placeholder="Mail">
              </div>
              <div class="form-group col-md-6">
                <label>Website</label>
                <input type="text" class="form-control" name="website"  placeholder="Website">
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Add Company</button>
          </form>
        </div>

      </div>

    </div>


  </body>
</html>
