@extends('component.main')
@section('content')
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Hero Section -->
   <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-black text-white font-serif">
    <!-- Background Video with Magical Overlay -->
    <div class="absolute inset-0 z-0">
        <video class="w-full h-full object-cover" autoplay muted loop playsinline>
            <source src="{{ asset('asset/91069-628462649_small.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <!-- Dreamy Mist Overlay -->
        <div class="absolute inset-0 bg-[#2c1d33]/60 backdrop-blur-sm"></div>

        <!-- Floating Firefly Particles -->
        <div class="pointer-events-none absolute inset-0 z-10 overflow-hidden">
            <div class="w-full h-full animate-pulse opacity-20 bg-[url('https://www.transparenttextures.com/patterns/constellation.png')]"></div>
        </div>
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-6 z-20">
        <div class="max-w-4xl mx-auto text-center px-4 py-16 md:py-24 lg:py-32">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight tracking-tight"
                data-aos="fade-up"
                style="text-shadow: 0 0 6px #c7a0dd, 0 0 14px #9d79b9;">
                <span class="text-pink-800">Whimsically</span> crafting Responsive & Magical Interfaces
            </h1>
            <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold text-pink-800 mb-8"
                data-aos="fade-up"
                data-aos-delay="100"
                style="text-shadow: 0 0 5px #f0bbd4, 0 0 10px #eec5d7;">
                Enchanted Full Stack Developer
            </h2>

            <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="200">
                Building elegant, high-performance web worlds using Laravel, Tailwind CSS, and modern front-end magic.
            </p>

            <!-- Enchanted Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-12" data-aos="fade-up" data-aos-delay="300">
                <a href="#projects"
                    class="px-8 py-3.5 bg-gradient-to-r from-pink-800 to-[#1A132F] hover:from-[#1A132F] hover:to-pink-800 text-white font-medium rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg shadow-purple-500/30 focus:outline-none focus:ring-2 focus:ring-pink-300 focus:ring-offset-2">
                    ✨ View Portfolio
                </a>
                <a href="#contact"
                    class="px-8 py-3.5 border-2 border-pink-900 text-white hover:bg-gradient-to-r hover:from-[#1A132F] hover:to-pink-800 hover:text-white font-medium rounded-full transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-pink-300 focus:ring-offset-2">
                    🌿 Schedule Consultation
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator with Ghibli Glow -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
        <a href="#about" class="block">
            <svg class="w-8 h-8 text-pink-800 drop-shadow-md" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </a>
    </div>
