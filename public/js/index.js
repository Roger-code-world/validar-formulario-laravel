
const btn = document.querySelector("#btn-enviar");
const form = document.querySelector("#form");
btn.addEventListener("click", (e) =>{
	e.preventDefault();
	const datos = new FormData(form);
	fetch('guardar',{
		method: 'post',
		body:datos
	})
	.then(response => response.json())
	.then(result => {
		console.log(result)
		if (result.alerta == "danger") {
			
			let nombre = document.querySelector(".errors-nombre");
			nombre.textContent = result.nombre[0];
			let primer = document.querySelector(".errors-primer");
			primer.textContent = result.primer[0];
			let segundo = document.querySelector(".errors-segundo");
			segundo.textContent = result.segundo[0];
			let email = document.querySelector(".errors-email");
			email.textContent = result.email[0];
			let password = document.querySelector(".errors-password");
			password.textContent = result.password[0];
			let confpassword= document.querySelector(".errors-confirmarpassword");
			confpassword.textContent = result.confirmarpassword[0];
			let direccion = document.querySelector(".errors-direccion");
			direccion.textContent = result.direccion[0];
			let ciudad = document.querySelector(".errors-ciudad");
			ciudad.textContent = result.ciudad[0];
			let rol = document.querySelector(".errors-rol");
			rol.textContent = result.rol[0];
			let postal = document.querySelector(".errors-postal");
			postal.textContent = result.postal[0];

			let badge = document.querySelectorAll(".badge");
			badge.forEach(span => { 
				span.style.display = "block"
				span.style.textAlign = "left";
			});

			setTimeout(() => {
			badge.forEach(span => { 
				span.style.display = "none";
			});
			}, 3000);

		}

		if (result.alerta == "success") {
			const success = document.querySelector(".alert");
			success.textContent = "El formulario se valido correctamente";
			success.style.display = "block";
		}
		
	})
});