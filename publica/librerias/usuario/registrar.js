const registro = document.getElementById('formulario');
const boton = document.querySelector('#btn-registrar');
const mensaje = document.querySelector('#mensaje');

registro.addEventListener('submit', function(e) {
	e.preventDefault();
});

boton.addEventListener('click', Enviar);

function Enviar() {
	if (!Validar_Campos()) {
		mensaje.innerHTML = "<p>Campos Vacíos</p>";
	} else {
		let datos = new FormData(registro);

		fetch('Incluir_Usuario', {
			method: 'POST',
			body: datos
		}) .then(function(response) {
			return response.text();
		}) .then(function(respuesta) {
			registro.reset();
			mensaje.innerHTML = respuesta;
		}) .catch(function(error) {
			console.log(error);
		})
	}
}

function Validar_Campos() {
	let elementos = registro.elements;

	for (var i = 0; i < elementos.length; i++) {
		if (elementos[i].type == 'text' && elementos[i].value == "") {
			return false;
		} else if (elementos[i].type == 'date' && elementos[i].value == "") {
			return false;
		} else if (elementos[i].type == 'select-one' && elementos[i].value == "") {
			return false;
		}
	}

	return true;
}