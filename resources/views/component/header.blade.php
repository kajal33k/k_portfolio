<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Ghibli Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Josefin Slab', serif;
    }

    .ghibli-hover {
      position: relative;
      transition: all 0.3s ease-in-out;
      color: #f9e8f2;
    }

    .ghibli-hover::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -4px;
      height: 2px;
      width: 100%;
      background: linear-gradient(to right, #e9a8d6, #ad82d6);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.3s ease-in-out;
    }

    .ghibli-hover:hover {
      color: #e9a8d6;
      text-shadow: 0 0 6px #eac0ef, 0 0 10px #e9a8d6;
    }

    .ghibli-hover:hover::after {
      transform: scaleX(1);
    }

    .ghibli-glow {
      color: #650438;
      text-shadow: 0 0 5px #e7bdf0, 0 0 10px #b58ed5;
    }
  </style>
</head>
<body class="bg-[#1a132f] text-white">

  <!-- Navbar -->
  <nav class="w-full bg-[#1a132f] border-b border-purple-800/30 px-6 py-4 shadow-md shadow-purple-900/30">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      
      <!-- Brand -->
      <div class="text-2xl font-bold ghibli-glow">Kajal ✦ Web Alchemist</div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-6 text-base font-medium">
        <a href="#" class="ghibli-hover">Home</a>
        <a href="#" class="ghibli-hover">About</a>
        <a href="#" class="ghibli-hover">Projects</a>
        <a href="#" class="ghibli-hover">Contact</a>
        <a href="#" class="ghibli-hover">Resume</a>
      </div>

      <!-- Icons -->
      <div class="hidden md:flex gap-4 text-xl text-purple-200">
        <i class="fas fa-search ghibli-hover cursor-pointer"></i>
        <i class="fas fa-user ghibli-hover cursor-pointer"></i>
      </div>

      <!-- Mobile Toggle -->
      <div class="md:hidden">
        <button id="nav-toggle" class="text-purple-200 text-2xl">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 text-center text-base font-medium">
      <a href="#" class="block ghibli-hover">Home</a>
      <a href="#" class="block ghibli-hover">About</a>
      <a href="#" class="block ghibli-hover">Projects</a>
      <a href="#" class="block ghibli-hover">Contact</a>
      <a href="#" class="block ghibli-hover">Resume</a>
      <div class="flex justify-center gap-6 pt-2 text-xl text-purple-200">
        <i class="fas fa-search ghibli-hover cursor-pointer"></i>
        <i class="fas fa-user ghibli-hover cursor-pointer"></i>
      </div>
    </div>
  </nav>

  <script>
    const toggleBtn = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    toggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

</body>
</html>
