const loginBtn = document.querySelector('.header__btnLogin');
const modalRegister = document.getElementById('#modal_register');
const modalLogin = document.getElementById('modal_login');
const closeModal = document.querySelector('.auth__closeBtn');
const modalResWrapper = document.querySelector('.auth__modalContent');

function showModal() {
    modalLogin.classList.add('displayFlex');
}

function hideModal() {
    modalLogin.classList.remove('displayFlex');
}

loginBtn.addEventListener('click', showModal);
closeModal.addEventListener('click', hideModal);
modalResWrapper.addEventListener('click', function (event) {
    event.stopPropagation;
})