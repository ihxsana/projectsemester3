<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Diskusi Serba Bisa</title>
    <link rel="stylesheet" href="stylehalaman.css">
    <style>
        header {
            width: 100%;
            top: 0;
            left: 0;
            background-color: #333;
            color: #fff;
            padding: 20px 100px;
            justify-content: space-between;
            align-items: center;
        }

        .navigation {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .navigation a {
            color: white;
            text-decoration: none;
            margin-right: 40px;
        }

        .navigation .btnlogin-popup {
            width: 130px;
            height: 50px;
            background: transparent;
            border: 2px solid #fff;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            color: #fff;
            font-weight: 500;
        }

        .navigation .btnlogin-popup:hover {
            background: #fff;
            color: #162938;
        }

        .navigation .line {
            text-decoration: none;
            display: inline-block;
            position: relative;
        }

        .navigation .line:hover {
            padding-bottom: 8px;
        }

        .line::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: #fff;
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .line:hover::after {
            transform: scaleX(1);
        }

        .fixed {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .upload-comment-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #f0f0f0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            z-index: 1000;
        }

        .show-comment-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .show-comment-btn:hover {
            background-color: #45a049;
        }

        #upload-comment-form {
            display: flex;
            flex-direction: column;
        }

        #upload-comment-form textarea {
            width: 250px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            resize: vertical;
            margin-bottom: 10px;
        }

        .submit-comment {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .submit-comment:hover {
            background-color: #007B9A;
        }

        .hidden {
            display: none;
        }

        .edit-form {
            margin-top: 10px;
        }

        .edit-form textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 5px;
        }

        .submit-edit {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        .submit-edit:hover {
            background-color: #45a049;
        }
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

.comment-section {
    margin-top: 20px;
}

.comment-box {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    padding: 10px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
}

.comment-box img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 15px;
}

.comment-content {
    flex-grow: 1;
}

.comment-content h4 {
    margin: 0;
    font-size: 16px;
    color: #333;
}

.comment-content p {
    margin: 5px 0;
    font-size: 14px;
    color: #555;
}

.reply-button {
    margin-top: 5px;
    background-color: #007bff;
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.reply-button:hover {
    background-color: #0056b3;
}

.comment-form {
    margin-top: 20px;
}

.comment-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 14px;
    resize: none;
    margin-bottom: 10px;
}

.comment-form button {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 15px;
    cursor: pointer;
    border-radius: 5px;
}

.comment-form button:hover {
    background-color: #218838;
}
    </style>
</head>

