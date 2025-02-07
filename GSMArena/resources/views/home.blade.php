{{--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Include Vite assets -->
    @vite(['resources/css/home.css', 'resources/js/app.js'])
</head>
<body>
    <div id="home"></div>
</body>
</html> --}}


{{--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Welcome to the Home Page</h1>
    <p>Here is the data:</p>
    <pre>{{ print_r($homeData, true) }}</pre>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Include Vite assets -->
    @vite(['resources/css/home.css', 'resources/js/app.js'])
</head>
<body>
    <div id="home"></div>

    <!-- Optionally, include a footer or other elements -->
    @yield('content')
</body>
</html>
