const loginBtn = document.querySelector('.btnlogin-popup');
const loginPopup = document.querySelector('.login-popup');
const logoutDropdown = document.getElementById('logout-dropdown');
const logoutBtn = document.querySelector('.logout-btn');
const profilBtn = document.querySelector('.profil-btn');

document.querySelector('.btnlogin-popup').addEventListener('click', function() {
  this.classList.toggle('active');
});

profilBtn.addEventListener('click', () => {
  window.location.href = "halamanprofile.php";
});

loginBtn.addEventListener('click', () => {
  logoutDropdown.classList.toggle('show');
});

logoutBtn.addEventListener('click', () => {
  window.location.href = "logout.php";
});

/* forum diskusi js */
// Add event listener to reply buttons
document.querySelectorAll('.reply-button').forEach(button => {
  button.addEventListener('click', () => {
      // Toggle the reply form visibility
      const replyForm = button.nextElementSibling;
      replyForm.classList.toggle('hidden');
  });
});

// Add event listener to edit buttons
document.querySelectorAll('.edit-button').forEach(button => {
  button.addEventListener('click', () => {
      // Toggle the edit form visibility
      const editForm = button.nextElementSibling.nextElementSibling;
      editForm.classList.toggle('hidden');
  });
});

// Add functionality for submitting replies
document.querySelectorAll('.reply-form').forEach(form => {
  form.addEventListener('submit', (e) => {
      e.preventDefault(); // Prevent page reload

      // Get the reply text
      const replyText = form.querySelector('.reply').value;
      
      // Clear the textarea after submitting
      form.querySelector('.reply').value = '';

      // Create a new comment container for the reply
      const newReply = document.createElement('div');
      newReply.classList.add('comment-container');
      
      // Example of dynamically generated reply content
      newReply.innerHTML = `
          <div class="user-profile">
              <img src="user-profile-picture.jpg" alt="User Profile Picture">
              <span class="username">You</span>
          </div>
          <div class="comment-box">
              <p>${replyText}</p>
              <span class="comment-meta">Replied just now</span>
          </div>
      `;
      
      // Append the new reply below the current comment
      form.parentElement.appendChild(newReply);
      
      // Hide the reply form after submission
      form.classList.add('hidden');
  });
});

// Add functionality for editing comments
document.querySelectorAll('.edit-form').forEach(form => {
  form.addEventListener('submit', (e) => {
      e.preventDefault(); // Prevent page reload

      // Get the edited text
      const editedText = form.querySelector('.edit').value;

      // Update the comment text
      form.previousElementSibling.previousElementSibling.querySelector('p').textContent = editedText;

      // Hide the edit form after saving
      form.classList.add('hidden');
  });
});

// Add event listener to edit button
document.querySelectorAll('.edit-button').forEach(button => {
  button.addEventListener('click', () => {
  // Toggle edit form visibilitybutton
  });
});

// js akhir dari halaman produk 
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

// fungsi orderclick / order.js
function addToOrder(itemName, price) {
  let order = JSON.parse(localStorage.getItem('order')) || [];
  order.push({name: itemName, price: price});
  localStorage.setItem('order', JSON.stringify(order));
  alert(itemName + ' telah ditambahkan ke pesanan Anda.');
}

function displayOrder() {
  let order = JSON.parse(localStorage.getItem('order')) || [];
  let orderSummary = document.getElementById('order-summary');
  let total = 0;

  orderSummary.innerHTML = '';
  order.forEach((item, index) => {
      let itemElement = document.createElement('div');
      itemElement.innerHTML = `
          <p>${item.name} - Rp ${item.price}</p>
          <button onclick="removeItem(${index})">Hapus</button>
      `;
      orderSummary.appendChild(itemElement);
      total += item.price;
  });

  let totalElement = document.createElement('p');
  totalElement.innerHTML = `<strong>Total: Rp ${total}</strong>`;
  orderSummary.appendChild(totalElement);
}

function removeItem(index) {
  let order = JSON.parse(localStorage.getItem('order')) || [];
  order.splice(index, 1);
  localStorage.setItem('order', JSON.stringify(order));
  displayOrder();
}

// add komen forumdiskusi latest
// Get all comment containers
const commentContainers = document.querySelectorAll('.comment-container');

// Add event listeners to reply buttons
commentContainers.forEach((container) => {
  const replyButton = container.querySelector('.reply-button');
  replyButton.addEventListener('click', (e) => {
    const replyForm = container.querySelector('.reply-form');
    replyForm.classList.toggle('hidden');
  });
});

