const loginBtn = document.querySelector('.btnlogin-popup');
const loginPopup = document.querySelector('.login-popup');
const registerLink = document.querySelector('.register-link')
const loginLink = document.querySelector('.login-link')
const closeBtn = document.querySelector('.icon-close');

loginBtn.addEventListener('click', () => {
  loginPopup.classList.add('show');
});

registerLink.addEventListener('click', () => {
  loginPopup.classList.add('active');
});

loginLink.addEventListener('click', () => {
  loginPopup.classList.remove('active');
});

closeBtn.addEventListener('click', () => {
  loginPopup.classList.remove('show');
});

/* forum diskusi js */
// Add event listener to reply button
document.querySelectorAll('.reply-button').forEach(button => {
  button.addEventListener('click', () => {
      // Toggle reply form visibility
      button.nextElementSibling.classList.toggle('hidden');
  });
});

// Add event listener to edit button
document.querySelectorAll('.edit-button').forEach(button => {
  button.addEventListener('click', () => {
  // Toggle edit form visibilitybutton
  });
});