/* Home-Tabs  */
function openTab(tabIndex) {
    const tabs = document.querySelectorAll('.csgo-boost-tab');
    const tabContents = document.querySelectorAll('.csgo-boost-tab-content');

    tabs.forEach((tab, index) => {
        if (index === tabIndex) {
            tab.classList.add('active');
            tabContents[index].classList.add('active');
        } else {
            tab.classList.remove('active');
            tabContents[index].classList.remove('active');
        }
    });
}
/* Home-Tabs  */




/* DropDown-header Start */
function addLocationProducttoggleDropdown() {
    var dropdownToggle = document.querySelector('.addLocationProduct-toggle');
    dropdownToggle.classList.toggle('open');
}

var dropdownOptions = document.querySelectorAll('.addLocationProduct-option');

dropdownOptions.forEach(function (option) {
    option.addEventListener('click', function () {
        var selectedOptionText = option.textContent;
        var dropdownToggle = document.querySelector('.addLocationProduct-toggle');
        dropdownToggle.textContent = selectedOptionText;
        dropdownToggle.classList.remove('open');
        dropdownToggle.insertAdjacentHTML('beforeend', '<span class="addLocationProduct-arrow"></span>');
    });
});
/* DropDown-header Start */



/* FAQS Start */
const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

        const currentlyActiveAccordionItemHeader = document.querySelector(
            ".accordion-item-header.active"
        );
        if (
            currentlyActiveAccordionItemHeader &&
            currentlyActiveAccordionItemHeader !== accordionItemHeader
        ) {
            currentlyActiveAccordionItemHeader.classList.toggle("active");
            currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        }
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});
/* FAQS End */


// const slider = document.getElementById("myRange");
// const sliderValue = document.getElementById("sliderValue");

// // Update the slider value text when the slider is moved
// slider.addEventListener("input", function() {
//     sliderValue.textContent = this.value;
// });

// BURGER JS
const burgerIcon = document.querySelector('.sidebar-header');
const container = document.querySelector('.csgo-menu-conatiner');

burgerIcon.addEventListener('click', () => {
  container.classList.toggle('expanded');
});
