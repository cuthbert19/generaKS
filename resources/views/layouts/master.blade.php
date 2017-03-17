<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/app.css">

  <script src="/js/app.js"></script>
</head>
<body id="app">

  @include('layouts.header')

  <div class="container">



    <div class="row">

      {{-- sidebar --}}
      <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">

        @include('layouts.sidebar')

      </nav>


      {{-- main content --}}

      <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">

        @if ( isset($projects) )

        @if ($projects->count() > 0)

        @yield('content', '<h1>Principale</h1>' )

        @endif

        @else

        <h1 class="display-1">Nessun progetto definito</h1>

        @endif

      </div>


    </div>

  </div>


  <!-- jQuery first, then Tether, then Bootstrap JS. -->
    {{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

    {{-- per i tooltip --}}
    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
      });
    </script>

  </body>
  </html>
