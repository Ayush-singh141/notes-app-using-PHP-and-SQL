

---

# Notes App

A simple web-based Notes application built with PHP, SQL, HTML, and CSS that allows users to create, view, edit, and delete notes. This project is a great example of CRUD operations using PHP and SQL for beginners in web development.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Add Notes**: Users can create new notes with a title and content.
- **View Notes**: Users can view a list of all their saved notes.
- **Edit Notes**: Users can edit the title and content of existing notes.
- **Delete Notes**: Users can delete notes that are no longer needed.
- **Responsive Design**: Optimized for both desktop and mobile views.

## Technologies Used

- **PHP**: Backend logic and server-side scripting.
- **SQL**: Database management to store notes.
- **HTML/CSS**: Frontend structure and styling for a clean user interface.

## Installation

To get a local copy up and running, follow these steps:

**Copy the provided file to `C:\xampp\htdocs`**
**Set up the Database:**

   - Create a MySQL database called `notes_app` (or choose a name and update config).
   - Import the SQL file provided (e.g., `notes_app.sql`) to set up tables.

**Configure the Database Connection:**

   - Open `config.php` and update the following parameters:

     ```php
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'root');
     define('DB_PASSWORD', '');
     define('DB_NAME', 'notes');
     ```

**Run the Application:**

   - Start your local server (Apache and MySQL).
   - Navigate to `http://localhost/notes app` in your browser.

## Usage

1. Open the application in your web browser.
2. Add a new note by filling out the title and content fields.
3. Edit or delete notes as needed from the main dashboard.

## Contributing

Contributions are welcome! Follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add a feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

## License

Distributed under the MIT License. See `LICENSE` for more information.

---

