<footer class="bg-white dark:bg-[#0a0a0a] border-t border-gray-100 dark:border-gray-800 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="col-span-1 md:col-span-2">
                <a href="/" class="flex items-center gap-2 mb-6">
                    <div class="w-8 h-8 bg-gradient-to-tr from-orange-400 to-pink-500 rounded-lg flex items-center justify-center">
                         <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <span class="font-kids text-xl font-bold dark:text-white">
                        {{ config('app.name', 'Kids Edu') }}
                    </span>
                </a>
                <p class="text-gray-500 dark:text-gray-400 max-w-sm mb-8">
                    Empowering young minds through interactive stories and engaging quizzes. Join thousands of happy learners today!
                </p>
                <div class="flex gap-4">
                    <!-- Social Links -->
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-50 dark:bg-gray-800 flex items-center justify-center text-gray-400 hover:text-orange-500 hover:bg-orange-50 transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 dark:text-white mb-6 uppercase text-xs tracking-widest">Platform</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('stories.index') }}" class="text-gray-500 dark:text-gray-400 hover:text-orange-500 transition-colors">Stories</a></li>
                    <li><a href="{{ route('quizzes.index') }}" class="text-gray-500 dark:text-gray-400 hover:text-orange-500 transition-colors">Quizzes</a></li>
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-orange-500 transition-colors">Categories</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-gray-900 dark:text-white mb-6 uppercase text-xs tracking-widest">Support</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-orange-500 transition-colors">Help Center</a></li>
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-orange-500 transition-colors">Safety Tips</a></li>
                    <li><a href="#" class="text-gray-500 dark:text-gray-400 hover:text-orange-500 transition-colors">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-gray-100 dark:border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-gray-400 text-center md:text-left">
                &copy; {{ date('Y') }} {{ config('app.name', 'Kids Edu') }}. Made with ❤️ for curious young minds.
            </p>
            <div class="flex gap-6">
                <span class="flex items-center gap-2 text-xs font-bold text-green-500 uppercase tracking-widest">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    Safe for kids
                </span>
            </div>
        </div>
    </div>
</footer>
