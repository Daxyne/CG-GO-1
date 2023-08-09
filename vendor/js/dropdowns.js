// /* DropDown-header Start */
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
function addLocationProducttoggleDropdownBoostRank(clickedToggle) {
    clickedToggle.classList.toggle('open');
  }
  
  var dropdownOptions = document.querySelectorAll('.addLocationProduct-boost-rank-option');
  
  dropdownOptions.forEach(function (option) {
    option.addEventListener('click', function () {
      var selectedOptionText = option.textContent;
      var dropdownToggle = this.closest('.addLocationProduct-boost-rank-dropdown').querySelector('.addLocationProduct-boost-rank-toggle');
      dropdownToggle.textContent = selectedOptionText;
      dropdownToggle.classList.remove('open');
      dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-boost-rank-arrow"></span>');
    });
  });
  