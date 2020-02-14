(function(){
	//DOM
	/* let impresoras = document.querySelector('#impresoras');
	let periodo = document.querySelector('#periodo');
	let contador = document.querySelector('#contador');
	let formulario = document.querySelector('#formulario').addEventListener('submit', function(e){
		e.preventDefault()
		console.log("Hola")
	}); */
	if(document.querySelector('.error')){
		error = document.querySelector('.error');
		error.innerHTML = `
		<span class="close">cerrar</span>
      	<h2>Ocurrió un error</h2>
      	<h2>Llenar todos los datos</h2>
		`;
		console.log(error);
	}
	else if(document.querySelector('.error_count')){
		error_count = document.querySelector('.error_count');
		console.log(error_count);
		error_count.innerHTML =`
		<span class="close">cerrar</span>
     	 <h2>Ocurrió un error</h2>
      	<h2>Debes de incluir 3 archivos</h2>
		`;
	}
	if(document.querySelector('.close')){

		document.querySelector('.close').addEventListener('click',function(){
			window.location.replace("http://localhost/pagoImpresora/index.php");
		});
	}
	

})()

/* 
window.location.replace("http://localhost/pagoImpresora/index.php"); */