<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
    <title>Home</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="antialiased">
    <div class="container">
        <div class="gap-2">
            <h2 class="display-2 p-4 text-center">Home Page</h2>
            <div class="shadow-sm p-5 rounded mb-2 border">
                
                <h3 class="text-primary mb-3" id="task_1">TASK 1</h3>
                
                <h4 class="mb-2">Create “drivers” Table, Model and Insert Mock/Fake data</h4>
                <p> To test this task, run command on <b>'php artisan migrate'</b>,
                    this command will run migration tool and create a driver table and
                    insert drivers.(note: kindly remove old 'drivers', 'migrations',
                    'personal_access_tokens tables')</p>
            </div>
            <div class="shadow-sm p-5 rounded mb-2 border">
               
                <h3 class="text-primary mb-3">TASK 2</h3>
                
                <h4 class="mb-2"> Create “Active Vehicle List” page</h4>
                <p> click link to view all active vehicle list. <a href="http://45.76.125.23/vehicles">Vehicles</a></p>
            </div>
        </div>
    </div>
</body>

</html>