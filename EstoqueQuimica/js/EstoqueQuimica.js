window.addEventListener('wheel', function(event) {
        if (event.deltaY > 0) {
            console.log("Rolou para baixo");
        } else {
            console.log("Rolou para cima");
        }
    });