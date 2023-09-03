 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('admin.partials.headLinks')
</head>

<body>
@include('admin.partials.header')
@include('admin.partials.sidebar')
@yield('content')
@include('admin.partials.footer')
@include('admin.partials.footerLinks')
</body>

</html>
