<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class=" text-gray-800 dark:text-white">

  <!-- Navbar -->
  <nav class="bg-black opacity-40 top-0 left-0 w-full z-50 text-white  shadow border-b border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">

        <!-- Logo -->
        <a href="#" class="text-xl font-bold">
          <span class="text-teal-600 dark:text-teal-400">Port</span>folio
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 items-center">
          <a href="#home" class="hover:text-teal-600 dark:hover:text-teal-400">Home</a>
          <a href="#about" class="hover:text-teal-600 dark:hover:text-teal-400">About</a>
          <a href="#projects" class="hover:text-teal-600 dark:hover:text-teal-400">Projects</a>
          <a href="#skills" class="hover:text-teal-600 dark:hover:text-teal-400">Skills</a>
          <a href="#contact" class="hover:text-teal-600 dark:hover:text-teal-400">Contact</a>

       

          <!-- CTA Button -->
          <a href="#hire-me" class="bg-teal-600 hover:bg-teal-700 text-white px-4 py-2 rounded-md font-medium">Hire Me</a>
        </div>

        <!-- Mobile menu button -->
        <button id="menu-toggle" class="md:hidden text-gray-500 dark:text-gray-400 focus:outline-none" aria-label="Toggle menu" aria-expanded="false">
          <i id="menu-icon" class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pt-4 pb-6 space-y-2 bg-white dark:bg-gray-900">
      <a href="#home" class="block hover:text-teal-600 dark:hover:text-teal-400">Home</a>
      <a href="#about" class="block hover:text-teal-600 dark:hover:text-teal-400">About</a>
      <a href="#projects" class="block hover:text-teal-600 dark:hover:text-teal-400">Projects</a>
      <a href="#skills" class="block hover:text-teal-600 dark:hover:text-teal-400">Skills</a>
      <a href="#contact" class="block hover:text-teal-600 dark:hover:text-teal-400">Contact</a>
      <a href="#hire-me" class="block bg-teal-600 hover:bg-teal-700 text-white text-center py-2 rounded-md">Hire Me</a>

    
    </div>
  </nav>

  <!-- Scripts -->
  <script>
    // Theme toggle
   

   

    // Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');

    menuToggle.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
      menuIcon.classList.toggle('fa-bars');
      menuIcon.classList.toggle('fa-times');
    });

    // Auto-close mobile menu on link click
    document.querySelectorAll('#mobile-menu a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuIcon.classList.add('fa-bars');
        menuIcon.classList.remove('fa-times');
      });
    });
  </script>

