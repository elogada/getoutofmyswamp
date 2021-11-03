<!DOCTYPE html>
<html>
<head>
<title>Bayani's DB</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div id="app">
<main-title></main-title>

<div class="container">
    @yield('content')
</div>
</div>

</body>
</html>
