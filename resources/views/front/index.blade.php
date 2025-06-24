@extends('component.main')
@section('content')
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
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
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight tracking-tight" data-aos="fade-up">
                    <span class="text-purple-300" style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">Specializing</span> in Interactive and Responsive Web Development
                </h1>
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-purple-300 mb-8" data-aos="fade-up" data-aos-delay="100"
                    style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">
                    Professional Full Stack Developer
                </h2>

                <!-- Professional Summary -->
                <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="200">
                    Crafting elegant, performant web solutions with modern technologies including React, Node.js, Laravel, Tailwind CSS, and more.
                </p>

                <!-- Call to Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4 mt-12" data-aos="fade-up" data-aos-delay="300">
                    <a href="#projects"
                        class="px-8 py-3.5 bg-gradient-to-r from-purple-800 to-purple-600 hover:from-purple-600 hover:to-purple-800 text-white font-medium rounded-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 shadow-lg hover:shadow-purple-500/30">
                        View Portfolio
                    </a>
                    <a href="#contact"
                        class="px-8 py-3.5 bg-transparent border-2 border-purple-400 text-white hover:bg-gradient-to-r hover:from-purple-800 hover:to-purple-600 hover:border-transparent hover:text-white font-medium rounded-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">
                        Schedule Consultation
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
            <a href="#about" class="block">
                <svg class="w-7 h-7 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="relative bg-gray-950 py-20 px-6 md:px-12 lg:px-24">
        <!-- Background Video -->
        <div class="absolute inset-0 z-0">
            <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="{{ asset('asset/3174-166338976_small.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gray-950/50 backdrop-blur-sm"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    👨‍💻 About Me
                </h2>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    I'm a passionate <span class="font-semibold text-purple-300"
                        style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">Full Stack Developer</span> with 5+ years
                    of experience crafting responsive, high-performance web applications using modern technologies. I create
                    clean, semantic code with a focus on accessibility, performance, and cutting-edge design.
                </p>
            </div>

            <!-- Skills Grid -->
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Skill Card 1 -->
                <div class="bg-white/10 border border-gray-800 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition-all duration-300 hover:scale-105 hover:shadow-purple-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Frontend Development</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Expert in React, Vue.js, and modern JavaScript frameworks. Specialized in creating responsive, interactive UIs with Tailwind CSS, Sass, and CSS-in-JS solutions.
                    </p>
                </div>

                <!-- Skill Card 2 -->
                <div class="bg-white/10 border border-gray-800 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition-all duration-300 hover:scale-105 hover:shadow-purple-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">Backend Development</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Proficient in Node.js, Laravel, and Python. Experienced in building RESTful APIs, GraphQL services, and serverless architectures with AWS and Firebase.
                    </p>
                </div>

                <!-- Skill Card 3 -->
                <div class="bg-white/10 border border-gray-800 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition-all duration-300 hover:scale-105 hover:shadow-purple-500/20" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white">DevOps & Deployment</h3>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Skilled in Docker, Kubernetes, CI/CD pipelines, and cloud infrastructure. Experienced with AWS, GCP, and Azure deployments.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="relative overflow-hidden min-h-screen py-20 bg-gray-950">
        <!-- Video Background -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop class="w-full h-full object-cover opacity-20">
                <source src="https://cdn.pixabay.com/video/2024/02/09/199876-911694738_large.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/90"></div>
        </div>

        <div class="relative z-10 container mx-auto px-6 md:px-12 lg:px-24">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block text-sm font-semibold text-purple-300 mb-2 tracking-wider uppercase">
                    Technical Expertise
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    My <span class="text-purple-300">Skills</span> & Technologies
                </h2>
                <div class="w-20 h-1 bg-purple-300 mx-auto"></div>
            </div>

            <!-- Skills Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" data-aos="fade-up" data-aos-delay="100">
                <!-- Frontend Card -->
                <div class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-blue-400 hover:shadow-lg hover:shadow-blue-500/20">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-600 to-blue-400 rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-blue-500/10 rounded-lg flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Frontend Development</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                React.js / Next.js
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Vue.js / Nuxt.js
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                TypeScript
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Tailwind CSS
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Redux / Zustand
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Backend Card -->
                <div class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-purple-400 hover:shadow-lg hover:shadow-purple-500/20">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-purple-600 to-purple-400 rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-purple-500/10 rounded-lg flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Backend Development</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Node.js & Express
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                PHP & Laravel
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Python & Django
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                RESTful APIs
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                GraphQL
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Database Card -->
                <div class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-green-400 hover:shadow-lg hover:shadow-green-500/20">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-green-600 to-green-400 rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-green-500/10 rounded-lg flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">Database & ORM</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                PostgreSQL
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                MySQL
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                MongoDB
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Prisma
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Redis
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- DevOps Card -->
                <div class="group relative bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-xl p-8 transition-all duration-300 hover:border-yellow-400 hover:shadow-lg hover:shadow-yellow-500/20">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-yellow-600 to-yellow-400 rounded-xl opacity-0 group-hover:opacity-30 blur-sm transition duration-300"></div>
                    <div class="relative">
                        <div class="w-14 h-14 bg-yellow-500/10 rounded-lg flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-4">DevOps & Cloud</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Docker
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Kubernetes
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                AWS
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                CI/CD Pipelines
                            </li>
                            <li class="flex items-center text-gray-300">
                                <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Terraform
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Progress Bars Section -->
            <div class="mt-20 bg-gray-900/80 backdrop-blur-sm border border-gray-800 rounded-2xl p-8" data-aos="fade-up" data-aos-delay="200">
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
    </section>

    <!-- Projects Section -->
    <section id="projects" class="relative py-16 px-4 sm:px-8 lg:px-24 overflow-hidden bg-gray-950">
        <!-- Video Background -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-20">
                <source src="https://assets.mixkit.co/videos/preview/mixkit-developer-working-on-code-close-up-1727-large.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/10 to-gray-950/90"></div>
        </div>

        <!-- Content Container -->
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block text-sm font-semibold text-purple-300 mb-2 tracking-wider uppercase">
                    My Work
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Featured <span class="text-purple-300">Projects</span>
                </h2>
                <div class="w-20 h-1 bg-purple-300 mx-auto"></div>
            </div>
            
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Project Card 1 -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
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
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">React</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">D3.js</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">Node.js</span>
                        </div>
                        <div class="flex space-x-4 mt-4">
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition flex items-center justify-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                                Live Demo
                            </a>
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition flex items-center justify-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
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
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">Next.js</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">Stripe</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">MongoDB</span>
                        </div>
                        <div class="flex space-x-4 mt-4">
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition flex items-center justify-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                                Live Demo
                            </a>
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition flex items-center justify-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
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
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">Python</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">OpenAI</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs font-medium rounded">FastAPI</span>
                        </div>
                        <div class="flex space-x-4 mt-4">
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition flex items-center justify-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                                Live Demo
                            </a>
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-gray-200 text-gray-800 text-sm font-medium rounded-lg hover:bg-gray-300 transition flex items-center justify-center gap-1">
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
    <section id="cta" class="relative py-16 bg-gray-900 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-purple-500/10 to-gray-900/80"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid gap-4 text-center">
                <a href="#projects"
                    class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                    <div class="top relative hover:text-purple-400 transition-colors duration-300">View More Projects</div>
                    <div class="bottom absolute inset-0 text-purple-400 hover:text-white transition-colors duration-300">
                        View More Projects</div>
                </a>
                <a href="#"
                    class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                    <div class="top relative hover:text-purple-400 transition-colors duration-300">Download My CV</div>
                    <div class="bottom absolute inset-0 text-purple-400 hover:text-white transition-colors duration-300">
                        Download My CV</div>
                </a>
                <a href="#contact"
                    class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                    <div class="top relative hover:text-purple-400 transition-colors duration-300">Contact Me</div>
                    <div class="bottom absolute inset-0 text-purple-400 hover:text-white transition-colors duration-300">
                        Contact Me</div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="relative py-20 px-6 md:px-12 lg:px-24 bg-gray-950">
        <!-- Background Video -->
        <div class="absolute inset-0 z-0">
            <video class="w-full h-full object-cover opacity-20" autoplay muted loop playsinline>
                <source src="https://assets.mixkit.co/videos/preview/mixkit-digital-animation-of-a-network-of-lines-3124-large.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-purple-900/10 to-gray-950/90"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="inline-block text-sm font-semibold text-purple-300 mb-2 tracking-wider uppercase">
                    Get In Touch
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Contact <span class="text-purple-300">Me</span>
                </h2>
                <div class="w-20 h-1 bg-purple-300 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white/10 backdrop-blur-sm border border-gray-800 rounded-2xl p-8" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-2xl font-bold text-white mb-6">Send Me a Message</h3>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                placeholder="john@example.com">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" required
                                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                placeholder="Project Inquiry">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                                placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="submit"
                            class="w-full px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-800 text-white font-medium rounded-lg hover:from-purple-700 hover:to-purple-900 transition-all duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="space-y-8" data-aos="fade-up" data-aos-delay="200">
                    <div class="bg-white/10 backdrop-blur-sm border border-gray-800 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-white mb-6">Contact Information</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-300">Email</p>
                                    <p class="text-base text-white">contact@example.com</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-300">Phone</p>
                                    <p class="text-base text-white">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="flex-shrink-0 mt-1">
                                    <svg class="h-6 w-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium text-gray-300">Location</p>
                                    <p class="text-base text-white">San Francisco, CA</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white/10 backdrop-blur-sm border border-gray-800 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold text-white mb-6">Connect With Me</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600 transition">
                                <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                                <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-400 transition">
                                <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center hover:bg-red-600 transition">
                                <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 py-12 px-6 md:px-12 lg:px-24 border-t border-gray-800">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="flex items-center">
                        <span class="text-2xl font-bold text-white">Portfolio</span>
                    </a>
                    <p class="mt-2 text-sm text-gray-400">© 2023 My Portfolio. All rights reserved.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animation library
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animate the flip links on hover
        document.addEventListener('DOMContentLoaded', function() {
            const flipLinks = document.querySelectorAll('.flip-link');
            
            flipLinks.forEach(link => {
                const text = link.textContent.trim();
                link.innerHTML = '';
                
                const topDiv = document.createElement('div');
                topDiv.className = 'top relative hover:text-purple-400 transition-colors duration-300';
                
                const bottomDiv = document.createElement('div');
                bottomDiv.className = 'bottom absolute inset-0 text-purple-400 hover:text-white transition-colors duration-300';
                
                // Split text into characters and wrap each in a span
                text.split('').forEach((char, i) => {
                    const topSpan = document.createElement('span');
                    topSpan.textContent = char;
                    topSpan.style.transitionDelay = `${i * 25}ms`;
                    topDiv.appendChild(topSpan);
                    
                    const bottomSpan = document.createElement('span');
                    bottomSpan.textContent = char;
                    bottomSpan.style.transitionDelay = `${i * 25}ms`;
                    bottomDiv.appendChild(bottomSpan);
                });
                
                link.appendChild(topDiv);
                link.appendChild(bottomDiv);
                
                // Add hover effect
                link.addEventListener('mouseenter', () => {
                    topDiv.style.transform = 'translateY(-100%)';
                    bottomDiv.style.transform = 'translateY(0)';
                });
                
                link.addEventListener('mouseleave', () => {
                    topDiv.style.transform = 'translateY(0)';
                    bottomDiv.style.transform = 'translateY(100%)';
                });
            });
        });
    </script>
@endsection