<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Laravel 9 Upload File</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <br>
    
    <div class="container">
      <div class="row">
      <div class="col-md-4">
        <form action="{{ route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
          <label for="name">Name:</label>
          <input type="text" class="form-control " id="name" name="name" value="{{old('name')}}">
          @if($errors->has('name'))
          <span class="text-danger">
            {{ $errors->first('name') }}
          </span>
          @endif
        </div>
        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
          <label for="image">File:</label>
          <input type="file" class="form-control " id="image" name="image" value="{{old('image')}}">
          @if($errors->has('image'))
          <span class="text-danger">
            {{ $errors->first('image') }}
          </span>
          @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
      
    </div>
  </body>
</html>