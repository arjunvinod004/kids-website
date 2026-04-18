<x-app-layout>
    <div class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="Amazing Stories"
                subtitle="Discover captivating tales that spark imagination and teach valuable lessons"
            />

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                @forelse($stories as $story)
                    <x-story-card :story="$story" />
                @empty
                    <div class="col-span-full text-center py-20 glass rounded-[3rem]">
                        <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6 text-4xl">
                            📚
                        </div>
                        <h3 class="text-2xl font-kids font-bold text-gray-900 dark:text-white mb-2">No stories available yet</h3>
                        <p class="text-gray-500 dark:text-gray-400 mb-8">Check back later for amazing stories!</p>
                        <a href="/" class="inline-flex items-center gap-2 text-orange-500 font-bold hover:gap-4 transition-all">
                            ← Back to Home
                        </a>
                    </div>
                @endforelse
            </div>

            @if($stories->hasPages())
                <div class="mt-16">
                    {{ $stories->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
tml>