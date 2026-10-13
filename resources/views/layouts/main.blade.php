<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titlname')</title>
</head>
<body>
    <div>
        <div>
            <div><a href="/">home</a></div>
            <div><a href="about">about</a></div>
            <div><a href="addproduct">addproduct</a></div>
            <div><a href="contact">contact</a></div>
            <div><a href="project">project</a></div>
        </div>
        @yield('contantbox')
        <div>
    <h1>welcome to my profile</h1>
        </div>
    </div>
</body>
</html>