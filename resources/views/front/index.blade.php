    @extends('front.main')
    @section('content')
        <!-- Include AOS library for animations -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Hero Section -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
            <!-- Background Video with Overlay -->
            <div class="absolute inset-0 z-0">
                <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                    <source src="{{ asset('asset/91069-628462649_small.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="absolute inset-0 bg-gray-900/50 backdrop-blur-sm"></div>
            </div>

            <!-- Content Container -->
            <div class="container mx-auto px-6 z-10">
                <div class="max-w-4xl mx-auto text-center px-4 py-16 md:py-24 lg:py-32">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight tracking-tight">
                        <span class="text-[#45052d]"
                            style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">Specializing</span> in Interactive and
                        Responsive Web Development
                    </h1>
                    <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-[#45052d] mb-8"
                        style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">
                        Professional Frontend Developer
                    </h2>

                    <!-- Professional Summary -->
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-12">
                        Crafting elegant, performant web solutions with modern technologies including React, HTML, CSS,
                        JavaScript, PHP, Laravel and Tailwind CSS.
                    </p>

                    <!-- Call to Action Buttons -->
                    <!-- Call to Action Buttons -->
                    <div class="flex flex-col sm:flex-row justify-center gap-4 mt-12">
                        <a href="#projects"
                            class="px-8 py-3.5 bg-gradient-to-r from-[#45052d] to-[#73264e] hover:from-[#73264e] hover:to-[#45052d] text-white font-medium rounded-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#73264e] focus:ring-offset-2 shadow-lg hover:shadow-[#73264e]/30">
                            View Portfolio
                        </a>
                        <a href="#contact"
                            class="px-8 py-3.5 bg-gradient-to-r from-transparent to-transparent border-2 border-[#7e625d] text-white hover:from-[#45052d] hover:to-[#73264e] hover:text-white font-medium rounded-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#73264e] focus:ring-offset-2">
                            Schedule Consultation
                        </a>
                    </div>

                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-7 h-7 text-black opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </div>
        </section>


        {{-- MY EXPERIENCES / ABOUT ME SECTION --}}
        <section class="relative bg-gray-950 py-20 px-6 md:px-12 lg:px-24">
            <!-- Background Video -->
            <div class="absolute inset-0 z-0 ">
                <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                    <source src="{{ asset('asset/3174-166338976_small.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="absolute inset-0 bg-gray-950/50 backdrop-blur-sm"></div>
            </div>

            <!-- Content -->
            <div class="relative z-10 max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                        👨‍💻 About Me
                    </h2>
                    <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed">
                        I’m a passionate <span class="font-semibold text-[#45052d]"
                            style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">Frontend Developer</span> with 20+ years
                        of experience crafting responsive, high-performance user interfaces using <span
                            class="font-semibold">HTML</span> and <span class="font-semibold">Tailwind CSS</span>. I create
                        clean, semantic code with a focus on accessibility, performance, and modern design.
                    </p>
                </div>

                <!-- Skills Grid -->
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Skill Card 1 -->
                    <div
                        class="bg-white/10 border border-gray-800 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition hover:scale-105 hover:shadow-[#45052d] duration-300">
                        <h3 class="text-xl font-semibold text-white mb-3">🔧 HTML5</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            Semantic, accessible, SEO-friendly HTML structures built using best practices and clean
                            conventions.
                        </p>
                    </div>

                    <!-- Skill Card 2 -->
                    <div
                        class="bg-white/10 border border-gray-800 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition hover:scale-105 hover:shadow-[#45052d] duration-300">
                        <h3 class="text-xl font-semibold text-white mb-3">🎨 Tailwind CSS</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            Utility-first CSS with scalability, mobile-first approach, custom themes, and pixel-perfect
                            design control.
                        </p>
                    </div>

                    <!-- Skill Card 3 -->
                    <div
                        class="bg-white/10 border border-gray-800 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition hover:scale-105 hover:shadow-[#45052d] duration-300">
                        <h3 class="text-xl font-semibold text-white mb-3">📱 Responsive Design</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            Fully optimized layouts for mobile, tablet, and desktop using grid, flex, and advanced
                            responsive utilities.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- SKILLS --}}
        <section class="relative overflow-hidden">
            <!-- Video Background -->
            <div class="absolute inset-0 z-0">
                <video autoplay muted loop class="w-full h-full object-cover opacity-50">
                    <source src="https://cdn.pixabay.com/video/2024/02/09/199876-911694738_large.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"
                    style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;"></div>
            </div>

            <div class="relative z-10 py-20 px-6 md:px-12 lg:px-24">
                <div class="max-w-7xl mx-auto">
                    <!-- Section Header with Animation -->
                    <div class="text-center mb-16" data-aos="fade-up">
                        <span class="inline-block text-sm font-semibold text-[#45052d] mb-2 tracking-wider uppercase"
                            style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">
                            Technical Expertise
                        </span>
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                            My <span class="text-[#45052d]"
                                style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">Skills</span> & Technologies
                        </h2>
                        <div class="w-20 h-1 bg-[#45052d] mx-auto" style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">
                        </div>
                    </div>

                    <!-- Skills Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" data-aos="fade-up"
                        data-aos-delay="100">

                        <!-- Frontend Card -->
                        <div
                            class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-blue-400 hover:shadow-lg hover:shadow-blue-500/20">
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-[#45052d] to-[#b4257d] rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300">
                            </div>
                            <div class="relative">
                                <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg"
                                        alt="Frontend" class="w-8 h-8">
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4">Frontend Development</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        HTML5 & CSS3
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        JavaScript (ES6+)
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        React.js / Next.js
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Tailwind CSS
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Vue.js / Nuxt.js
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Backend Card -->
                        <div
                            class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-purple-400 hover:shadow-lg hover:shadow-purple-500/20">
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-purple-400 rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300">
                            </div>
                            <div class="relative">
                                <div class="w-14 h-14 bg-purple-500/10 rounded-lg flex items-center justify-center mb-6">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg"
                                        alt="Backend" class="w-8 h-8">
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4">Backend Development</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Node.js & Express
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        PHP & Laravel
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        RESTful APIs
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        MySQL / MongoDB
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        GraphQL
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Tools Card -->
                        <div
                            class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-green-400 hover:shadow-lg hover:shadow-green-500/20">
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-green-400 rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300">
                            </div>
                            <div class="relative">
                                <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg"
                                        alt="Tools" class="w-8 h-8">
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4">Dev Tools</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Git & GitHub
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Docker
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        VS Code
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Webpack / Vite
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        CI/CD Pipelines
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Other Skills Card -->
                        <div
                            class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-yellow-400 hover:shadow-lg hover:shadow-yellow-500/20">
                            <div
                                class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-yellow-400 rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300">
                            </div>
                            <div class="relative">
                                <div class="w-14 h-14 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original.svg"
                                        alt="Other Skills" class="w-8 h-8">
                                </div>
                                <h3 class="text-xl font-bold text-white mb-4">Other Expertise</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        AWS / Cloud Services
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Performance Optimization
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Agile / Scrum
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Testing (Jest, Cypress)
                                    </li>
                                    <li class="flex items-center text-gray-300">
                                        <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        Technical Leadership
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- Progress Bars Section -->
                    <div class="mt-20 bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-2xl p-8"
                        data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-2xl font-bold text-white mb-6">Skill Proficiency</h3>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-white font-medium">JavaScript / TypeScript</span>
                                    <span class="text-blue-400">95%</span>
                                </div>
                                <div class="w-full bg-gray-800 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 95%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-white font-medium">React & Next.js</span>
                                    <span class="text-blue-400">90%</span>
                                </div>
                                <div class="w-full bg-gray-800 rounded-full h-2.5">
                                    <div class="bg-blue-500 h-2.5 rounded-full" style="width: 90%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-white font-medium">Node.js & Express</span>
                                    <span class="text-purple-400">85%</span>
                                </div>
                                <div class="w-full bg-gray-800 rounded-full h-2.5">
                                    <div class="bg-purple-500 h-2.5 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-white font-medium">Database Design</span>
                                    <span class="text-green-400">80%</span>
                                </div>
                                <div class="w-full bg-gray-800 rounded-full h-2.5">
                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      {{-- PROJECTS WITH VIDEO BACKGROUND --}}
<section class="relative py-16 px-4 sm:px-8 lg:px-24 overflow-hidden">
    <!-- Video Background -->
    <div class="absolute inset-0 z-0 overflow-hidden">
        <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-20">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-developer-working-on-code-close-up-1727-large.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    
    <!-- Content Container -->
    <div class="max-w-7xl mx-auto relative z-10">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">My Projects</h2>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            
            <!-- Project Card 1 -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="Data Visualization Dashboard"
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <h3 class="text-xl font-semibold text-gray-800">Data Analytics Dashboard</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Interactive dashboard with real-time data visualization using React, D3.js, and Node.js.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">React</span>
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">D3.js</span>
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">Node.js</span>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="flex-1 px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition flex items-center justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            Live Demo
                        </a>
                        <a href="#" class="flex-1 px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition flex items-center justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                         alt="E-commerce Platform"
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <h3 class="text-xl font-semibold text-gray-800">E-commerce Platform</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Full-featured online store with payment integration, built with Next.js and Stripe API.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">Next.js</span>
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">Stripe</span>
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">MongoDB</span>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="flex-1 px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition flex items-center justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            Live Demo
                        </a>
                        <a href="#" class="flex-1 px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition flex items-center justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="relative overflow-hidden h-48">
                    <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                         alt="AI Chat Application"
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-2">
                        <h3 class="text-xl font-semibold text-gray-800">AI Chat Application</h3>
                    </div>
                    <p class="text-gray-600 mb-4">Conversational AI platform using OpenAI's API with custom fine-tuning and context memory.</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">Python</span>
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">OpenAI</span>
                        <span class="px-2 py-1 bg-teal-100 text-teal-800 text-xs font-medium rounded">FastAPI</span>
                    </div>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="flex-1 px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-lg hover:bg-teal-700 transition flex items-center justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                            Live Demo
                        </a>
                        <a href="#" class="flex-1 px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition flex items-center justify-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animated Links Section -->
<section class="relative py-16 bg-gray-900 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-teal-500/10 to-gray-900/80"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid gap-4 text-center">
            <a href="#" class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                <div class="top relative hover:text-teal-400 transition-colors duration-300">View More Projects</div>
                <div class="bottom absolute inset-0 text-teal-400 hover:text-white transition-colors duration-300">View More Projects</div>
            </a>
            <a href="#" class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                <div class="top relative hover:text-teal-400 transition-colors duration-300">Download My CV</div>
                <div class="bottom absolute inset-0 text-teal-400 hover:text-white transition-colors duration-300">Download My CV</div>
            </a>
            <a href="#" class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                <div class="top relative hover:text-teal-400 transition-colors duration-300">Contact Me</div>
                <div class="bottom absolute inset-0 text-teal-400 hover:text-white transition-colors duration-300">Contact Me</div>
            </a>
        </div>
    </div>
</section>

<style>
    .flip-link {
        height: 1em;
    }
    .flip-link .bottom {
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    .flip-link:hover .top {
        transform: translateY(-100%);
    }
    .flip-link:hover .bottom {
        transform: translateY(0);
    }
    .flip-link div {
        transition: transform 0.3s ease, color 0.3s ease;
        will-change: transform;
    }
</style>

        <script>
            const labels = ["Twitter", "Linkedin", "Facebook", "Instagram"];
            const links = document.querySelectorAll(".flip-link");

            links.forEach((link, index) => {
                const text = labels[index];
                const top = link.querySelector(".top");
                const bottom = link.querySelector(".bottom");

                [...text].forEach((letter, i) => {
                    const delay = i * 25;

                    const topSpan = document.createElement("span");
                    const bottomSpan = document.createElement("span");

                    topSpan.textContent = letter;
                    bottomSpan.textContent = letter;

                    topSpan.style.transitionDelay = `${delay}ms`;
                    bottomSpan.style.transitionDelay = `${delay}ms`;

                    top.appendChild(topSpan);
                    bottom.appendChild(bottomSpan);
                });
            });
        </script>
        <script>
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: true
            });
        </script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @endsection
