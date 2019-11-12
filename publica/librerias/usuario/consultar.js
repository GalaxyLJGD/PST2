(function(){
	const tabla = document.getElementById('tabla');
	const mensaje = document.querySelector('#mensaje');

	fetch('Ver_Usuarios')
	.then(function(response) {
		return response.text();
	}) .then(function(respuesta) {
		tabla.innerHTML = respuesta;
		if (tabla.childElementCount  > 0) {
			let contenido = tabla.children[0].children[1];
			Opciones(contenido);
		} else {
			console.log('No hay datos');
		}
	}) .catch(function(error) {
		console.log(error);
	})

	function Opciones(contenido) {
		for (var i = 0; i < contenido.childElementCount; i++) {
			let usuario = contenido.children[i];

			usuario.children[5].children[0].addEventListener('click', Editar);
			usuario.children[6].children[0].addEventListener('click', Cambiar_Estatus);
			usuario.children[7].children[0].addEventListener('click', Eliminar);
		}
	}

	function Editar() {
		console.log(`Editando ${this.value}`);
	}

	function Cambiar_Estatus() {
		let datos = new FormData();
		datos.append('cedula', this.value);

		fetch('Actualizar_Estatus', {
			method: 'POST',
			body: datos
		}) .then(function(response) {
			return response.text();
		}) .then(function(respuesta) {
			mensaje.innerHTML = respuesta;
			setTimeout(window.location = '', 3000);
		}) .then(function(error) {
			console.log(error);
		})
	}

	function Eliminar() {
		if (!confirm(`¿Está seguro(a) de eliminar al usuario: ${this.value}?`)) {
			mensaje.innerHTML = "<p>¡Transacción cancelada! El usuario no fue eliminado";
		} else {
			let datos = new FormData();
			datos.append('cedula', this.value);

			fetch('Eliminar_Usuario', {
				method: 'POST',
				body: datos
			}) .then(function(response) {
				return response.text();
			}) .then(function(respuesta) {
				mensaje.innerHTML = respuesta;
				window.location = "";
			}) .then(function(error) {
				console.log(error);
			})
		}
	}
}());

