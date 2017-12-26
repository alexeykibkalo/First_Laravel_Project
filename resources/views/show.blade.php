
<!doctype html>
<title>Firs Laravel Project</title>
</head>
<body>
<form action="/create" method="get">
<p>First name : {{$user->firstName}}</p>
<p>Second name : {{$user->secondName}}</p>
<p>Phone: {{$user->phone}}</p>
</form>
</body>
</html> 