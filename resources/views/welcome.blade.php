<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}
			a{
				text-decoration: none;
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
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
			.btn {
			  display: inline-block;
			  padding: 2% 10%;
			  margin-bottom: 0;
			  font-size: 30px;
			  font-weight: bold;
			  line-height: 1.42857143;
			  text-align: center;
			  white-space: nowrap;
			  vertical-align: middle;
			  cursor: pointer;
			  border: 1px solid black;
			  border-radius: 4px;
			  background: #c2c2c2;
			  color: #000000;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Welcome VAMASHIP</div>
				<a href="{{url('auth/login')}}" class="btn quote">LOG IN</a>
			</div>
		</div>
	</body>
</html>
