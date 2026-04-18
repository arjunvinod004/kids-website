@props(['title', 'subtitle' => null, 'align' => 'center'])

<div class="mb-12 {{ $align === 'center' ? 'text-center' : 'text-left' }}">
    <h2 class="text-3xl md:text-5xl font-kids font-extrabold text-gray-900 dark:text-white mb-4">
        {{ $title }}
    </h2>
    @if($subtitle)
        <p class="text-lg text-gray-500 dark:text-gray-400 max-w-2xl {{ $align === 'center' ? 'mx-auto' : '' }}">
            {{ $subtitle }}
        </p>
    @endif
    <div class="mt-4 flex {{ $align === 'center' ? 'justify-center' : 'justify-start' }}">
        <div class="h-1.5 w-20 bg-gradient-to-r from-orange-400 to-pink-500 rounded-full"></div>
    </div>
</div>
