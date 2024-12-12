// Function to add a new post
function addPost() {
    const userName = document.getElementById('userName').value;
    const postContent = document.getElementById('postContent').value;

    if (!userName || !postContent) {
        alert('Please fill out both fields.');
        return;
    }

    const data = new FormData();
    data.append('userName', userName);
    data.append('postContent', postContent);

    fetch('addPost.php', {
        method: 'POST',
        body: data,
    })
    .then(response => response.text())
    .then(result => {
        if (result.trim() === 'success') {
            alert('Post added successfully!');
            document.getElementById('userName').value = '';
            document.getElementById('postContent').value = '';
            getPosts(); // Refresh posts after adding
        } else {
            alert('Error adding post: ' + result);
        }
    })
    .catch(error => console.error('Error:', error));
}

// Function to fetch and display posts (without time)
function getPosts() {
    fetch('getPosts.php')
        .then(response => response.json())
        .then(posts => {
            const postsContainer = document.getElementById('posts');
            postsContainer.innerHTML = '';

            posts.forEach(post => {
                const postElement = document.createElement('div');
                postElement.classList.add('post');
                postElement.innerHTML = `
                    <h3>${post.userName}</h3>
                    <p>${post.content}</p>
                `;
                postsContainer.appendChild(postElement);
            });
        })
        .catch(error => console.error('Error fetching posts:', error));
}

// Load posts when the page loads
window.onload = getPosts;
