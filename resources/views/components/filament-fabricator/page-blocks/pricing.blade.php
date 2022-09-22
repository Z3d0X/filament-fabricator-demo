@props([
    'plans' => [],
])
<div {{ $attributes->class("px-4 py-4 md:py-8") }}>
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        @foreach ($plans as $plan)
            <div class="flex flex-col items-center justify-center border border-indigo-500 p-5 gap-5">
                <div class="flex flex-col items-center justify-center w-full">
                    <h2 class="text-2xl md:text-3xl font-bold text-center">{{ $plan['title'] }}</h2>
                </div>
                <h3 class="text-4xl md:text-5xl font-bold text-center">{{ $plan['price'] }}</h3>
                <div class="whitespace-pre-line font-mono text-lg grow">
                   {{ $plan['features'] }}
                </div>

                <div>
                    <a href="{{ $plan['button_url'] }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">
                        {{ $plan['button_text'] }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>