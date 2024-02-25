window.onload = function() {
    var preguntarEdad = sessionStorage.getItem('preguntar_edad');

    if (!preguntarEdad || preguntarEdad === 'si') {
        realizarPreguntaEdad();
    }
};

function realizarPreguntaEdad() {
    var respuesta = confirm("¿Eres mayor de edad?");
    if (respuesta == true) {
        sessionStorage.setItem('preguntar_edad', 'no');
        alert("¡Bienvenido!");
    } else {
        alert("Lo siento, esta página es solo para mayores de edad.");
        window.location.href = "https://www.youtube.com/watch?v=hBjvM0OY8Vo";
    }
}

window.addEventListener('beforeunload', function() {
    if (sessionStorage.getItem('preguntar_edad') !== 'no') {
        sessionStorage.setItem('preguntar_edad', 'si');
    }
});


