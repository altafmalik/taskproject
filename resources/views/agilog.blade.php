<!DOCTYPE html>
@php
   $truckname = '';
   $lat = -33.9199671;
   $lng = 150.9641462;
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" type="text/css" href="/css/addressmap.css" />
        
        <title>Last Info</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="antialiased">

    <div class="container">
		<div>
			<h2 class="text-center display-4 py-5">Last Info Page</h2>
		</div>

	

		<h3 class="mb-5">Task 4 - Vehicle Last Info</h3>
		
		@if(count($data['trucklogs']) > 0)
		<h3 class="mb-5"><p>Task 5 - Address: {{$data['address']}}</p></h3>
		<div class="table-responsive">
			<table class="table table-bordered table-alternate table-hover table-striped mb-5">
					<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Local Time</th>
					<th>Latitude</th>
					<th>Longitude</th>
					<th>Speed</th>
					<th>Direction</th>
					</thead>
		
				@foreach($data['trucklogs'] as $row)
					<tr>
					<td>{{$row->vehicle_id}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->local_time}}</td>
					<td>{{$row->lat}}</td>
					<td>{{$row->lng}}</td>
					<td>{{$row->speed}}</td>
					<td>{{$row->direction}}</td>
					</tr>
					@php
					$truckname = "{$row->name}";
					$lat = $row->lat;
					$lng = $row->lng;
					@endphp
				@endforeach
			</table>
		</div>

		<h3><p>Task 6 - Google Map</p></h3> 
      	

	  </div>
	  <div class="container shadow rounded mb-5" id="map"></div>
      
      @else
            No Log information found..
      @endif
      <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCp_NU8Qow6M7I6OJv51RULN4F6mGtpeXA&callback=initMap&v=weekly"
        async
      ></script>
      <script>
          //map latitude and longitude from DB, and name of truck as marker. sending to javasript variable from laravel blade.
            var truckname = '{{$truckname}}';
            var lat = {{$lat}};
            var lng = {{$lng}};
         
          </script>
      <script src="/js/addressmap.js"></script>
    </body>
</html>
