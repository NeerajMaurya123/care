// let book_appointment_form = document.querySelector('.book_appointment_form');
// let book_appointment_form2 = document.querySelector('.book_appointment_form2');
// let book_appointment_form3 = document.querySelector('.book_appointment_form3');

// function selectCity() {
//   book_appointment_form.style.display = 'none';
//   book_appointment_form2.style.display = 'block';
// }

// function backcitybox() {
//   book_appointment_form.style.display = 'block';
//   book_appointment_form2.style.display = 'none';
//   book_appointment_form3.style.display = 'none';
// }

// function SelectDiseases() {
//   book_appointment_form.style.display = 'none';
//   book_appointment_form3.style.display = 'block';

// }

// let citylist = [];
// fetch('https://bonanzacare.com/api/getCities.php')
//   .then((response) => response.json())
//   .then((data) => {
//     // citylist.push(data.listCities);
//     //console.log(citylist);
//     data.listCities.map((val, index) => {
//       citylist.push(val.City);
//       autocomplete(document.getElementById("myInput"), citylist);
//       // console.log(val);
//     })

//   });

//   console.log("connected")