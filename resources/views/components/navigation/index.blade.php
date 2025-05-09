@php use App\Helpers\Menu; @endphp
<nav
    class="absolute top-0 inset-x-0  z-50 min-h-16 flex items-center bg-gradient-to-b from-black/60 to-transparent">
    <div
        class="wrapper  rounded-md  py-3 w-full flex justify-between">
        <a wire:navigate
           class="text-4xl drop-shadow-hard-sm inline-flex shrink-0 font-bangers bold-shadow-sm !tracking-normal first-letter:text-5xl"
           href="{{ route('home') }}">{{ config('app.name') }}</a>

        <div class="hidden lg:flex space-x-8 items-center ">
            @foreach(Menu::get() as $item)
                @if($item->visible)
                    <a wire:navigate
                       class="text-xl font-bangers px-3 py-0.5 hover:bg-primary-500 hover:drop-shadow-md drop-shadow-purple-950 hover:drop-shadow-purple-900 rounded-lg text-shadow-hard tracking-wide text-shadow-black/90  text-white  transition-all hover:scale-125"
                       href="{{ route($item->route) }}" title="{{ $item->title }}">{{ $item->name }}</a>
                @endif
            @endforeach
        </div>
    </div>
</nav>
