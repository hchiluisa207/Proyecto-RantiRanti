@extends('../layouts.pantillacrud')
@section('contenido')

<form class="form-horizontal">
    <div class="form-inline">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div>
        <input type="text" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-inline">
      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <div >
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-inline ">
      <div class="col-sm-offset-11 col-sm-10">
        <button type="submit" class="btn btn-success">Sign in</button>
      </div>
    </div>
  </form>
@endsection