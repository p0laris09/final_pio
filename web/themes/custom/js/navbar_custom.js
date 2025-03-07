document.addEventListener('DOMContentLoaded', function() {
    const dropdownItems = document.querySelectorAll('.menu__item--has-children');

    dropdownItems.forEach(item => {
        item.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    });
});