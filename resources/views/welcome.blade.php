<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.G</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./image/logo2.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script>
        // In-memory theme storage (replaces localStorage)
        let currentTheme = 'dark'; // Default to dark theme

        // Set initial theme
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark')
            currentTheme = 'dark';
        } else {
            document.documentElement.classList.remove('dark')
            currentTheme = 'light';
        }
    </script>
    <style>
        * {
            font-family: 'IBM Plex Sans Arabic'
        }
    </style>
</head>

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-200">
    <!-- Navigation Bar -->
    <nav
        class="fixed top-0 w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-700 shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <div class="flex items-center space-x-2 rtl:space-x-reverse">
                <img src="./image/logo4.png" loading="lazy" alt="الشعار" class="h-9 w-auto">
            </div>

            <!-- Navigation Links (Desktop) -->
            <div class="hidden md:flex items-center space-x-6 rtl:space-x-reverse">
                <a href="#"
                    class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">الرئيسية</a>
                <a href="#"
                    class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">اكتشف</a>
                <a href="#"
                    class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">السيرة
                    الذاتية</a>
                <a href="#"
                    class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">اتصل بنا</a>

            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-gray-700 dark:text-gray-300 focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden px-6 pb-4 flex flex-col space-y-3 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
            <a href="#"
                class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">الرئيسية</a>
            <a href="#"
                class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">اكتشف</a>
            <a href="#"
                class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">السيرة الذاتية</a>
            <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-[#00ADB5] transition font-medium">اتصل
                بنا</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen pt-20 flex items-center"
        style="background-image: url('./image/img11.jpg');  background-size: cover; background-position: center; background repeatability: no-repeat;" loading="lazy">
        <div class="container mx-auto px-6">
            <!-- Stack content vertically on mobile -->
            <div class="flex flex-col md:flex-row items-center gap-8">
                <!-- Text content - full width on mobile -->
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 text-center md:text-right">
                        مرحبًا، أنا محمد – مطوّر ويب متخصص في Laravel
                    </h1>
                    <p class="text-lg md:text-xl mb-8 dark:text-gray-300 text-center md:text-right">
                        أبني تطبيقات ويب سريعة وآمنة باستخدام Laravel وTailwind CSS.
                        أساعد الأفراد والشركات على تحويل أفكارهم الرقمية إلى واقع عملي من خلال حلول برمجية مصمّمة
                        باحترافية.
                    </p>
                    <!-- Center buttons on mobile -->
                    <div class="flex flex-col md:flex-row gap-4 items-center md:items-start">
                        <a href="#"
                            class="w-full md:w-auto bg-[#404EED] text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition-all flex items-center justify-center">
                            <span>تحميل السيرة الذاتية</span>
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                        </a>

                        <a href="#"
                            class="w-full md:w-auto bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-opacity-90 transition-all flex items-center justify-center">
                            <span>عرض Github</span>
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </a>

                        <!-- Login Button -->
                        <a href="mg/login"
                            class="relative w-12 h-12 bg-white text-gray-800 rounded-full flex items-center justify-center hover:bg-gray-100 transition-all duration-300 group shadow-lg">
                            <!-- Key Icon -->
                            🔑
                            <!-- Login Text (slides out on hover) -->
                            <span
                                class="absolute right-14 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white text-sm px-3 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all duration-300 translate-x-2 group-hover:translate-x-0 whitespace-nowrap">
                                Login
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Image content - full width on mobile -->
                <div class="w-full md:w-1/2 relative group mt-8 md:mt-0" data-aos="fade-left">
                    <div
                        class="relative transform-gpu transition-all duration-700 hover:scale-105 hover:rotate-2 rounded-2xl overflow-hidden shadow-[0_0_40px_rgba(64,78,237,0.2)]">
                        <img src="./image/img3.jpg" loading="lazy" alt="Profile Showcase"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 group-hover:filter group-hover:brightness-110">

                        <!-- Overlay elements -->
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            <!-- Simplified particles for mobile -->
                            <div class="absolute w-2 h-2 bg-blue-400 rounded-full animate-float"
                                style="top: 20%; left: 30%"></div>
                            <div class="absolute w-2 h-2 bg-purple-400 rounded-full animate-float-delay"
                                style="top: 60%; left: 70%"></div>
                        </div>

                        <!-- Tech Stack Badge - Simplified for mobile -->
                        <div class="absolute top-4 right-4">
                            <div class="flex items-center gap-2">
                                <div class="bg-white/95 p-2 rounded-xl shadow-lg">
                                    <svg class="w-6 h-6 text-[#404EED]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                </div>
                                <span
                                    class="bg-black/80 text-white px-3 py-1 rounded-lg text-sm font-semibold backdrop-blur-sm">
                                    Full Stack Dev
                                </span>
                            </div>
                        </div>

                        <!-- Status Indicator -->
                        <div
                            class="absolute bottom-4 left-4 transform translate-y-10 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">
                            <div
                                class="flex items-center gap-2 bg-black/80 text-white px-4 py-2 rounded-full backdrop-blur-md">
                                <span class="relative flex h-3 w-3">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                </span>
                                <span class="text-sm font-medium">Available for Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Study Group Section -->
    <section class="min-h-screen py-20 bg-gray-50 dark:bg-gray-800">
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="./image/build-codeblocks-engineering-svgrepo-com.svg" loading="lazy" alt="خدمات تطوير الويب"
                    class="w-full rounded-lg shadow-lg">
            </div>
            <div class="w-full md:w-1/2 md:pl-12 text-center md:text-right" data-aos="fade-left">
                <h2 class="text-4xl font-bold mb-6">أبني حلولًا برمجية مخصصة، آمنة، وسهلة الاستخدام</h2>
                <p class="text-xl dark:text-gray-300">
                    أعمل على تطوير تطبيقات ويب باستخدام Laravel وTailwind CSS، بدءًا من الفكرة وحتى الإطلاق. سواء كنت
                    تحتاج إلى لوحة تحكم ديناميكية، نظام إدارة محتوى، أو تكامل مع APIs خارجية، فأنا أقدم حلولًا مصمّمة
                    لتناسب احتياجاتك بدقة وبكفاءة عالية.
                </p>
            </div>
        </div>
    </section>


    <!-- Voice Section -->
    <section class="min-h-screen py-20">
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center gap-8">
            <div class="w-full md:w-1/2" data-aos="fade-right">
                <h2 class="text-4xl font-bold mb-6 text-center md:text-right">نماذج من أعمالي السابقة</h2>
                <p class="text-xl dark:text-gray-300 text-center md:text-right">
                    عملت على تطوير مشاريع رقمية متكاملة باستخدام Laravel وFilament وTailwind CSS. تشمل أعمالي أنظمة
                    إدارة محتوى، مكتبات إلكترونية، أدوات تحليل برمجي، ومنصات تعليمية. أحرص دائمًا على كتابة كود نظيف
                    وقابل للتوسعة، مع تجربة استخدام سلسة وعصرية.
                </p>
            </div>
            <div class="w-full md:w-1/2" data-aos="fade-left">
                <img src="./image/img6.png" loading="lazy" alt="مشاريعي البرمجية" class="w-full rounded-lg shadow-lg">
            </div>
        </div>
    </section>


    <!-- Community Section -->
    <section class="min-h-screen py-20 gradient-bg">
        <div class="container mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-16 text-white">
                <div class="floating mb-6">
                    <svg class="w-20 h-20 mx-auto mb-4 laravel-red" fill="currentColor" viewBox="0 0 24 24">
                        <!-- SVG Content -->
                    </svg>
                </div>
                <h1 class="text-5xl font-bold mb-4">مشاريع Laravel المتميزة</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">حلول ويب احترافية مبنية بإتقان باستخدام Laravel وأحدث
                    التقنيات</p>
                <div class="mt-6 flex justify-center items-center gap-4">
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm backdrop-blur-sm">
                        🚀 +{{ \App\Models\Project::count() }} مشروع مكتمل
                    </span>
                    <span class="px-4 py-2 bg-white bg-opacity-20 rounded-full text-sm backdrop-blur-sm">
                        ⭐ Laravel Certified
                    </span>
                </div>
            </div>

<!-- Projects Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
    @foreach ($projects as $project)
        <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl shadow-xl overflow-hidden">
            <div class="relative overflow-hidden h-56">
                <div
                    class="absolute inset-0 bg-gradient-to-br {{ $project->gradient_colors }} flex items-center justify-center">
                    <div class="text-center text-white">
                        @if ($project->image_path)
                            <div class="relative w-16 h-16 mx-auto mb-2 image-with-blur-bg project-{{ $loop->index }}">
                                <img src="{{ asset('storage/' . $project->image_path) }}" loading="lazy"
                                    alt="{{ $project->title }}" class="w-16 h-16 object-contain z-10">
                            </div>
                        @else
                            <svg class="w-16 h-16 mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                            </svg>
                        @endif
                        <div class="text-sm font-semibold">{{ $project->title }}</div>
                    </div>
                </div>
                <div class="absolute top-4 right-4">
                    <span
                        class="px-3 py-1 bg-{{ $project->status === 'completed' ? 'green' : ($project->status === 'in_progress' ? 'blue' : 'emerald') }}-500 text-white rounded-full text-xs font-semibold">
                        {{ $project->status === 'completed' ? 'مكتمل' : ($project->status === 'in_progress' ? 'جاري التطوير' : 'API متاح') }}
                    </span>
                </div>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">{{ $project->title }}</h3>
                <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed">
                    {{ $project->description }}</p>
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach ($project->technologies as $tech)
                        <span
                            class="tech-badge text-{{ $tech['color'] ?? 'red-600' }} px-3 py-1 rounded-full text-sm font-medium">{{ $tech['name'] }}</span>
                    @endforeach
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center text-yellow-500">
                        <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <span class="text-sm font-semibold">{{ $project->rating }}
                            ({{ $project->reviews_count }} تقييم)</span>
                    </div>
                    <a href="{{ $project->action_url }}"
                        class="laravel-bg hover:bg-red-600 text-white px-6 py-2 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                        {{ $project->action_text }}
                    </a>
                </div>
            </div>
            <!-- Dynamic style for this project -->
            <style>
                .project-{{ $loop->index }}::before {
                    content: '';
                    position: absolute;
                    top: -10px;
                    left: -10px;
                    right: -10px;
                    bottom: -10px;
                    background-image: url('{{ $project->image_path ? asset('storage/' . $project->image_path) : '' }}');
                    background-size: cover;
                    background-position: center;
                    filter: blur(8px);
                    opacity: 0.6;
                    z-index: -1;
                    border-radius: 50%;
                }
            </style>
        </div>
    @endforeach
</div>

            @php
                $cta = \App\Models\CallToAction::where('is_active', true)->first();
            @endphp

            <!-- Call to Action -->
            @if ($cta)
                <div class="text-center mt-16" dir="rtl">
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-3xl p-10 max-w-4xl mx-auto shadow-2xl
                transform hover:scale-[1.02] transition-all duration-300
                border border-white/20 relative overflow-hidden">
                        <!-- Decorative elements -->
                        <div class="absolute -top-10 -left-10 w-40 h-40 bg-purple-500/20 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-blue-500/20 rounded-full blur-3xl">
                        </div>

                        <h2
                            class="text-4xl font-bold text-white mb-6 relative z-10
                   bg-gradient-to-r from-white to-white/80 bg-clip-text text-transparent">
                            {!! $cta->title !!}
                        </h2>

                        <p class="text-white/90 text-lg leading-relaxed max-w-2xl mx-auto relative z-10">
                            {!! $cta->description !!}
                        </p>

                        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center relative z-10 mt-4">
                            <a href="{{ $cta->primary_button_url ?? '#' }}"
                                class="group bg-white hover:bg-purple-50 text-purple-600 px-8 py-4 rounded-xl font-bold
                      transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg
                      flex items-center gap-2">
                                {{ $cta->primary_button_text }}
                                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1 rtl:group-hover:-translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>

                            @if ($cta->secondary_button_text && $cta->secondary_button_url)
                                <a href="{{ $cta->secondary_button_url }}"
                                    class="group border-2 border-white/30 hover:border-white text-white px-8 py-4 rounded-xl
                      font-bold transition-all duration-300 backdrop-blur-sm hover:bg-white/10
                      flex items-center gap-2">
                                    {{ $cta->secondary_button_text }}
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1 rtl:group-hover:-translate-x-1"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <style>
        .image-with-blur-bg {
            position: relative;
            z-index: 10;
        }

        .image-with-blur-bg::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            opacity: 0.6;
            z-index: -1;
            border-radius: 50%;
        }

        .image-with-blur-bg[data-bg-image]::before {
            background-image: var(--bg-image);
        }

        .card-hover:hover .image-with-blur-bg img {
            transform: scale(1.1);
        }
    </style>

    <script>
        // Add smooth animations and interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const cards = document.querySelectorAll('.card-hover');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 200);
                    }
                });
            });

            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px)';
                card.style.transition = 'all 0.6s ease-out';
                observer.observe(card);
            });

            // Add click animations to buttons
            document.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');

                    this.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>

