<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>Upload Image & File</h1>

          @if (count($errors) > 0)
               <div class="alert alert-danger">
                   <strong>Sorry!</strong> Something wrong with your input data.<br><br>
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
          @endif

          {!! Form::open(array('route' => 'upload.store','method'=>'POST', 'files'=>true)) !!}
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Image:</strong>
                {!! Form::file('image', null, array('class' => 'custom-file-control')) !!}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Sinopsis:</strong>
                {!! Form::text('sinopsis', null, array('placeholder' => 'Sinopsis','class' => 'form-control')) !!}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <p>Date: <input type="text" id="datepicker" name="date" class="form-control" placeholder="date"></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </body>
</html>
