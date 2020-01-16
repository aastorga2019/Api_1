<!DOCTYPE html>
<html Lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=3.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1 id="datos"></h1>


	<script>
/* Ejemplo simple de API, es decir, se invoca recurso o pagina que mantiene datos fijos */			fetch('http://127.0.0.1/api_1/datos.php')   
	/*	fetch('http://127.0.0.1/api_1/consultar.php')   */ 

		.then(datos=>datos.json())
		.then(datos=>{
			document.getElementById('datos').innerHTML = `
			Dolares: ${datos.dolar} - Euros: ${datos.euro}
	
			`
		})	

	</script>

</body>
</html>
