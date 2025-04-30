<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<body class="container">
    <h1>Admin Login</h1>

    
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error }}</li>
        @endforeach
    @endif

    @if(Session::has('error'))
        <li>{{ Session::get('error') }}</li>
    @endif

    @if(Session::has('success'))
        <li>{{ Session::get('success') }}</li>
    @endif
    <form class="mt-4 pt-2" action="{{ route('admin.login_submit')}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>