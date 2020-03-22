document.addEventListener("DOMContentLoaded", function() {
    fetch('http://localhost:8080/server/get_flora')
    .then(function(response) {
        return response.json();
    })
    .then(function(myJson) {
        Object.values(myJson)[0].forEach(element => {
            $("#comentarios").append(`<li>${element}</li>`)
        });
    })
})
