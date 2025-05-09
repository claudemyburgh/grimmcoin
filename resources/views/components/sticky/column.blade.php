<div {{ $attributes->merge(['class' => 'w-full md:w-1/2 shrink-0 relative']) }}>
    <div class="sticky top-8 space-y-6">
        {{ $slot }}
    </div>
</div>
