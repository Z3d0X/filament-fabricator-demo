@props([
    'title',
    'description',
    'image',
    'button_text',
    'button_url',
])
<div {{ $attributes->class("px-4 py-4 md:py-8") }}>
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 align-middle">
        <div>
            <img src="{{ $image }}" alt="{{ $title }}" class="w-full">
        </div>
        <div class="flex flex-col justify-center">
            <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-4">
                {{ $title }}
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-4">
                {{ $description }}
            </p>
            @if ($button_url ?? null)
                <div>
                    <a href="{{ $button_url }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                        {{ $button_text }}
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>