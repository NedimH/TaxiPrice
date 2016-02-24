<!DOCTYPE html>
<html>
<head>
    <title>Vjezbe</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 700;
            font-family: 'Lato';
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 50px;
        }
        .title2 {
            font-size: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            @yield('content')
        </div>
        <div class="title2">
            @yield('content2')
        </div>
    </div>
</div>
</body>
</html>