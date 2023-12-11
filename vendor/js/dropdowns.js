/* DropDown-header Start */
// function addLocationProducttoggleDropdownBoostRank() {
//     var dropdownToggle = document.querySelector('.addLocationProduct-boost-rank-toggle');
//     dropdownToggle.classList.toggle('open');
// }

// var dropdownOptions = document.querySelectorAll('.addLocationProduct-boost-rank-option');

// dropdownOptions.forEach(function (option) {
//     option.addEventListener('click', function () {
//         var selectedOptionText = option.textContent;
//         var dropdownToggle = document.querySelector('.addLocationProduct-boost-rank-toggle');
//         dropdownToggle.textContent = selectedOptionText;
//         dropdownToggle.classList.remove('open');
//         dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');
//     });
// });


/* DropDown-header Start */

// function addLocationProducttoggleDropdownBoostRank(clickedToggle) {
//   clickedToggle.classList.toggle('open');
// }

// var dropdownOptions1 = document.querySelectorAll('.addLocationProduct-boost-rank-option');

// dropdownOptions1.forEach(function (option) {
//   option.addEventListener('click', function () {
//     var selectedOptionText = option.textContent;
//     var dropdownToggle = this.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');
//     dropdownToggle.textContent = selectedOptionText;
//     dropdownToggle.classList.remove('open');
//     dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');

//     // Log the selected value for the first dropdown
//     console.log("First Dropdown Selected Value: " + selectedOptionText);
//   });
// });


// function addLocationProducttoggleDropdownBoostRank1(clickedToggle) {
//   clickedToggle.classList.toggle('open');
// }

// var dropdownOptions2 = document.querySelectorAll('.addLocationProduct-boost-rank-option1');

// dropdownOptions2.forEach(function (option) {
//   option.addEventListener('click', function () {
//     var selectedOptionText = option.textContent;
//     var dropdownToggle = this.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');
//     dropdownToggle.textContent = selectedOptionText;
//     dropdownToggle.classList.remove('open');
//     dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');

//     // Log the selected value for the second dropdown
//     console.log("Second Dropdown Selected Value: " + selectedOptionText);
//   });
// });

/* Boost RankBoost 1 */
function addLocationProducttoggleDropdownBoostRank(clickedToggle) {
  clickedToggle.classList.toggle('open');
}

var dropdownOptions1 = document.querySelectorAll('.addLocationProduct-boost-rank-option');

dropdownOptions1.forEach(function (option) {
  option.addEventListener('click', function () {
    var selectedOptionText = option.textContent;
    var dropdownToggle = this.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');
    dropdownToggle.textContent = selectedOptionText;
    dropdownToggle.classList.remove('open');
    dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');

    // Set the value for the first input
    document.getElementById('firstDropdownValue').value = selectedOptionText;
    console.log(selectedOptionText);
  });
});
/* Boost RankBoost 1 */

/* Boost RankBoost 2 */
function addLocationProducttoggleDropdownBoostRank1(clickedToggle) {
  clickedToggle.classList.toggle('open');
}

var dropdownOptions2 = document.querySelectorAll('.addLocationProduct-boost-rank-option1');

dropdownOptions2.forEach(function (option) {
  option.addEventListener('click', function () {
    var selectedOptionText = option.textContent;
    var dropdownToggle = this.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');
    dropdownToggle.textContent = selectedOptionText;
    dropdownToggle.classList.remove('open');
    dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');

    // Set the value for the second input
    document.getElementById('secondDropdownValue').value = selectedOptionText;
    console.log(selectedOptionText);
  });
});
/* Boost RankBoost 2 */

/* Boost RankBoost 3 */

/* Boost RankBoost 3 */





// var dropdownOptions = document.querySelectorAll('.addLocationProduct-boost-rank-option');

// dropdownOptions.forEach(function (option) {
//   option.addEventListener('click', function () {
//     var selectedOptionText = option.textContent;
//     var dropdownToggle = this.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');
//     dropdownToggle.textContent = selectedOptionText;
//     dropdownToggle.classList.remove('open');
//     dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');

