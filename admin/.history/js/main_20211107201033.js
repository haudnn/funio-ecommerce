const getbtnAdd = document.querySelector('.btnAdd')
const modal = document.querySelector('.js-modal')
const modalClose = document.querySelector('.js-modal-close')
const getBtnCreate = document.querySelector('.button-create')
const formLogin = document.querySelector('.form-login')
const formRegister = document.querySelector('.form-register')
const getBtnBack = document.querySelector('.button-back')
const getBoxForm = document.querySelectorAll('.box-content')
getbtnAdd.onclick = function(){
    modal.style.display="flex"
}
modalClose.onclick = function(){
    modal.style.display="none"
    formRegister.classList.remove('active')
    formLogin.classList.add('active')
}