<body>
    <header>
        <nav class="navigation">
            <a href="home.php" class="line">Beranda</a>
            <a href="tentang kami.php" class="line">Tentang Kami</a>
            <a href="forumdiskusi.php" style="border-bottom: 4px solid #fff; padding-bottom: 5px;">Forum Diskusi</a>
            <a href="halamanpemesanan.php" class="line">Pesanan</a>
            <button class="btnlogin-popup">Login</button>
        </nav>
    </header>

    <div class="discussion-container">
        <div class="comment-container">
            <div class="user-profile">
                <img src="fafa.png" alt="User  Profile Picture">
                <span class="username">Fafa</span>
            </div>
            <div class="comment-box">
                <p>Ternyata pelayananya keren banget, oiya ges bagaimana cara biar dapetin diskonnya?.</p>
                <span class="comment-meta">Uploaded on 12/02/2023 10:00 AM | Edited on 12/02/2023 08.50 AM</span>
                <button class="reply-button">Reply</button>
                <button class="edit-button">Edit</button>
                <form class="reply-form hidden">
                    <textarea name="reply" id="reply" cols="30" rows="5"></textarea>
                    <button type="submit" class="submit-reply">Submit Reply</button>
                </form>
            </div>
        </div>
        <div class="comment-container">
            <div class="user-profile">
                <img src="tama.png" alt="User  Profile Picture">
                <span class="username">TamaShii</span>
            </div>
            <div class="comment-box">
                <p>Mau tanya dong tentang doktor yang memeriksa apakah akurat gais?.</p>
                <span class="comment-meta">Uploaded on 12/02/2023 10:10 AM</span>
                <button class="reply-button">Reply</button>
                <button class="edit-button">Edit</button>
                <form class="reply-form hidden">
                    <textarea name="reply" id="reply" cols="30" rows="5"></textarea>
                    <button type="submit" class="submit-reply">Submit Reply</button>
                </form>
            </div>
        </div>
        <div class="comment-container">
            <div class="user-profile">
                <img src="jarif.jpeg" alt="User  Profile Picture">
                <span class="username">jarip</span>
            </div>
            <div class="comment-box">
                <p>untuk cek kesehatan apakah dapat gratis obat?.</p>
                <span class="comment-meta">Uploaded on 12/02/2023 10:00 AM | Edited on 12/02/2023 12.40 AM</span>
                <button class="reply-button">Reply</button>
                <button class="edit-button">Edit</button>
                <form class="reply-form hidden">
                    <textarea name="reply" id="reply" cols="30" rows="5"></textarea>
                    <button type="submit" class="submit-reply">Submit Reply</button>
                </form>
            </div>
        </div>
        <div class="comment-container">
            <div class="user-profile">
                <img src="gerry.jpg" alt="User  Profile Picture">
                <span class="username">gerry</span>
            </div>
            <div class="comment-box">
                <p>ada yang pernah pakai layanan grooming? review dong pengalamannya.</p>
                <span class="comment-meta">Uploaded on 12/02/2023 10:00 AM | Edited on 12/02/2023 07.40 AM</span>
                <button class="reply-button">Reply</button>
                <button class="edit-button">Edit</button>
                <form class="reply-form hidden">
                    <textarea name="reply" id="reply" cols="30" rows="5"></textarea>
                    <button type="submit" class="submit-reply">Submit Reply</button>
                </form>
            </div>
        </div>
        <div class="upload-comment-container">
            <form id="upload-comment-form" class="hidden">
                <textarea name="comment" id="comment" rows="3" placeholder="Tulis komentar Anda..."></textarea>
                <button type="submit" class="submit-comment">Kirim</button>
            </form>
        </div>
    </div>

    <script>
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

        // Function to load comments from localStorage
        function loadCommentsFromStorage() {
            const storedComments = localStorage.getItem('forumComments');
            if (storedComments) {
                const comments = JSON.parse(storedComments);
                comments.forEach(comment => {
                    const newComment = createCommentElement(comment);
                    document.querySelector('.discussion-container').appendChild(newComment);
                    addCommentEventListeners(newComment);
                });
            }
        }

        // Function to save comments to localStorage
        function saveCommentsToStorage() {
            const commentContainers = document.querySelectorAll('.comment-container');
            const comments = Array.from(commentContainers).map(container => {
                return {
                    username: container.querySelector('.username').textContent,
                    text: container.querySelector('.comment-box p').textContent,
                    timestamp: container.querySelector('.comment-meta').textContent
                };
            });
            localStorage.setItem('forumComments', JSON.stringify(comments));
        }

        // Function to create a comment element
        function createCommentElement(comment) {
            const newComment = document.createElement('div');
            newComment.className = 'comment-container';
            newComment.innerHTML = `
                <div class="user-profile">
                    <img src="user-profile.png" alt="User Profile Picture">
                    <span class="username">${comment.username}</span>
                </div>
                <div class="comment-box">
                    <p>${comment.text}</p>
                    <span class="comment-meta">${comment.timestamp}</span>
                    <button class="reply-button">Reply</button>
                    <button class="edit-button">Edit</button>
                    <form class="reply-form hidden">
                        <textarea name="reply" id="reply" cols="30" rows="5"></textarea>
                        <button type="submit" class="submit-reply">Submit Reply</button>
                    </form>
                    <form class="edit-form hidden">
                        <textarea name="edit" cols="30" rows="5">${comment.text}</textarea>
                        <button type="submit" class="submit-edit">Submit Edit</button>
                    </form>
                </div>
            `;
            return newComment;
        }

        // Load comments when the page loads
        window.addEventListener('load', loadCommentsFromStorage);

        // Modify the upload comment form event listener
        const uploadCommentForm = document.getElementById('upload-comment-form');
        uploadCommentForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const commentText = uploadCommentForm.querySelector('textarea').value;
            if (commentText.trim() !== '') {
                const newComment = createCommentElement({
                    username: 'Your Username',
                    text: commentText,
                    timestamp: `Uploaded on ${new Date().toLocaleString()}`
                });
                document.querySelector('.discussion-container').appendChild(newComment);

                addCommentEventListeners(newComment);

                uploadCommentForm.reset();
                uploadCommentForm.classList.add('hidden');
                showCommentFormBtn.classList.remove('hidden');

                // Save comments to localStorage
                saveCommentsToStorage();
            }
        });

        // Function to add event listeners to a comment
        function addCommentEventListeners(commentContainer) {
            const replyButton = commentContainer.querySelector('.reply-button');
            const editButton = commentContainer.querySelector('.edit-button');
            const replyForm = commentContainer.querySelector('.reply-form');
            const editForm = commentContainer.querySelector('.edit-form');

            replyButton.addEventListener('click', () => {
                replyForm.classList.toggle('hidden');
            });

            editButton.addEventListener('click', () => {
                editForm.classList.toggle('hidden');
            });

            replyForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const replyText = replyForm.querySelector('textarea').value;
                const newReply = document.createElement('div');
                newReply.className = 'reply';
                newReply.innerHTML = `<p>${replyText}</p>`;
                commentContainer.appendChild(newReply);
                replyForm.reset();
                replyForm.classList.add('hidden');
            });

            editForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const editText = editForm.querySelector('textarea').value;
                const commentBox = commentContainer.querySelector('.comment-box');
                commentBox.querySelector('p').textContent = editText;
                editForm.reset();
                editForm.classList.add('hidden');
            });
        }

        // Add event listener to edit buttons
        const editButtons = document.querySelectorAll('.edit-button');
        editButtons.forEach((button) => {
            button.addEventListener('click', (e) => {
                const editForm = button.parentNode.querySelector('.edit-form');
                editForm.classList.toggle('hidden');
            });
        });

        // Modify the edit form submit event listener
        const editForms = document.querySelectorAll('.edit-form');
        editForms.forEach((form) => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const editText = form.querySelector('textarea').value;
                const commentBox = form.parentNode.parentNode.querySelector('.comment-box');
                commentBox.querySelector('p').innerHTML = editText;
                form.reset();
                form.classList.add('hidden');

                // Save comments to localStorage after editing
                saveCommentsToStorage();
            });
        });

        // Hapus tombol edit di komentar orang
        const commentBoxes = document.querySelectorAll('.comment-box');
        commentBoxes.forEach((box) => {
            const editButton = box.querySelector('.edit-button');
            if (editButton) {
                editButton.remove();
            }
        });

        const showCommentFormBtn = document.getElementById('show-comment-form');
        showCommentFormBtn.addEventListener('click', () => {
            uploadCommentForm.classList.toggle('hidden');
            showCommentFormBtn.classList.toggle('hidden');
        });
    </script>
</body>

</html>