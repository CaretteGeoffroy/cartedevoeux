window.onload = function(){
    Swal({
        title: "Erreur !",
        type: "error",
        text: "L'envoi du mail a échoué",
        confirmButtonText: "Réessayer",
    }).then((result) => {
        if (result.value) {
            window.location = 'https://cartedevoeux.geoffroy-carette.com';
        }
    })
};