//     // Log the selected value to the console
//     console.log(selectedOptionText);
//   });
// });


// document.addEventListener('click', function (event) {
//   var clickedToggle = event.target.closest('.addLocationProduct-boost-rank-toggle');

//   if (!clickedToggle) return;

//   var inputFieldId = clickedToggle.dataset.inputId;
//   var inputField = document.getElementById(inputFieldId);

//   if (!inputField) {
//     console.error('Input field is null or undefined for ID:', inputFieldId);
//     return;
//   }

//   var selectedOptionText = event.target.textContent.trim();

//   if (selectedOptionText) {
//     clickedToggle.textContent = selectedOptionText;
//     clickedToggle.classList.remove('open');
//     clickedToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');

//     inputField.value = selectedOptionText;
//     console.log('Input field value updated:', selectedOptionText);
//   }
// });


// function addLocationProducttoggleDropdownBoostRank(clickedToggle) {
//   clickedToggle.classList.toggle('open');
// }

// function handleDropdownSelection(event) {
//   var selectedOptionText = event.target.textContent;
//   var dropdownToggle = event.currentTarget.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');

//   // Check if it's the first or second dropdown
//   var dropdownContainer = event.currentTarget.closest('.csgo-boost-rank-title-conatiner');
//   var isSecondDropdown = dropdownContainer.classList.contains('second-dropdown');

//   // Log the selected value with proper name
//   if (isSecondDropdown) {
//     console.log('Second Dropdown Selected:', selectedOptionText);
//   } else {
//     console.log('First Dropdown Selected:', selectedOptionText);
//   }

//   dropdownToggle.textContent = selectedOptionText;
//   dropdownToggle.classList.remove('open');
//   dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');
// }

// var firstDropdownOptions = document.querySelectorAll('.csgo-boost-rank-title-conatiner:not(.second-dropdown) .addLocationProduct-boost-rank-option');
// var secondDropdownOptions = document.querySelectorAll('.csgo-boost-rank-title-conatiner.second-dropdown .addLocationProduct-boost-rank-option');

// firstDropdownOptions.forEach(function (option) {
//   option.addEventListener('click', handleDropdownSelection);
// });

// secondDropdownOptions.forEach(function (option) {
//   option.addEventListener('click', handleDropdownSelection);
// });


// function addLocationProducttoggleDropdownBoostRank(clickedToggle) {
//   // Remove 'open' class from all dropdowns
//   document.querySelectorAll('.addLocationProduct-boost-rank-toggle').forEach(function (toggle) {
//     toggle.classList.remove('open');
//   });

//   // Add 'open' class to the clicked dropdown
//   clickedToggle.classList.add('open');
// }

// function handleDropdownSelection(event) {
//   var selectedOptionText = event.target.textContent;
//   var dropdownToggle = event.currentTarget.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');

//   // Check if the dropdown has the class 'second-dropdown'
//   var isSecondDropdown = dropdownToggle.classList.contains('second-dropdown');

//   // Log the selected value with the proper name
//   if (isSecondDropdown) {
//     console.log('Second Dropdown Selected:', selectedOptionText);
//   } else {
//     console.log('First Dropdown Selected:', selectedOptionText);
//   }

//   dropdownToggle.textContent = selectedOptionText;
//   dropdownToggle.classList.remove('open');
//   dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');
// }

// var firstDropdownOptions = document.querySelectorAll('.csgo-boost-rank-title-conatiner:not(.second-dropdown) .addLocationProduct-boost-rank-option');
// var secondDropdownOptions = document.querySelectorAll('.csgo-boost-rank-title-conatiner.second-dropdown .addLocationProduct-boost-rank-option');

// firstDropdownOptions.forEach(function (option) {
//   option.addEventListener('click', handleDropdownSelection);
// });

// secondDropdownOptions.forEach(function (option) {
//   option.addEventListener('click', handleDropdownSelection);
// });