<!-- Skills Section -->
<section class="min-h-screen py-20 bg-gray-50 dark:bg-gray-800">
    <div class="container mx-auto px-6" data-aos="fade-up">
        <h2 class="text-4xl font-bold mb-12 text-center">مجموعة تطوير البرمجيات</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
            @foreach ($skills as $skill)
                <div
                    class="group bg-white dark:bg-gray-700 p-8 rounded-xl shadow-lg text-center hover:transform hover:scale-110 hover:rotate-3 transition-all duration-300 cursor-pointer">
                    <div class="text-[#404EED] text-5xl mb-4 group-hover:animate-bounce">
                        <img src="{{ asset('storage/' . $skill->icon_path) }}" loading="lazy" alt="{{ $skill->name }} icon" class="w-12 h-12 mx-auto">
                    </div>
                    <h3 class="font-bold text-lg mb-2">{{ $skill->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">{{ $skill->description }}</p>
                    <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2">
                        <div class="bg-gradient-to-r {{ $skill->gradient_colors }} h-2 rounded-full transition-all duration-1000 animate-pulse"
                            style="width: {{ $skill->proficiency_percentage }}%"></div>
                    </div>
                    <span class="text-xs text-gray-500 mt-1 block">{{ $skill->proficiency_text }}</span>
                </div>
            @endforeach
        </div>

        <!-- Interactive Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div
                class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="text-3xl font-bold text-[#404EED] mb-2 counter" data-target="30">0</div>
                <p class="text-gray-600 dark:text-gray-300">مشاريع Laravel مكتملة</p>
            </div>
            <div
                class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="text-3xl font-bold text-[#404EED] mb-2 counter" data-target="5000">0</div>
                <p class="text-gray-600 dark:text-gray-300">ساعات تطوير Laravel</p>
            </div>
            <div
                class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="text-3xl font-bold text-[#404EED] mb-2 counter" data-target="100000">0</div>
                <p class="text-gray-600 dark:text-gray-300">مستخدمين للتطبيقات</p>
            </div>
            <div
                class="bg-white dark:bg-gray-700 p-6 rounded-xl shadow-lg text-center hover:shadow-2xl transition-all duration-300">
                <div class="text-3xl font-bold text-[#404EED] mb-2 counter" data-target="99">0</div>
                <p class="text-gray-600 dark:text-gray-300">نسبة التشغيل %</p>
            </div>
        </div>
    </div>
</section>

    <!-- JavaScript for Counter Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const increment = target / 200;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };
                updateCounter();
            });
        });
    </script>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-20">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-4 gap-8">
                <div>
                    <h3 class="text-[#404EED] font-bold mb-4">المشاريع</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">نظام إدارة المحتوى</a></li>
                        <li><a href="#" class="hover:underline">متجر إلكتروني</a></li>
                        <li><a href="#" class="hover:underline">REST API</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-[#404EED] font-bold mb-4">التقنيات</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Laravel</a></li>
                        <li><a href="#" class="hover:underline">Vue.js</a></li>
                        <li><a href="#" class="hover:underline">Tailwind CSS</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-[#404EED] font-bold mb-4">تواصل معي</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">البريد الإلكتروني</a></li>
                        <li><a href="#" class="hover:underline">لينكد إن</a></li>
                        <li><a href="#" class="hover:underline">جيت هب</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-[#404EED] font-bold mb-4">المزيد</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">السيرة الذاتية</a></li>
                        <li><a href="#" class="hover:underline">المدونة</a></li>
                        <li><a href="#" class="hover:underline">الشهادات</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} جميع الحقوق محفوظة. تم التطوير بواسطة M.G</p>
            </div>
        </div>
    </footer>

    <script>
        // Theme toggle function (now using in-memory storage)
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark')
                currentTheme = 'light'
            } else {
                document.documentElement.classList.add('dark')
                currentTheme = 'dark'
            }
        }

        AOS.init({
            duration: 1000,
            once: true
        });

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const increment = target / 100;
                let current = 0;

                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        if (target >= 1000000) {
                            counter.textContent = (current / 1000000).toFixed(1) + 'M';
                        } else if (target >= 1000) {
                            counter.textContent = (current / 1000).toFixed(0) + 'k';
                        } else {
                            counter.textContent = Math.ceil(current);
                        }
                        setTimeout(updateCounter, 20);
                    } else {
                        if (target >= 1000000) {
                            counter.textContent = (target / 1000000).toFixed(1) + 'M';
                        } else if (target >= 1000) {
                            counter.textContent = (target / 1000).toFixed(0) + 'k';
                        } else {
                            counter.textContent = target;
                        }
                    }
                };
                updateCounter();
            });
        }

        // Trigger counter animation when skills section is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });

        // Observe the skills section
        const skillsSection = document.querySelector('.min-h-screen.py-20.bg-gray-50');
        if (skillsSection) {
            observer.observe(skillsSection);
        }
    </script>
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // مثال لتبديل الثيم
        function toggleTheme() {
            document.documentElement.classList.toggle('dark');
            localStorage.theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
        }
    </script>
</body>

</html>
