    @extends('front.main')
    @section('content')
        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://cdn.pixabay.com/photo/2017/11/27/21/31/computer-2982270_1280.jpg"
                    alt="Professional developer workspace" class="w-full h-full object-cover" loading="eager">
                <div class="absolute inset-0 bg-gray-900/70 backdrop-blur-sm"></div>
            </div>

            <!-- Content Container -->
            <div class="container mx-auto px-6 z-10">.
                <div class="max-w-4xl mx-auto text-center px-4 py-16 md:py-24 lg:py-32">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight tracking-tight">
                        <span class="text-teal-400">Specializing</span> in Interactive and Responsive Web Development
                    </h1>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-teal-400 mb-8">
                        Professional Frontend Developer
                    </h2>

                    <!-- Professional Summary -->
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-12">
                        Crafting elegant, performant web solutions with modern technologies including React, Html, Css,
                        Javascript, Php ,Laravel and Tailwind CSS.
                    </p>

                    <!-- Call to Action Buttons -->
                    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-12">
                        <a href="#projects"
                            class="px-8 py-3.5 bg-teal-600 hover:bg-teal-700 text-white font-medium rounded-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 shadow-lg hover:shadow-teal-500/20">
                            View Portfolio
                        </a>
                        <a href="#contact"
                            class="px-8 py-3.5 bg-transparent border-2 border-[#7e625d] text-white hover:bg-[#574c4a] hover:text-white font-medium rounded-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-coral-500 focus:ring-offset-2">
                            Schedule Consultation
                        </a>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-7 h-7 text-teal-400 opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </div>
        </section>

        {{-- MY EXPERIENCES --}}

        <section class="bg-gray-950 py-16 px-6 md:px-12 lg:px-24 opacity-45">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-white mb-4">
                        👨‍💻 About Me
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
                        I’m a passionate <span class="font-semibold text-teal-600 dark:text-teal-400">Frontend
                            Developer</span> with 20+ years of experience crafting responsive, high-performance user
                        interfaces using <span class="font-semibold">HTML</span> and <span class="font-semibold">Tailwind
                            CSS</span>. I create clean, semantic code with a focus on accessibility, speed, and modern
                        design.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Skill Card 1 -->
                    <div
                        class="bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">🔧 HTML5</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Semantic, accessible, SEO-friendly HTML structure built with best practices and clean code
                            conventions.
                        </p>
                    </div>

                    <!-- Skill Card 2 -->
                    <div
                        class="bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">🎨 Tailwind CSS</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Utility-first, scalable design system with perfect responsiveness, mobile-first approach, and
                            custom themes.
                        </p>
                    </div>

                    <!-- Skill Card 3 -->
                    <div
                        class="bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-2">📱 Responsive Design</h3>
                        <p class="text-gray-600 dark:text-gray-400 text-sm">
                            Fully optimized layouts for mobile, tablet, and desktop using grid, flex, and responsive
                            utilities.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- SKILLS --}}

        <section class="bg-black opacity-65 dark:bg-gray-900 py-20 px-6 md:px-12 lg:px-24">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-4xl font-extrabold text-center text-gray-800 dark:text-white mb-12">
      <span class="relative after:absolute after:left-1/2 after:bottom-0 after:w-24 after:h-1 after:bg-blue-500 after:-translate-x-1/2 after:rounded-full">
        My Skills
      </span>
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
      
      <!-- Skill Card -->
      <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl p-6 shadow-sm hover:shadow-xl transform hover:-translate-y-1 transition duration-300 ease-in-out">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Frontend</h3>
        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-base">
          <li>HTML5 & CSS3</li>
          <li>Tailwind CSS</li>
          <li>JavaScript</li>
          <li>React.js</li>
          <li>Vue.js</li>
        </ul>
      </div>

      <!-- Skill Card -->
      <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl p-6 shadow-sm hover:shadow-xl transform hover:-translate-y-1 transition duration-300 ease-in-out">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Backend</h3>
        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-base">
          <li>PHP</li>
          <li>Laravel</li>
          <li>Node.js</li>
          <li>MySQL</li>
          <li>REST APIs</li>
        </ul>
      </div>

      <!-- Skill Card -->
      <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl p-6 shadow-sm hover:shadow-xl transform hover:-translate-y-1 transition duration-300 ease-in-out">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Tools</h3>
        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-base">
          <li>Git & GitHub</li>
          <li>VS Code</li>
          <li>Webpack / Vite</li>
          <li>Figma</li>
          <li>Postman</li>
        </ul>
      </div>

      <!-- Skill Card -->
      <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl p-6 shadow-sm hover:shadow-xl transform hover:-translate-y-1 transition duration-300 ease-in-out">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Others</h3>
        <ul class="text-gray-600 dark:text-gray-300 space-y-2 text-base">
          <li>Responsive Design</li>
          <li>SEO Optimization</li>
          <li>Performance Tuning</li>
          <li>Agile / Scrum</li>
          <li>Cross-browser Testing</li>
        </ul>
      </div>

    </div>
  </div>
</section>

        {{-- PROJECTS --}}
        <section class="bg-gray-100 py-16 px-4 sm:px-8 lg:px-24 ">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">My Projects</h2>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                    <!-- Project Card -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 1"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 1</h3>
                            <p class="text-gray-600 mb-4">Short description of the project. Highlight key tech and goals.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate this block for more projects -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 2"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 2</h3>
                            <p class="text-gray-600 mb-4">Brief description explaining your role and impact.</p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 1"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 1</h3>
                            <p class="text-gray-600 mb-4">Short description of the project. Highlight key tech and goals.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate this block for more projects -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 2"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 2</h3>
                            <p class="text-gray-600 mb-4">Brief description explaining your role and impact.</p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 1"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 1</h3>
                            <p class="text-gray-600 mb-4">Short description of the project. Highlight key tech and goals.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate this block for more projects -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 2"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 2</h3>
                            <p class="text-gray-600 mb-4">Brief description explaining your role and impact.</p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 1"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 1</h3>
                            <p class="text-gray-600 mb-4">Short description of the project. Highlight key tech and goals.
                            </p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate this block for more projects -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                        <img src="https://cdn.pixabay.com/photo/2024/02/06/08/34/woman-8556399_1280.png" alt="Project 2"
                            class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">Project Title 2</h3>
                            <p class="text-gray-600 mb-4">Brief description explaining your role and impact.</p>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition">Live</a>
                                <a href="#"
                                    class="px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition">GitHub</a>
                            </div>
                        </div>
                    </div>

                    <!-- Add more cards as needed -->

                </div>
            </div>
        </section>

    @endsection