// Add event listeners to edit buttons
commentContainers.forEach((container) => {
  const editButton = container.querySelector('.edit-button');
  editButton.addEventListener('click', (e) => {
    const editForm = container.querySelector('.edit-form');
    editForm.classList.toggle('hidden');
  });
});

// Add event listeners to submit reply forms
commentContainers.forEach((container) => {
  const replyForm = container.querySelector('.reply-form');
  replyForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const replyText = replyForm.querySelector('textarea').value;
    const newReply = document.createElement('div');
    newReply.className = 'reply';
    newReply.innerHTML = `<p>${replyText}</p>`;
    container.appendChild(newReply);
    replyForm.reset();
    replyForm.classList.add('hidden');
  });
});

// Add event listeners to submit edit forms
commentContainers.forEach((container) => {
  const editForm = container.querySelector('.edit-form');
  editForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const editText = editForm.querySelector('textarea').value;
    const commentBox = container.querySelector('.comment-box');
    commentBox.querySelector('p').innerHTML = editText;
    editForm.reset();
    editForm.classList.add('hidden');
  });
});

// Add event listener to upload comment form
const uploadCommentForm = document.querySelector('#upload-comment-form');
uploadCommentForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const commentText = uploadCommentForm.querySelector('textarea').value;
  const newComment = document.createElement('div');
  newComment.className = 'comment-container';
  newComment.innerHTML = `
    <div class="user-profile">
      <img src="user-profile.png" alt="User  Profile Picture">
      <span class="username">Your Username</span>
    </div>
    <div class="comment-box">
      <p>${commentText}</p>
      <span class="comment-meta">Uploaded on ${new Date().toLocaleString()}</span>
      <button class="reply-button">Reply</button>
      <button class="edit-button">Edit</button>
      <form class="reply-form hidden">
        <textarea name="reply" id="reply" cols="30" rows="5"></textarea>
        <button type="submit" class="submit-reply">Submit Reply</button>
      </form>
      <form class="edit-form hidden">
        <textarea name="edit" id="edit" cols="30" rows="5"></textarea>
        <button type="submit" class="save-changes">Save Changes</button>
      </form>
    </div>
  `;
  document.querySelector('.discussion-container').appendChild(newComment);
  uploadCommentForm.reset();
});

// Mengambil elemen-elemen yang dibutuhkan
const commentList = document.getElementById("comment-list");
const commentInput = document.getElementById("comment-input");
const postCommentButton = document.getElementById("post-comment");

// Load comments from localStorage
document.addEventListener('DOMContentLoaded', () => {
    loadComments();
});

// Fungsi untuk memuat komentar dari localStorage
function loadComments() {
    const comments = JSON.parse(localStorage.getItem('comments')) || [];
    comments.forEach(comment => {
        displayComment(comment);
    });
}

// Fungsi untuk menyimpan komentar ke localStorage
function saveComment(comment) {
    const comments = JSON.parse(localStorage.getItem('comments')) || [];
    comments.push(comment);
    localStorage.setItem('comments', JSON.stringify(comments));
}

// Fungsi untuk menampilkan komentar ke layar
function displayComment(commentData) {
    const commentBox = document.createElement('div');
    commentBox.className = 'comment-box';

    commentBox.innerHTML = `
        <img src="https://via.placeholder.com/50" alt="Profile Picture">
        <div class="comment-content">
            <h4>${commentData.name}</h4>
            <p>${commentData.text}</p>
            <button class="reply-button">Balas</button>
            <div class="reply-section"></div>
        </div>
    `;

    // Fungsi balas komentar
    commentBox.querySelector('.reply-button').addEventListener('click', () => {
        const replySection = commentBox.querySelector('.reply-section');
        const replyInput = document.createElement('textarea');
        const replyButton = document.createElement('button');
        replyButton.textContent = 'Kirim Balasan';
        replyButton.className = 'reply-button';

        replyButton.addEventListener('click', () => {
            const replyText = replyInput.value.trim();
            if (replyText) {
                const replyComment = document.createElement('p');
                replyComment.textContent=Balasan;$
                {replyText};
                replySection.appendChild(replyComment);
                replyInput.remove();
                replyButton.remove();
            }
        });

        replySection.appendChild(replyInput);
        replySection.appendChild(replyButton);
    });

    commentList.appendChild(commentBox);
}

// Fungsi untuk mem-posting komentar baru
postCommentButton.addEventListener('click', () => {
    const commentText = commentInput.value.trim();
    if (commentText) {
        const commentData = {
            name: "Nama Pengguna", // Anda bisa mengganti dengan nama pengguna yang diambil dari sistem login
            text: commentText
        };
        displayComment(commentData);
        saveComment(commentData);
        commentInput.value = ''; // Kosongkan input setelah posting
    }
});