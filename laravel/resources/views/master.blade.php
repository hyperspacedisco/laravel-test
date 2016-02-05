<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>About</title>
	<style type="text/css">
	* {
		font-family: sans-serif;
	}

	h1{
		text-align: center;
	}

	nav ul li {
		display: inline-block;
		list-style: none;
		}

	nav ul li a:hover {
		text-decoration: none;
	}

	nav ul li a:visited {
		color: blue;
	}
	</style>
</head>
<body>

	

	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="/contact">Contact</a></li>
			<li><a href="/products">Products</a></li>
		</ul>
	</nav>

	@yield('content')

	<footer>
		<p style="text-align: center">Copyright goes here</p>
	</footer>

</body>
</html>