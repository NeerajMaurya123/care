// function imageUploaded() {
//     var file = document.querySelector('input[type=file]')['files'][0];
//     var reader = new FileReader();
//     console.log("next");
//     reader.onload = function () {
//         base64String = reader.result.replace("data:", "")
//             .replace(/^.+,/, "");

//         imageBase64Stringsep = base64String;
//         displayString(imageBase64Stringsep)
//         // alert(imageBase64Stringsep);
//         // console.log(imageBase64Stringsep);
//     }
//     reader.readAsDataURL(file);

// }

// function displayString(imageBase64Stringsep) {
//     document.getElementsByName('img')[0].value = imageBase64Stringsep;
//     //console.log("Base64String about to be printed");
//     //alert(base64String);
// }

function imageUploaded() {
    var selectedfile = document.getElementById("myinput").files;
    if (selectedfile.length > 0) {

        var imageFile = selectedfile[0];
        console.log(imageFile);
        let type = imageFile.type;
        let imglength = imageFile.size;

        if (imglength / 1024 < 50) {
            let typeImage = ['image/jpg', 'image/png', 'image/jpeg', 'image/bmp'];
            if (typeImage.includes(type)) {

                var fileReader = new FileReader();
                fileReader.onload = function (fileLoadedEvent) {
                    var srcData = fileLoadedEvent.target.result;
                    console.log(srcData);
                    // var base64str = srcData.split('base64,')[1];
                    // console.log(base64str);
                    // var decoded = atob(base64str);
                    // var decoded = atob(base64str);
                    // console.log(decoded);
                    // var encode = btoa(decoded);
                    // console.log(encode);
                    // console.log("FileSize: " + decoded.length);
                    // var newImage = document.createElement('img');
                    var newImage = document.getElementById("previewImg");
                    newImage.src = srcData;
                    // newImage.src = `data:image/jpeg;base64,${encode}`;

                    document.getElementsByName('img')[0].value = srcData;
                    // document.getElementById("dummy").innerHTML = newImage.outerHTML;
                    // document.getElementById("txt").value = document.getElementById("dummy").innerHTML;
                }

            } else {
                alert('Select right format');
                document.getElementById("myinput").value = null;
            }
        } else {
            alert('file size should be less than 50 KB');
            document.getElementById("myinput").value = null;
        }
        fileReader.readAsDataURL(imageFile);
    } else {
        alert('choose file');
    }
}


// function imageUploaded() {
//     var canvas = document.getElementById("canvas");
//     var ctx = canvas.getContext("2d");
//     var cw = canvas.width;
//     var ch = canvas.height;
//     var maxW = 100;
//     var maxH = 100;

//     let selectedfile = document.getElementById("myinput").files[0];
//     // var output = document.getElementById('file_output');
//     // selectedfile.addEventListener('change', handleFiles);

//     function handleFiles() {
//         var img = new Image;
//         img.onload = function () {
//             var iw = img.width;
//             var ih = img.height;
//             var scale = Math.min((maxW / iw), (maxH / ih));
//             var iwScaled = iw * scale;
//             var ihScaled = ih * scale;
//             canvas.width = iwScaled;
//             canvas.height = ihScaled;
//             ctx.drawImage(img, 0, 0, iwScaled, ihScaled);

//             // output.value = canvas.toDataURL("image/jpeg", 0.5);
//             let base64string = canvas.toDataURL("image/jpeg", 0.5);
//             console.log(base64string);
//             var newImage = document.createElement('img');
//             newImage.src = base64string;

//             document.getElementById("dummy").innerHTML = newImage.outerHTML;
//         }
//         img.src = URL.createObjectURL(selectedfile);
//     }
//     handleFiles();
// }