<?php
// header.php - site-wide header and navbar
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Leen-Co Tech Ltd</title>
  <meta name="description" content="Leen-Co Tech Ltd - Building Digital Solutions for Africa's Future" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/img/clients/leenco-favicon.png" />

  <!-- TailwindCSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            "royal-blue": "#1A4AFF",
            "light-blue": "#E8F0FF",
            "gold": "#D4AF37"
          },
          fontFamily: {
            poppins: ['Poppins', 'sans-serif']
          }
        }
      }
    }
  </script>

  <!-- Heroicons CDN (use as inline SVGs) -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Custom styles (minimal, Tailwind handles most) -->
  <link rel="stylesheet" href="assets/css/styles.css">

</head>
<body class="font-poppins bg-white text-gray-800 antialiased leading-relaxed">

<!-- Preloader -->
<div id="preloader" class="fixed inset-0 bg-white z-[60] flex items-center justify-center">
  <div class="animate-spin rounded-full h-16 w-16 border-4 border-royal-blue border-t-transparent"></div>
</div>

<!-- Sticky navbar -->
<header class="w-full fixed top-0 left-0 z-50 bg-white/80 backdrop-blur-sm shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <div class="flex-shrink-0 flex items-center">
        <a href="index.php" class="flex items-center gap-2">
          <img src="assets/img/clients/leenco-favicon.png" alt="Leen-Co Tech" class="w-10 h-10" />
          <span class="hidden sm:inline-block font-semibold text-lg text-royal-blue">Leen-Co Tech</span>
        </a>
      </div>

      <nav class="hidden md:flex items-center gap-6">
        <a href="index.php" class="text-sm text-gray-700 hover:text-royal-blue">Home</a>
        <a href="about.php" class="text-sm text-gray-700 hover:text-royal-blue">About</a>
        <a href="solutions.php" class="text-sm text-gray-700 hover:text-royal-blue">Solutions</a>
        <a href="contact.php" class="text-sm text-gray-700 hover:text-royal-blue">Contact</a>
      </nav>

      <div class="flex items-center gap-4">
        <a href="contact.php" class="hidden md:inline-block px-4 py-2 rounded-md bg-royal-blue text-white text-sm hover:opacity-95">Contact Us</a>

        <!-- Mobile menu button -->
        <button id="mobile-menu-button" class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:bg-gray-100" aria-expanded="false">
          <svg id="menu-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg id="menu-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="md:hidden hidden border-t">
    <div class="px-4 pt-4 pb-4 space-y-2">
      <a href="index.php" class="block text-gray-700 py-2">Home</a>
      <a href="about.php" class="block text-gray-700 py-2">About</a>
      <a href="solutions.php" class="block text-gray-700 py-2">Solutions</a>
      <a href="contact.php" class="block text-gray-700 py-2">Contact</a>
    </div>
  </div>
</header>

<main class="pt-20"> <!-- push content below sticky header -->
