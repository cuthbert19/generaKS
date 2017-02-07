<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<!-- 	<style>
		table {
			border: 2;
			border-style: solid;
		}

		td {
			border-style: solid;
			border: 1;
			border-color: red;
		}

	</style> -->
</head>
<body>
	<h1>Welcome to the hosts index!</h1>

	<table>
		<tr>
			<th>Hostname</th>
			<th>Device per autodeploy</th>
			<th>MAC Address</th>
			<th>Progetto</th>
		</tr>
		@foreach ($hosts as $host) 
		<tr>
			<td>{{$host->name}}</td>
			<td>{{$host->netdevice}}</td>
			<td>{{$host->macaddress}}</td>
			<td>{{$host->project->name}}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>