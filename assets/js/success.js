window.onload = function(){
    Swal({
        title: "Succès !",
        type: "success",
        text: "L'envoi du mail a été effectué avec succès",
        confirmButtonText: "Retourner à l'accueil",
    }).then((result) => {
        if (result.value) {
            window.location = 'https://cartedevoeux.geoffroy-carette.com';
        }
    })
};