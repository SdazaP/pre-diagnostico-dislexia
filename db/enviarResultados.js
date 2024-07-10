function enviarResultados() {
    fetch('guardar_resultados.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            idUsuario: usuarioId, 
            idEvaluacion: evaluacionId, 
            resultados: resultados
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Resultados guardados exitosamente.');
        } else {
            alert('Hubo un problema al guardar los resultados.');
        }
    })
    .catch(error => console.error('Error:', error));
}
