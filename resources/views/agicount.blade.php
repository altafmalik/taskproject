<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log Count</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="antialiased">
      <div class="container">

      

        <div>
          <h2 class="text-center display-4 py-5">Last CountPage</h2>
        </div>

        <h3>Task 3 - Vehicle Log Count</h3>
        <p>Display the monthly log count with the most recent month at the top</p>
        <table class="table table-bordered table-striped table-hover">
          <thead>
              <th>ID</th>
              <th>Name</th>
              <th>Year-Month</th>
              <th>Count</th>
          </thead>
          @if(count($logcounts) > 0)
            @foreach($logcounts as $row)
                <tr>
                <td>{{$row->vehicle_id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->logyear}}-{{$row->logmonth}}</td>
                <td>{{$row->Count}}
                </tr>
            @endforeach
          @else
                <tr><td><p>No Logcount Found.</p></tr></td>
          @endif
        </table>
      </div>
    </body>
</html>