</section>


    <!-- About Me Section -->
 <section id="about" class="relative bg-[#1a132f] py-20 px-6 md:px-12 lg:px-24 font-serif overflow-hidden">
    <!-- Background Video -->
    <div class="absolute inset-0 z-0">
        <video class="w-full h-full object-cover opacity-60" autoplay muted loop playsinline>
            <source src="{{ asset('asset/3174-166338976_small.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="absolute inset-0 bg-[#1a132f]/60 backdrop-blur-sm"></div>

        <!-- Magical Particle Texture -->
        <div class="pointer-events-none absolute inset-0 z-10 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10 mix-blend-overlay"></div>
    </div>

    <!-- Content -->
    <div class="relative z-20 max-w-6xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-pink-800 mb-6 drop-shadow-md"
                style="text-shadow: 0 0 10px #d3a8f0, 0 0 20px #b989d3;">
                🌸 About Me
            </h2>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed">
                I'm a dedicated <span class="font-semibold text-pink-800"
                    style="text-shadow: 0 0 5px #eea7ef, 0 0 10px #e1b1dc;">Full Stack Developer</span> with 5+ years of experience building responsive, accessible, and beautifully performant websites using modern tech stacks—with a touch of magic ✨.
            </p>
        </div>

        <!-- Skills Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Skill Card 1 -->
            <div class="bg-white/10 border border-purple-900/40 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition-all duration-300 hover:scale-105 hover:shadow-pink-400/20"
                data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-pink-300/20 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-laptop-code text-pink-800 text-lg"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-pink-900">Frontend Development</h3>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Expert in React, Vue.js & modern UI frameworks. I craft elegant interfaces using Tailwind CSS & CSS magic.
                </p>
            </div>

            <!-- Skill Card 2 -->
            <div class="bg-white/10 border border-purple-900/40 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition-all duration-300 hover:scale-105 hover:shadow-pink-400/20"
                data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-pink-300/20 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-server text-pink-800 text-lg"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-pink-900">Backend Development</h3>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    Proficient in Laravel, Node.js & Python. I architect scalable APIs & server logic with serene precision.
                </p>
            </div>

            <!-- Skill Card 3 -->
            <div class="bg-white/10 border border-purple-900/40 p-6 rounded-2xl shadow-lg backdrop-blur-sm transition-all duration-300 hover:scale-105 hover:shadow-pink-400/20"
                data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-pink-300/20 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-cloud-upload-alt text-pink-800 text-lg"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-pink-900">DevOps & Deployment</h3>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed">
                    I bring dreams to life in the cloud with Docker, CI/CD, and AWS. I build pipelines that sing 🌬️.
                </p>
            </div>
        </div>
    </div>
</section>


    <!-- Skills Section -->
<section id="skills" class="relative overflow-hidden min-h-screen py-20 bg-[#1a132f] font-serif">
  <!-- Video Background -->
  <div class="absolute inset-0 z-0">
    <video autoplay muted loop class="w-full h-full object-cover opacity-20">
      <source src="https://cdn.pixabay.com/video/2024/02/09/199876-911694738_large.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 to-black/90"></div>
    <div class="pointer-events-none absolute inset-0 z-10 bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] opacity-10 mix-blend-overlay"></div>
  </div>

  <div class="relative z-10 container mx-auto px-6 md:px-12 lg:px-24">
    <!-- Section Header -->
    <div class="text-center mb-16" data-aos="fade-up">
      <span class="inline-block text-sm font-semibold text-pink-200 mb-2 tracking-wider uppercase">Technical Expertise</span>
      <h2 class="text-4xl md:text-5xl font-bold text-pink-100 mb-4 drop-shadow-md" style="text-shadow: 0 0 10px #f7c4ff;">
        My <span class="text-pink-800">Skills</span> & Technologies
      </h2>
      <div class="w-20 h-1 bg-purple-300 mx-auto"></div>
    </div>

    <!-- Include your skill cards here without changes (already styled well) -->

    <!-- Ghibli-Styled Progress Bars -->
    <div class="mt-20 bg-white/5 border border-white/10 rounded-2xl p-8 shadow-lg shadow-purple-500/10" data-aos="fade-up" data-aos-delay="200">
      <h3 class="text-2xl font-bold text-pink-100 mb-6">Skill Proficiency</h3>
      <div class="space-y-6">
        <div>
          <div class="flex justify-between mb-2">
            <span class="text-white font-medium">React & Html & Css</span>
            <span class="text-blue-300">95%</span>
          </div>
          <div class="w-full bg-gray-800 rounded-full h-3">
            <div class="bg-gradient-to-r from-pink-300 via-purple-300 to-blue-400 h-3 rounded-full" style="width: 95%"></div>
          </div>
        </div>
        <div>
          <div class="flex justify-between mb-2">
            <span class="text-white font-medium">Tailwindcss </span>
            <span class="text-blue-300">90%</span>
          </div>
          <div class="w-full bg-gray-800 rounded-full h-3">
            <div class="bg-gradient-to-r from-pink-300 to-purple-400 h-3 rounded-full" style="width: 90%"></div>
          </div>
        </div>
        <div>
          <div class="flex justify-between mb-2">
            <span class="text-white font-medium">JavaScript / Laravel</span>
            <span class="text-purple-300">85%</span>
          </div>
          <div class="w-full bg-gray-800 rounded-full h-3">
            <div class="bg-gradient-to-r from-purple-400 to-purple-700 h-3 rounded-full" style="width: 85%"></div>
          </div>
        </div>
        <div>
          <div class="flex justify-between mb-2">
            <span class="text-white font-medium">Database Design /Php</span>
            <span class="text-green-300">80%</span>
          </div>
          <div class="w-full bg-gray-800 rounded-full h-3">
            <div class="bg-gradient-to-r from-green-300 to-teal-500 h-3 rounded-full" style="width: 80%"></div>
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
                <span class="inline-block text-sm font-semibold text-pink-800 mb-2 tracking-wider uppercase">
                    My Work
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Featured <span class="text-pink-800">Projects</span>
                </h2>
                <div class="w-20 h-1 bg-purple-300 mx-auto"></div>
            </div>
            
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Project Card 1 -->
                <div class="bg-black/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Data Visualization Dashboard"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <h3 class="text-xl font-semibold text-gray-100">Data Analytics Dashboard</h3>
                        </div>
                        <p class="text-gray-300 mb-4">Interactive dashboard with real-time data visualization using React, D3.js, and Node.js.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs font-medium rounded">React</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs font-medium rounded">D3.js</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs font-medium rounded">Node.js</span>
                        </div>
                        <div class="flex space-x-4 mt-4">
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-pink-600 text-white text-sm font-medium rounded-lg hover:bg-pink-700 transition flex items-center justify-center gap-1">
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
                <div class="bg-black/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="E-commerce Platform"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <h3 class="text-xl font-semibold text-gray-100">E-commerce Platform</h3>
                        </div>
                        <p class="text-gray-300 mb-4">Full-featured online store with payment integration, built with Next.js and Stripe API.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-blue-100 text-pink-800 text-xs font-medium rounded">Next.js</span>
                            <span class="px-2 py-1 bg-blue-100 text-pink-800 text-xs font-medium rounded">Stripe</span>
                            <span class="px-2 py-1 bg-blue-100 text-pink-800 text-xs font-medium rounded">MongoDB</span>
                        </div>
                        <div class="flex space-x-4 mt-4">
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-pink-600 text-white text-sm font-medium rounded-lg hover:bg-pink-700 transition flex items-center justify-center gap-1">
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
                <div class="bg-black/90 backdrop-blur-sm rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80"
                            alt="AI Chat Application"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <h3 class="text-xl font-semibold text-gray-100">AI Chat Application</h3>
                        </div>
                        <p class="text-gray-300 mb-4">Conversational AI platform using OpenAI's API with custom fine-tuning and context memory.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs font-medium rounded">Python</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs font-medium rounded">OpenAI</span>
                            <span class="px-2 py-1 bg-pink-100 text-pink-800 text-xs font-medium rounded">FastAPI</span>
                        </div>
                        <div class="flex space-x-4 mt-4">
                            <a href="#"
                                class="flex-1 px-4 py-2 bg-pink-600 text-white text-sm font-medium rounded-lg hover:bg-pink-700 transition flex items-center justify-center gap-1">
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
                    <div class="top relative hover:text-pink-400 transition-colors duration-300">View More Projects</div>
                    <div class="bottom absolute inset-0 text-pink-400 hover:text-white transition-colors duration-300">
                        View More Projects</div>
                </a>
                <a href="#"
                    class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                    <div class="top relative hover:text-pink-400 transition-colors duration-300">Download My CV</div>
                    <div class="bottom absolute inset-0 text-pink-400 hover:text-white transition-colors duration-300">
                        Download My CV</div>
                </a>
                <a href="#contact"
                    class="flip-link relative block overflow-hidden whitespace-nowrap text-4xl font-black uppercase sm:text-7xl md:text-8xl lg:text-9xl leading-[0.75] text-white">
                    <div class="top relative hover:text-pink-400 transition-colors duration-300">Contact Me</div>
                    <div class="bottom absolute inset-0 text-pink-400 hover:text-white transition-colors duration-300">
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
                <span class="inline-block text-sm font-semibold text-pink-300 mb-2 tracking-wider uppercase">
                    Get In Touch
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Contact <span class="text-pink-300">Me</span>
                </h2>
                <div class="w-20 h-1 bg-pink-300 mx-auto"></div>
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
                                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent transition"
                                placeholder="Tell me about your project..."></textarea>
                        </div>
                        <button type="submit"
                            class="w-full px-6 py-3 bg-gradient-to-r from-pink-600 to-pink-800 text-white font-medium rounded-lg hover:from-pink-700 hover:to-pink-900 transition-all duration-300 transform hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 focus:ring-offset-gray-900">
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
                                    <svg class="h-6 w-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    <svg class="h-6 w-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    <svg class="h-6 w-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                topDiv.className = 'top relative hover:text-pink-400 transition-colors duration-300';
                
                const bottomDiv = document.createElement('div');
                bottomDiv.className = 'bottom absolute inset-0 text-pink-400 hover:text-white transition-colors duration-300';
                
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