<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, intial-scale=1.0" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<title>Bayani's DB</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div id="app">
<br><br>
<center>
<table class="table-auto border-t-2 shadow-lg">
<tr>
<td>
<div>
<center>
<br>
<main-title></main-title>
<contact-component></contact-component></center>
<br></center>
</div>
</tr>
</td>
</table>
</center>
<center>
<div class="container shadow-lg">
    @yield('content')
</div>
</div>
<br>
</center>
</body>
</html>
