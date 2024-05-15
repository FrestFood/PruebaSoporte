function iniciar(boton) {
    var csrf = document.getElementById("csrf").getAttribute("content");

    setTimeout(function () {
        fetch("/iniciar", {
            method: "POST", // Método HTTP
            headers: {
                "Content-Type": "application/json",
                "X-Csrf-Token": csrf, // Especificando el tipo de contenido
            },
            body: JSON.stringify({ user_id: null }), // Convertimos el objeto JavaScript a una cadena JSON
        })
            .then((response) => {
                if (response.status === 200) {
                    //Todo bien por aquí
                } else {
                    boton.innerText =
                        "Ha ocurrido un error, por favor contacte a soporte.";
                }
            }) // Transforma la respuesta en JSON
            .then((data) => console.log(data)) // Maneja los datos de respuesta
            .catch((error) => {
                console.log(error);
                boton.innerText =
                    "Ha ocurrido un error, por favor contacte a soporte.";
            }); // Maneja errores
    }, 1000);
}
