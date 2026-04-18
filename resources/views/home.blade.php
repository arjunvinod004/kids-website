<x-app-layout>
    <!-- Hero Section -->
    <section class="relative pt-20 pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Text Content -->
                <div class="flex-1 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-100 dark:bg-orange-900/30 rounded-full text-orange-600 dark:text-orange-400 font-bold text-xs uppercase tracking-widest mb-6 animate-bounce">
                        ✨ Start Your Adventure Today
                    </div>
                    <h1 class="text-5xl md:text-7xl font-kids font-extrabold text-gray-900 dark:text-white leading-tight mb-8">
                        Learn, Play & <span class="bg-clip-text text-transparent bg-gradient-to-r from-orange-500 to-pink-500">Explore!</span>
                    </h1>
                    <p class="text-xl text-gray-500 dark:text-gray-400 mb-10 max-w-xl mx-auto lg:mx-0">
                        The ultimate educational sandbox for curious young minds. Explore magical stories and challenge yourself with fun quizzes!
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="{{ route('stories.index') }}" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-[2rem] font-kids font-bold text-lg shadow-xl shadow-orange-500/20 hover:scale-105 transition-all">
                            Read Stories
                        </a>
                        <a href="{{ route('quizzes.index') }}" class="w-full sm:w-auto px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white rounded-[2rem] font-kids font-bold text-lg border-2 border-gray-100 dark:border-gray-700 shadow-sm hover:bg-gray-50 transition-all">
                            Take Quizzes
                        </a>
                    </div>
                </div>

                <!-- Hero Image Placeholder / Graphic -->
                <div class="flex-1 relative">
                    <div class="relative w-full aspect-square max-w-lg mx-auto">
                        <!-- Abstract shapes for premium feel -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-orange-200 to-pink-200 dark:from-orange-900/40 dark:to-pink-900/40 rounded-[3rem] rotate-6 animate-pulse"></div>
                        <div class="absolute inset-4 glass rounded-[3rem] shadow-2xl flex items-center justify-center border-2 border-white/50">
                             <!-- Visual representation of learning -->
                             <div class="text-center group">
                                <div class="w-32 h-32 bg-white dark:bg-gray-900 rounded-full shadow-lg flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                     <svg class="w-16 h-16 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <span class="font-kids text-2xl font-bold dark:text-white">Adventure Awaits!</span>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Sections -->
    <section class="py-24 bg-white/50 dark:bg-gray-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="What's Inside?"
                subtitle="Explore our carefully curated educational modules designed to spark curiosity and growth."
            />

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Features -->
                <div class="group p-10 bg-white dark:bg-[#1a1a1a] rounded-[3rem] border-2 border-gray-50 dark:border-gray-800 hover:border-orange-200 transition-all shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center text-orange-600 mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-kids font-bold mb-4 dark:text-white">Magical Stories</h3>
                    <p class="text-gray-500 dark:text-gray-400 mb-8">
                        Dive into captivating tales that teach valuable life lessons while boosting reading comprehension.
                    </p>
                    <a href="{{ route('stories.index') }}" class="font-bold text-orange-500 flex items-center gap-2 hover:gap-4 transition-all">
                        Explore Stories <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                </div>

                <div class="group p-10 bg-white dark:bg-[#1a1a1a] rounded-[3rem] border-2 border-gray-50 dark:border-gray-800 hover:border-blue-200 transition-all shadow-sm hover:shadow-xl">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-blue-600 mb-8 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.364-6.364l-.707-.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M12 21a9 9 0 110-18 9 9 0 010 18z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-kids font-bold mb-4 dark:text-white">Brainy Quizzes</h3>
                    <p class="text-gray-500 dark:text-gray-400 mb-8">
                        Test your knowledge with fun, interactive quizzes. Win badges and track your learning progress!
                    </p>
                    <a href="{{ route('quizzes.index') }}" class="font-bold text-blue-500 flex items-center gap-2 hover:gap-4 transition-all">
                        Start Learning <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="Why Kids Love Us"
                subtitle="We combine education with entertainment to create a platform children actually want to use."
            />

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $features = [
                        ['icon' => '🛡️', 'title' => '100% Kid Safe', 'desc' => 'Verified content'],
                        ['icon' => '🎮', 'title' => 'Playful Learning', 'desc' => 'Gaming logic'],
                        ['icon' => '🏆', 'title' => 'Win Badges', 'desc' => 'Stay motivated'],
                        ['icon' => '👩‍🏫', 'title' => 'Expert Built', 'desc' => 'Curated by educators']
                    ];
                @endphp
                @foreach($features as $f)
                    <div class="text-center p-8 glass rounded-[2rem] hover:rotate-3 transition-transform">
                        <div class="text-4xl mb-4">{{ $f['icon'] }}</div>
                        <div class="font-kids font-bold text-gray-900 dark:text-white mb-1">{{ $f['title'] }}</div>
                        <div class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-widest font-black">{{ $f['desc'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>

</html>