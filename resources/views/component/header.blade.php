<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portfolio | Neon Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    .neon {
      color: #9132E7;
      text-shadow: 0 0 5px #f9f9f9, 0 0 10px #ebe9ea;
    }
    .neon-hover:hover {
      color: #9132E7;
      text-shadow: 0 0 5px rgb(244, 243, 244), 0 0 10px #f8f6f8;
    }

     .neon-hover::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 2px;
    width: 100%;
    background: #7f5af0;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s ease-in-out;
  }

  .neon-hover:hover::after {
    transform: scaleX(1);
  }

  .neon-hover:hover {
    color: #7f5af0;
    text-shadow: 0 0 5px #7f5af0, 0 0 10px #7f5af0;
  }
  </style>
</head>
<body class="bg-black text-white">

  <!-- Navbar -->
  <nav class="w-full bg-black border-b border-gray-800 px-6 py-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <!-- Brand -->
      <div class="text-2xl font-bold neon">Kajal K.......</div>

      <!-- Desktop Menu -->
      <!-- Navigation Links -->
<div class="hidden md:flex items-center space-x-6 text-sm font-medium">
  <a href="#" class="relative text-white transition duration-300 ease-in-out neon-hover">Home</a>
  <a href="#" class="relative text-white transition duration-300 ease-in-out neon-hover">About</a>
  <a href="#" class="relative text-white transition duration-300 ease-in-out neon-hover">Projects</a>
  <a href="#" class="relative text-white transition duration-300 ease-in-out neon-hover">Contact</a>
  <a href="#" class="relative text-white transition duration-300 ease-in-out neon-hover">Resume</a>
</div>

      <!-- Icons -->
      <div class="hidden md:flex gap-4 text-xl">
        <i class="fas fa-search neon-hover cursor-pointer text-white"></i>
        <i class="fas fa-user neon-hover cursor-pointer text-white"></i>
      </div>

      <!-- Mobile Toggle -->
      <div class="md:hidden">
        <button id="nav-toggle" class="text-white text-2xl">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-4 text-center text-base font-medium">
      <a href="#" class="block neon-hover text-white">Home</a>
      <a href="#" class="block neon-hover text-white">About</a>
      <a href="#" class="block neon-hover text-white">Projects</a>
      <a href="#" class="block neon-hover text-white">Contact</a>
      <a href="#" class="block neon-hover text-white">Resume</a>
      <div class="flex justify-center gap-6 pt-2 text-xl">
        <i class="fas fa-search neon-hover cursor-pointer text-white"></i>
        <i class="fas fa-user neon-hover cursor-pointer text-white"></i>
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
