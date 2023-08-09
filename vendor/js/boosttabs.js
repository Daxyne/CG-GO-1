/* Home-Tabs  */
function openTab(tabIndex) {
    const tabs = document.querySelectorAll('.csgo-boost-howtobuy-tab');
    const tabContents = document.querySelectorAll('.csgo-boost-howtobuy-tab-content');

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
