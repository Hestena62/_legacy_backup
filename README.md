# Hesten's Learning Platform

Welcome to the **Hesten's Learning** repository! This is an adaptive, accessible, and gamified educational platform designed with neurodiversity in mind. It provides a personalized learning experience featuring focus tools, reading aids, and trackable progress for students from Pre-K through Grade 12.

## 🌟 Key Features

- **Adaptive Learning Paths:** Curriculum tailored for Elementary, Middle, and High School levels.
- **Accessibility First:** Built-in tools for neurodivergent learners, including reading aids and focus modes.
- **Gamified Experience:** Track completion rates, daily streaks, bookmarks, and celebrate progress!
- **Modern UI:** Responsive design featuring glassmorphism, vibrant gradients, and smooth CSS animations.
- **Performance Optimized:** Server-side templating with PHP for fast load times and better SEO.
- **Progressive Web App (PWA):** Includes a service worker and manifest for offline capabilities and installation.

## 🚀 Tech Stack

- **Frontend:** HTML5, Tailwind CSS, Vanilla JavaScript
- **Backend/Templating:** PHP
- **Icons:** FontAwesome

## 📁 Project Structure

- `/src/` - Contains reusable PHP components (Header, Footer).
- `/Level/` - Educational content and course modules for different grade levels.
- `/Images/`, `/font/` - Static assets and media.
- `index.php` - The main dashboard and entry point.
- `parents.php`, `teachers.php`, `students.php` - Portals for different user types.

## 🛠️ Getting Started

To run this project locally, you will need PHP installed on your machine.

1. Clone or download this repository.
2. Open your terminal/command prompt and navigate to the project root directory.
3. Start a local PHP development server:
   ```bash
   php -S localhost:8000
   ```
4. Open your web browser and navigate to `http://localhost:8000`.

## 👨‍💻 Development

Feel free to explore the codebase. The `index.php` file acts as the primary adaptive dashboard, while state management (like streaks and bookmarks) is currently handled via local storage in JavaScript to maintain a lightweight footprint.
