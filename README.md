# Online Registration Form

This is a simple web application for an online registration form, built with HTML, CSS, JavaScript, jQuery, and PHP.

## Features

*   **Frontend:** HTML for structure, CSS for styling, JavaScript and jQuery for client-side validation and AJAX form submission.
*   **Backend:** PHP for processing form data and displaying it.
*   **Form Fields:** Includes Name, Email, Phone Number, Address, Gender, and Date of Birth.
*   **Validation:** Basic client-side validation for Name and Email.
*   **Dynamic Submission:** Uses AJAX to submit the form without a full page reload and displays the response dynamically.

## Technologies Used

*   **HTML5**
*   **CSS3**
*   **JavaScript**
*   **jQuery** (via CDN)
*   **PHP**

## Setup and Local Testing (using XAMPP)

To run this application locally, you will need a web server environment with PHP support, such as XAMPP.

1.  **Install XAMPP:**
    If you don't have XAMPP installed, download and install it from the official website: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)

2.  **Clone or Download the Repository:**
    Clone this repository to your local machine or download the ZIP file and extract it.

3.  **Place in htdocs:**
    Move the entire project folder (e.g., `wt ass` or whatever you name it) into the `htdocs` directory of your XAMPP installation.
    *   Typical path for Windows: `C:\xampp\htdocs\`
    *   Typical path for macOS: `/Applications/XAMPP/htdocs/`

4.  **Start Apache and MySQL:**
    Open the XAMPP Control Panel and start the Apache web server (and MySQL if you were using a database, though not strictly required for this project).

5.  **Access the Application:**
    Open your web browser and navigate to:
    `http://localhost/wt ass/index.html` (replace `wt ass` with your project folder name if different).

## Hosting on GitHub

To host this project on GitHub:

1.  **Create a New Repository:**
    Go to GitHub and create a new public repository.

2.  **Initialize Git and Push:**
    Navigate to your project directory in your terminal/command prompt and run the following commands:

    ```bash
    git init
    git add .
    git commit -m "Initial commit of online registration form"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPOSITORY_NAME.git
git push -u origin main
    ```
    (Replace `YOUR_USERNAME` and `YOUR_REPOSITORY_NAME` with your actual GitHub username and repository name.)

This will push your code to GitHub. Note that for the PHP processing to work, you would typically need a web server that supports PHP hosting (like shared hosting or a VPS), not just GitHub Pages (which only hosts static HTML, CSS, JS). This setup is primarily for demonstrating the code and client-side functionality on GitHub. For the PHP backend to function, it needs to be run on a PHP-enabled server.
