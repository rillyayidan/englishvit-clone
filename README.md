# Englishvit Homepage Clone

A responsive homepage clone of [Englishvit.com](https://englishvit.com) built with **Laravel**, **Blade templating**, **Tailwind CSS v4**, **Vite**, and **Vanilla JavaScript**.

This project was created as a frontend slicing and landing page practice project. The goal was to recreate the structure and feel of the Englishvit homepage while improving the code organization through reusable Blade components and modular section partials.

---

## Overview

The homepage is built as a single-page landing page with multiple reusable sections. Each major section is separated into its own Blade partial to keep the project easier to maintain, debug, and extend.

The page includes:

* Navbar
* Hero Section
* Study Program Section
* Recommended Programs Carousel
* Testimonials Section
* Partner Logo Marquee
* Promo Section with Countdown Timer
* Why Choose Us Section
* Free English Level Check CTA
* FAQ Accordion
* Media Coverage Marquee
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

## Key Features

### Responsive Landing Page

The homepage is fully responsive and adapts to desktop, tablet, and mobile screen sizes.

### Modular Blade Structure

The original long homepage file was refactored into smaller Blade partials. This keeps `welcome.blade.php` clean and focused only on section order.

### Tailwind CSS v4 Setup

This project uses Tailwind CSS v4 with the Vite plugin and the new CSS-first setup.

```css
@import 'tailwindcss';
```

No `tailwind.config.js` file is required for the default Tailwind CSS v4 setup.

### Interactive Program Carousel

The recommended programs section includes a horizontal carousel with:

* Previous and next buttons
* Clickable pagination dots
* Scroll snapping
* Responsive item count per screen size

### Testimonials Carousel

The testimonials section includes a separate carousel interaction for student reviews.

### FAQ Accordion

The FAQ section includes an animated accordion where:

* The selected question expands smoothly
* The `+` icon changes into a `-`
* Only one item opens at a time

### Moving Logo Marquees

The partner and media coverage sections use smooth left-moving logo marquees powered by CSS keyframes.

### Countdown Promo Banner

The promo section includes a countdown timer built with vanilla JavaScript.

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

Run Vite in a separate terminal:

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
    ├── sections/
    │   ├── hero.blade.php
    │   ├── study-programs.blade.php
    │   ├── best-programs.blade.php
    │   ├── testimonials.blade.php
    │   ├── promo.blade.php
    │   ├── why-us.blade.php
    │   ├── level-check.blade.php
    │   ├── faq.blade.php
    │   ├── covered-by.blade.php
    │   └── blog.blade.php
    └── welcome.blade.php
```

---

## Main Blade Layout

The main layout is located at:

```text
resources/views/layouts/app.blade.php
```

It loads the navbar, page content, footer, and pushed section scripts:

```blade
<body class="overflow-x-hidden bg-white text-slate-900 antialiased">
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')
</body>
```

---

## Homepage Entry File

After refactoring, `resources/views/welcome.blade.php` only controls the order of the homepage sections:

```blade
@extends('layouts.app')

@section('content')
    @include('sections.hero')
    @include('sections.study-programs')
    @include('sections.best-programs')
    @include('sections.testimonials')
    @include('sections.promo')
    @include('sections.why-us')
    @include('sections.level-check')
    @include('sections.faq')
    @include('sections.covered-by')
    @include('sections.blog')
@endsection
```

---

## JavaScript Organization

Interactive scripts are placed inside their related Blade section files using Blade stacks.

Example:

```blade
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Section-specific interaction
        });
    </script>
@endpush
```

The scripts are rendered from the main layout using:

```blade
@stack('scripts')
```

This keeps each section self-contained while preventing the main page file from becoming too large.

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

The browser favicon is stored locally in:

```text
public/english_logos.jpeg
```

And loaded in the main layout using:

```blade
<link rel="icon" type="image/jpeg" href="{{ asset('english_logos.jpeg') }}">
```

---

## Development Notes

This project is for educational and portfolio purposes only.

It was built to practice:

* Laravel Blade layouting
* Tailwind CSS v4 slicing
* Responsive web design
* Landing page UI composition
* Blade components and partials
* Basic JavaScript interactions
* Carousel behavior
* Accordion behavior
* CSS marquee animation

All Englishvit branding, images, logos, and content belong to their respective owner.


---

## Author

Created by **M Rilly Ayidan** as a Laravel + Tailwind CSS frontend slicing project.
