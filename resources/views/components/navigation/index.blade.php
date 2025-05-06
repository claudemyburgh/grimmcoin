<nav
    class="absolute top-0 inset-x-0  z-50 min-h-16 flex items-center bg-gradient-to-b from-black/60 to-transparent">
    <div
        class="wrapper  rounded-md  py-3 w-full flex justify-between">
        <a wire:navigate
           class="text-4xl drop-shadow-hard-sm font-bangers bold-shadow-sm !tracking-normal first-letter:text-5xl"
           href="{{ route('home') }}">{{ config('app.name') }}</a>

        <div class="flex space-x-8 items-center">
            <a wire:navigate
               class="text-xl font-bangers  text-white  transition-all hover:scale-125 drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="Home">Crypt</a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="About Us">Our Origins </a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="Blog">Crypt Scrolls</a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="Contact Us">Cult Gear </a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="Contact Us">NFT </a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('buy-coin') }}" title="Buy Coin">Pledge Your Wallet </a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="Contact Us">Send a Raven </a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="Login">Reap In</a>
            <a wire:navigate
               class="text-xl  font-bangers  transition-all hover:scale-125  text-white drop-shadow-hard-sm-black"
               href="{{ route('home') }}" title="register">Join the Cult</a>
        </div>
    </div>
</nav>
