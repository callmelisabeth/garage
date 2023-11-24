// if (document.URL.indexOf("/vehicules") >= 0) {

//     document.addEventListener('DOMContentLoaded', function CarTitle() {
  
//       var carTitles = document.querySelectorAll('h2'); 
  
//       var carContacts = document.querySelectorAll('input[name="contact[subject]"]'); // Get the Subject Input
  
//       for (var i = 0; i < carTitles.length; i++) { 
  
//         var carContact = carContacts[i]; 
  
//         carContact.setAttribute("type", "hidden"); // Set the attribute and value
//         carContact.value = carTitles[i].innerHTML;
//       }
  
//       // Adjust the subject form value to filtered cars
//       document.addEventListener('click', function CarTitleNew() {
  
//         var carTitlesNew = document.querySelectorAll('h2');  //Get the Titles
  
//         var carContactsNew = document.querySelectorAll('input[name="contact[subject]"]'); // Get the Subject Form Input
  
//         for (var j = 0; j < carTitlesNew.length; j++) { // Looping over Title
  
//           var carContactNew = carContactsNew[j]; // Get the ith Title
  
//           carContactNew.setAttribute("type", "hidden"); // Set the attribute and value
//           carContactNew.value = carTitlesNew[j].innerHTML;
//         }
//       })
//     })
//   }
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('filter-form');
    const carList = document.getElementById('car-list');
    
    form.addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche la soumission par défaut du formulaire
    
    const formData = new FormData(form);
    const url = '{{ path('') }}';
    
    fetch(url, {
    method: 'POST',
    body: formData
    }).then(response => response.text()).then(data => {
    carList.innerHTML = data;
    }).catch(error => {
    console.error('Erreur :', error);
    });
    });
    });
    
    // Set  price & kilometer filter to its maximum value as the default
    const maxPriceInput = document.getElementById('max-price');
    maxPriceInput.value = maxPriceInput.max;
    
    const maxKilometerInput = document.getElementById('max-kilometer');
    maxKilometerInput.value = maxKilometerInput.max;
    
    const minDateInput = document.getElementById('min-date');
    minDateInput.value = minDateInput.min;
    
    // Display the default value
    updateRangeValue(maxPriceInput, 'max-price-value');
    updateRangeValue(maxKilometerInput, 'max-kilometer-value');
    updateRangeValue(minDateInput, 'min-date-value');
    
    // Display input value in filter
    function updateRangeValue(input, outputId) {
    document.getElementById(outputId).textContent = input.value;
    }
    
  
  
  