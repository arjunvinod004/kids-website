@props(['story'])

<div class="group bg-white dark:bg-[#1a1a1a] rounded-[2rem] shadow-sm hover:shadow-xl transition-all duration-500 overflow-hidden border border-gray-100 dark:border-gray-800 flex flex-col h-full">
    <!-- Image Placeholder / Thumbnail -->
    <div class="relative aspect-[4/3] overflow-hidden bg-gradient-to-br from-orange-100 to-pink-100 dark:from-orange-900/20 dark:to-pink-900/20">
        <div class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
             <svg class="w-16 h-16 text-orange-400/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
        </div>
        <div class="absolute top-4 left-4">
            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm dark:bg-black/50 rounded-full text-[10px] font-black uppercase tracking-widest text-orange-600 dark:text-orange-400 shadow-sm">
                {{ $story->age_range ?? 'All Ages' }}
            </span>
        </div>
    </div>

    <!-- Content -->
    <div class="p-8 flex flex-col flex-grow">
        <h3 class="text-xl font-kids font-extrabold text-gray-900 dark:text-gray-100 mb-2 group-hover:text-orange-500 transition-colors">
            {{ $story->title }}
        </h3>
        <p class="text-gray-500 dark:text-gray-400 text-sm line-clamp-2 mb-6 flex-grow">
            {{ Str::limit(strip_tags($story->content), 120) }}
        </p>

        <div class="flex items-center justify-between pt-4 border-t border-gray-50 dark:border-gray-800">
            <a href="{{ route('stories.show', $story) }}" class="inline-flex items-center gap-2 text-sm font-black text-orange-500 hover:text-orange-600 transition-colors">
                READ NOW
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
            <span class="text-[10px] font-medium text-gray-400 uppercase tracking-tighter">
                {{ $story->created_at->diffForHumans() }}
            </span>
        </div>
    </div>
</div>
