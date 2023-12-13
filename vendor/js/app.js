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

// Rank Dropdown Img Change
// const rankImg = () => {
// var rankImage = document.getElementById("rankImage");
// rankImage.src = `./assets/img/${selectedValue}.png`;
// console.log('Selected Value:', selectedValue);
const updatePrice = () => {

    //Price
    var selectedOption = document.getElementById("rankSelect").value;

    var prices = {
        SilverI: 10.00,
        SilverII: 15.00,
        SilverIII: 20.00,
        SilverIV: 25.00,
        SilverV: 30.00
    };

    var additionalAmount = 0;

    if (document.getElementById("checkbox1").checked) {
        additionalAmount += 0.20;
    }

    if (document.getElementById("checkbox2").checked) {
        additionalAmount += 0.20;
    }

    if (document.getElementById("checkbox3").checked) {
        additionalAmount += 0.20;
    }

    var totalPrice = prices[selectedOption] * (1 + additionalAmount);

    document.getElementById("priceTag").innerText = "$" + totalPrice.toFixed(2);

    // Rank Dropdown Img Change
    var rankImage = document.getElementById("rankImage");
    rankImage.src = `./assets/img/${selectedOption}.png`;
}


/* Price Increase Percentage Start */
// function IncreaseTwentyPerc(element) {
//     const checkbox = element.querySelector('input');
//     const boostPriceElement = document.querySelector('.boostPrice');
//     const currentPrice = parseFloat(boostPriceElement.textContent.match(/\d+/)[0]);

//     if (checkbox.checked) {
//         const increaseAmount = currentPrice * 0.2;
//         const newPrice = currentPrice + increaseAmount;

//         boostPriceElement.textContent = `${newPrice}$`;
//     } else {
//         boostPriceElement.textContent = `${currentPrice}$`;
//     }
// }

// function SoloPlay(element) {
//     const checkbox = element.querySelector('input');
//     const boostPriceElement = document.querySelector('.boostPrice');
//     const currentPrice = parseFloat(boostPriceElement.textContent.match(/\d+/)[0]);

//     // const originalPrice = parseFloat(boostPriceElement.dataset.originalPrice || currentPrice); // Store original price
//     const increaseAmount = currentPrice * 0.2;

//     if (checkbox.checked) {
//         boostPriceElement.textContent = `${currentPrice + increaseAmount}$`;
//     } else {
//         boostPriceElement.textContent = `${currentPrice}$`;
//     }

//     // Update data attribute with the original price after each click
//     boostPriceElement.dataset.originalPrice = currentPrice;
// }


// function PriorityOrder(element) {
//     const checkbox = element.querySelector('input');
//     const boostPriceElement = document.querySelector('.boostPrice');
//     const currentPrice = parseFloat(boostPriceElement.textContent.match(/\d+/)[0]);

//     const originalPrice = parseFloat(boostPriceElement.dataset.originalPrice || currentPrice); // Store original price
//     const increaseAmount = originalPrice * 0.2;

//     if (checkbox.checked) {
//         boostPriceElement.textContent = `${originalPrice + increaseAmount}$`;
//     } else {
//         boostPriceElement.textContent = `${originalPrice}$`;
//     }

//     // Update data attribute with the original price after each click
//     boostPriceElement.dataset.originalPrice = originalPrice;
// }
// function PlayWithBooster(element) {
//     const checkbox = element.querySelector('input');
//     const boostPriceElement = document.querySelector('.boostPrice');
//     const currentPrice = parseFloat(boostPriceElement.textContent.match(/\d+/)[0]);

//     const originalPrice = parseFloat(boostPriceElement.dataset.originalPrice || currentPrice); // Store original price
//     const increaseAmount = originalPrice * 0.2;

//     if (checkbox.checked) {
//         boostPriceElement.textContent = `${originalPrice + increaseAmount}$`;
//     } else {
//         boostPriceElement.textContent = `${originalPrice}$`;
//     }

//     // Update data attribute with the original price after each click
//     boostPriceElement.dataset.originalPrice = originalPrice;
// }

/* Price Increase Percentage End */

