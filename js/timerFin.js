    function registerTime() {
        const endTime = new Date();
        const timeSpent = endTime - startTime;

        let totalTimeSpent = localStorage.getItem('totalTimeSpent');
        if (totalTimeSpent) {
            totalTimeSpent = parseInt(totalTimeSpent) + timeSpent;
        } else {
            totalTimeSpent = timeSpent;
        }

        // Envía los datos a log-time.php usando fetch o XMLHttpRequest
        fetch('../db/log-time.php', {
            method: 'POST',
            body: JSON.stringify({ timeSpent: totalTimeSpent }),
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(response => {
            // Limpia almacenamiento local después de enviar
            localStorage.removeItem('totalTimeSpent');
            console.log('Tiempo registrado correctamente');
        }).catch(error => {
            console.error('Error al registrar el tiempo:', error);
        });
    }

    let startTime;

    window.onload = function() {
        startTime = new Date();
        registerTime();
    }

    function onStopTimeButtonClick() {
        registerTime();
        alert('Tiempo registrado correctamente');
    }