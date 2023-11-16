const searchInput = document.getElementById('search-input');
const headerSearch = document.querySelector('.header__search');

searchInput.addEventListener('focus', function() {
    headerSearch.classList.add('focus');
});

searchInput.addEventListener('blur', function() {
    headerSearch.classList.remove('focus');
});