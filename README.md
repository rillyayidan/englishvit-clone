# Englishvit Homepage Clone

A responsive homepage clone of [Englishvit.com](https://englishvit.com) built with **Laravel Blade** and **Tailwind CSS v4**.

This project was created as a frontend slicing practice using Laravel Blade components, Tailwind utility classes, responsive layouts, carousel interactions, and reusable sections.

---

## Preview

This homepage clone includes several sections inspired by the Englishvit landing page:

* Navbar
* Hero Section
* Study Program Section
* Recommended Programs Carousel
* Testimonials Section
* Partner Logo Marquee
* Promo Section
* Why Choose Us Section
* Free English Level Check CTA
* FAQ Accordion
* Media Coverage Section
* Consultation CTA
* Blog Section
* Footer

---

## Tech Stack

* **Laravel**
* **Blade Templating**
* **Tailwind CSS v4**
* **Vite**
* **Vanilla JavaScript**

---

## Features

### Responsive Design

The page is fully responsive and adapts to desktop, tablet, and mobile screen sizes.

### Tailwind CSS v4 Setup

This project uses Tailwind CSS v4 with the Vite plugin.

```css
@import 'tailwindcss';
```

No `tailwind.config.js` file is required for the default Tailwind v4 setup.

### Interactive Carousel

The recommended program and testimonial sections include horizontal carousel behavior with:

* Previous and next buttons
* Clickable pagination dots
* Scroll snapping
* Responsive item count per screen size

### FAQ Accordion

The FAQ section includes an animated accordion where:

* The selected question expands smoothly
* The `+` icon changes into a `-`
* Only one item opens at a time

### Moving Logo Marquee

The partner and media logo sections include a smooth left-moving marquee animation using CSS keyframes.

---

## Installation

Clone the repository:

```bash
git clone https://github.com/your-username/englishvit-clone.git
```

Go into the project directory:

```bash
cd englishvit-clone
```

Install PHP dependencies:

```bash
composer install
```

Install JavaScript dependencies:

```bash
npm install
```

Copy the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Run the Laravel development server:

```bash
php artisan serve
```

Run Vite:

```bash
npm run dev
```

Open the project in your browser:

```text
http://127.0.0.1:8000
```

---

## Tailwind CSS v4 Setup

Tailwind is configured through `resources/css/app.css`:

```css
@import 'tailwindcss';

@source '../../vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php';
@source '../../storage/framework/views/*.php';
@source '../**/*.blade.php';
@source '../**/*.js';
```

Tailwind is loaded through Vite in `vite.config.js` using `@tailwindcss/vite`.

---

## Project Structure

```text
resources/
├── css/
│   └── app.css
├── js/
│   └── app.js
└── views/
    ├── components/
    │   ├── navbar.blade.php
    │   └── footer.blade.php
    ├── layouts/
    │   └── app.blade.php
    └── welcome.blade.php
```

---

## Main Blade Layout

The main layout is located at:

```text
resources/views/layouts/app.blade.php
```

It loads the navbar, page content, and footer:

```blade
<body class="overflow-x-hidden bg-white text-slate-900 antialiased">
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
```

---

## Assets

Some images are loaded from Englishvit public CDN URLs for cloning and layout practice.

The main hero image is stored locally in:

```text
public/top.webp
```

And loaded using:

```blade
{{ asset('top.webp') }}
```

---

## Notes

This project is for educational purposes only.

It is a homepage clone created to practice:

* Laravel Blade layouting
* Tailwind CSS slicing
* Responsive web design
* Landing page UI composition
* Basic JavaScript interactions

All Englishvit branding, images, and content belong to their respective owner.

---

## Author

Created by **Rilly Ayidan** as a Laravel + Tailwind CSS frontend slicing project.
