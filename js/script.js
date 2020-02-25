function inserirImg() {

    var file = document.querySelector('input[name=fileImg]').files[0];

    var img = document.querySelector('img[name=imgVeiculo]');

    var reader = new FileReader();

    reader.onloadend = function() {

        img.src = reader.result;

    }

    if (file) {

        reader.readAsDataURL(file);

    } else {

        img.src = "PDV-img/photo-camera.png";
    }

}