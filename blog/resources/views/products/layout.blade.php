<!DOCTYPE html>
<html>
<head>
<title>Bayani's DB</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div id="app">
<center>
<main-title></main-title>
<br>
<contact-component></contact-component></center>

<center>
<div class="container">
    @yield('content')
</div>
</div>
<br>
</center>
</body>
</html>
