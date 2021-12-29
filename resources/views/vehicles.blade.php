<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Active Vehicles</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <style>
            .font-mono{
                font-family: 'Roboto Mono', 'Ubuntu mono', monospace;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="py-5">
                <h3 class="display-2 text-center">Task 2 - Active Vehicles List</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered ">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>AgiDrive</th>
                        <th>&nbsp;</th>
                    </thead>
                    @if(count($vehicles) > 0)
                        @foreach($vehicles as $vehicle)
                            <tr>
                            <td>{{$vehicle->id}}</td>
                            <td>{{$vehicle->name}}</td>
                            <td>{{$vehicle->is_agidrive}}</td>
                            <td>
                                @if($vehicle->is_agidrive == 'on')
                                <button type="button " class="font-mono btn btn-sm btn-outline-danger m-1" onclick="location.href='{{ url('agicount') }}/{{$vehicle->id}}'">Log Count</button>
                                <button type="button " class="font-mono btn btn-sm btn-outline-primary m-1" onclick="location.href='{{ url('agilog') }}/{{$vehicle->id}}'">Last Info</button>
                                @else
                                    &nbsp;
                                @endif
                            </td>
                            </tr>
                        @endforeach
                    @else
                            <tr><td><p>No Vehicle Found.</p></tr></td>
                    @endif
                </table>    
            </div>
            
      </div>

    </body>
</html>
