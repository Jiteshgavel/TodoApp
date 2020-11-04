<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/749d00b807.js" crossorigin="anonymous"></script>
     <title>@yield('title')</title>
    <style>
        body{
          background-color: gray;
        }
    </style>


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Todos App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/todos">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/new-todos">Create Todos <span class="sr-only">(current)</span></a>
              </li>
            
           
          </ul>
         
        </div>
      </nav>




   
   
      <div class="container">
        @if (session()->has('success'))
      <div class="alert alert-success mt-4">{{session()->get('success')}}</div>
        @endif
        @yield('content')
    </div>


</body>
</html>   