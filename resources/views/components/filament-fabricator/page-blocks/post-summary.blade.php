@props([
    'post' => null,
])
<div {{ $attributes->class("px-4 py-4 md:py-8") }}>
    <div class="max-w-7xl mx-auto">
        <h2 class="text-2xl md:text-3xl font-bold mb-2">{{ Str::headline($post->title) }}</h2>
        <div>
            <p class="text-xl">{{ $post->summary }}</p>
        </div>
    </div>
</div>