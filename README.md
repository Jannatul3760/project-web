
# 🌍 Global Sustainable Tomorrow

**Assalamualaikum,**  
Welcome to **Global Sustainable Tomorrow**, a miniature website designed as a sustainability forum. This project aims to promote sustainability through a user-friendly and responsive platform.  

---

## ✨ Features

- **User Registration and Login**: A secure system for users to sign up and log in.
- **Forum**: Users can share posts and ideas related to sustainability.
- **Responsive Design**: Clean, modern, and accessible styling with CSS.
- **Dynamic Interactivity**: Seamless user experience powered by JavaScript.

---

## 🔧 Tech Stack

### **Frontend**
- **HTML**: Structuring the website.
- **CSS**: Styling and layout.
- **JavaScript**: Interactivity and dynamic behavior.

### **Backend**
- **PHP**: Server-side logic.
- **MySQL**: Database management.
- **phpMyAdmin**: Local database management via XAMPP.

---

## 📂 Project Files and Their Roles

| **File/Folder**   | **Purpose**    |
|--------------------|-----------------------------------------------------------------------------------------------|
| `image/`          | Stores images, icons, and assets for visual appeal.                                           |
| `addPost.php`     | Handles form validation and database insertion for user posts with secure SQL queries.        |
| `errors.php`      | Displays validation errors to guide users during form submissions.                            |
| `getPosts.php`    | Fetches and formats posts from the database for real-time forum display.                      |
| `index.php`       | Homepage introducing the project and linking to other pages.                                  |
| `login.php`       | Facilitates user login with input validation and error handling.                              |
| `register.php`    | Allows new users to register securely.                                                        |
| `script.js`       | Manages form validation, AJAX calls, and interactivity.                                       |
| `server.php`      | Core backend logic for user authentication, registration, and session management.             |
| `style.css`       | Defines the website's visual design and ensures responsiveness.                               |

---
🚀 Running the Project Locally
Follow these steps to set up and run the Global Sustainable Tomorrow project on your local machine:
1. Set Up the Environment
•	Download and install XAMPP to create a local server environment with Apache and MySQL.
2. Prepare the Project Files
•	Copy your project folder into the htdocs directory, located within the XAMPP installation directory.
3. Start Local Server Services
•	Open the XAMPP Control Panel.
•	Start the Apache service to enable the server.
•	Start the MySQL service to enable the database.
4. Database Setup
•	Open phpMyAdmin in your browser.
•	Create the following databases:
o	sustainable tomorrow: Manages user login and registration.
o	sustainable_tomorrow: Handles forum-related data.
•	Import the provided SQL file (located in your project folder) into each database to set up the schema and populate initial data.
5. Launch the Project
•	Open a web browser and navigate to:
http://localhost/sustainable%20tomorrow/.
•	Interact with the website to explore its features, including

## 🛠️ How It Works

### Frontend
- **Pages**: `index.php`, `login.php`, and `register.php` provide UI, styled with `style.css` and made interactive by `script.js`.

### Backend
- **Logic**: `server.php` and `addPost.php` handle user management and post creation.
- **Error Feedback**: `errors.php` displays form validation errors.

### Database
- **Real-time Updates**: `server.php` and `getPosts.php` dynamically retrieve and update posts.

---

## 📸 Screenshots

Here are a few screenshots showcasing the website's design and functionality:

- **Registration Page**![image alt](https://github.com/Jannatul3760/project-web/blob/5136964a1868e0ad02297fe71eeac7a96e3c7dba/Screenshot%202024-12-09%20103025.png)
- **Login Page**![image alt](https://github.com/Jannatul3760/project-web/blob/77cac3d449c297fb057fe93c0e1f3d68a356bf55/Screenshot%202024-12-09%20103107.png)
- **Forum Page**![image alt]()
---
### 🌟 Thank You for Visiting!
