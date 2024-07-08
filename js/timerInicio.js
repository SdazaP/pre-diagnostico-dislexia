let startTime;
window.onload = function() {
    startTime = new Date();
}

window.onbeforeunload = function() {
    const endTime = new Date();
    const timeSpent = endTime - startTime;

    let totalTimeSpent = localStorage.getItem('totalTimeSpent');
    if (totalTimeSpent) {
        totalTimeSpent = parseInt(totalTimeSpent) + timeSpent;
    } else {
        totalTimeSpent = timeSpent;
    }
    localStorage.setItem('totalTimeSpent', totalTimeSpent);
}