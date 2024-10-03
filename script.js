const loginBtn = document.querySelector('.btnlogin-popup');
const loginPopup = document.querySelector('.login-popup');
const closeBtn = document.querySelector('.close-btn');

loginBtn.addEventListener('click', () => {
  loginPopup.classList.add('show');
});

closeBtn.addEventListener('click', () => {
  loginPopup.classList.remove('show');
});