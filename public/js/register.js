const loginBtn = document.querySelector('.header__btnLogin');
const modalRegister = document.getElementById('modal_register');
const registerBtn = document.querySelector('.registerBtn');
const modalLogin = document.getElementById('modal_login');
const closeModal = document.querySelector('.js-modal-close');
const modalResWrapper = document.querySelector('.auth__modalContent');

function showModalLogin() {
    modalLogin.classList.add('displayFlex');
}

function hideModalLogin() {
    modalLogin.classList.remove('displayFlex');
}

function showModalRegister() {
    modalLogin.classList.remove('displayFlex');
    modalRegister.classList.add('displayFlex');
}

function hideModalRegister() {
    modalRegister.classList.remove('displayFlex');
}

loginBtn.addEventListener('click', showModalLogin);
closeModal.addEventListener('click', hideModalLogin);
modalResWrapper.addEventListener('click', function (event) {
    event.stopPropagation;
})

registerBtn.addEventListener('click', showModalRegister);

$('.auth__closeBtn').on('click', function() {
    $('#modal_login').removeClass('displayFlex');
})
