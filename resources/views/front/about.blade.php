@extends('front.main')

@section('content')
<section class="max-w-6xl mx-auto px-4 py-16">
    <!-- Page Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">About Me</h1>
        <p class="mt-4 text-lg text-gray-600">Full-Stack Developer | Laravel Expert | UI Enthusiast</p>
    </div>

    <!-- Profile Overview -->
    <div class="flex flex-col md:flex-row items-center md:items-start gap-8 mb-16">
        <img src="https://via.placeholder.com/200" alt="Developer Photo" class="w-48 h-48 rounded-full object-cover shadow-lg">
        <div class="max-w-2xl">
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">Hi, I'm [Your Name]</h2>
            <p class="text-gray-700 leading-relaxed">
                I'm a dedicated full-stack web developer with over [X] years of experience crafting responsive, high-performance web applications.
                My stack includes Laravel, PHP, Tailwind CSS, and JavaScript. I focus on writing clean, scalable code and building solutions with strong user experience and long-term maintainability.
            </p>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Skills & Tools</h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-sm text-gray-800">
            @foreach (['HTML5', 'CSS3', 'Tailwind CSS', 'JavaScript', 'Laravel', 'PHP', 'MySQL', 'Git', 'Livewire', 'REST APIs'] as $skill)
                <span class="bg-white border border-gray-200 p-3 rounded shadow-sm text-center">{{ $skill }}</span>
            @endforeach
        </div>
    </div>

    <!-- Experience Section -->
    <div class="mb-16">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">Professional Experience</h3>
        <div class="space-y-8 border-l-4 border-blue-600 pl-6">
            <div>
                <h4 class="text-lg font-semibold text-gray-900">Senior Web Developer</h4>
                <p class="text-sm text-gray-500">ABC Tech Solutions · 2022 – Present</p>
                <p class="mt-2 text-gray-700">
                    Leading development of enterprise-grade web platforms using Laravel and Vue.js. Focused on scalability, performance, and long-term maintainability.
                </p>
            </div>
            <div>
                <h4 class="text-lg font-semibold text-gray-900">Frontend Developer</h4>
                <p class="text-sm text-gray-500">Creative Dev Studio · 2019 – 2022</p>
                <p class="mt-2 text-gray-700">
                    Specialized in building pixel-perfect UIs and ensuring responsiveness across devices using Tailwind CSS, JavaScript, and Blade templates.
                </p>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center">
        <p class="text-lg text-gray-700">Have a project in mind or want to collaborate?</p>
        <a href="/contact" class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">Contact Me</a>
    </div>
</section>


@endsection


