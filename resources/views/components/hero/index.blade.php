<section id="hero"
         class="relative w-full min-h-[600px] 2xl:min-h-[800px] grid bg-radial-[at_35%_75%] from-secondary-500 to-black via-purple-950 via-75% overflow-clip">
    <!--Moon -->
    <div id="moon-container" aria-hidden="true"
         class="absolute left-1/2 top-10 -translate-1/2 size-100 lg:size-160 rounded-full border-amber-100 border-1">
        <div class="absolute -inset-10 bg-amber-100 blur-3xl rounded-full"></div>
        <div class="absolute inset-0 bg-radial-[at_50%_50%] from-yellow-50 to-yellow-100 blur-xs  rounded-full"></div>
        <img id="moon" class="absolute inset-0 opacity-50" src="{{ Vite::asset('resources/img/moon.png') }}" alt="moon">
    </div>

    <div class="wrapper mb-0 mt-auto flex flex-col-reverse md:flex-row inset-y-0 ">
        <div class="relative w-100 lg:w-130 h-160  2xl:w-160 shrink-0 ">
            <div class="absolute bottom-0 xl:bottom-8 z-10">
                <img class="relative" aria-hidden="true"
                     src="{{ Vite::asset('resources/img/grimm-body.png') }}" alt="grimm">
                <img class="absolute left-[15%] top-[6%] w-[60%] trees origin-bottom grimm-head" aria-hidden="true"
                     src="{{ Vite::asset('resources/img/grimm-head-small.png') }}" alt="grimm">
            </div>

        </div>
        <div class="absolute md:relative z-10 top-0 lg:bottom-10 2xl:scale-125 flex flex-col justify-center w-full">
            <h1
                class="font-bangers text-7xl lg:text-8xl bold-shadow drop-shadow-xl/90 drop-shadow-black/75 italic mb-4">
                <span
                    class="lg:text-8xl mt-2 relative inline-block first-letter:-z-10 first-letter:text-9xl">Grimm</span>
                <span
                    class="whitespace-nowrap -z-10  lg:text-8xl mt-2 relative inline-block first-letter:text-9xl">Coin</span>
            </h1>

            <p class="font-bangers text-2xl lg:text-4xl bold-shadow-sm drop-shadow-md/90 drop-shadow-black/75 italic">
                <span class="block ml-10 heading">Because Even the Reaper</span>
                <span class="block ml-20 heading">Needs Retirement Funds.</span>
            </p>
            <div class="my-6 flex justify-center space-x-4">
                <a class="px-8 py-3 bg-white text-black shrink border-4 font-bangers text-xl shadow-md hover:shadow-lg shadow-black inline-block transition hover:scale-110 border-black rounded-md"
                   href="#">Learn more</a>
                <a class="px-8 py-3 bg-primary-500 text-black shrink border-4 font-bangers text-xl shadow-md hover:shadow-lg shadow-black inline-block transition hover:scale-110 border-black rounded-md"
                   href="#">buy coins</a>
            </div>

        </div>
    </div>

    <!-- trees and grass -->
    <img class="absolute h-1/2 opacity-30 left-1/3 bottom-0 origin-bottom inline-block trees" aria-hidden="true"
         src="{{ Vite::asset('resources/img/tree-1.png') }}" alt="tree">
    <img class="absolute h-1/2 hidden  opacity-20 right-1/4 bottom-0  origin-bottom xl:inline-block trees"
         aria-hidden="true"
         src="{{ Vite::asset('resources/img/tree-1.png') }}" alt="tree">
    <img
        class="absolute h-full -translate-x-2/3 lg:-translate-x-1/3 bottom-0 sm:bottom-10 origin-bottom inline-block trees"
        aria-hidden="true"
        src="{{ Vite::asset('resources/img/tree-1.png') }}" alt="tree">
    <img
        class="absolute h-full translate-x-2/3 lg:translate-x-1/2 bottom-0 sm:bottom-10 right-0 origin-bottom inline-block trees"
        aria-hidden="true"
        src="{{ Vite::asset('resources/img/tree-1.png') }}" alt="tree">
    <img class="absolute inset-x-0 -bottom-1 w-full origin-bottom" aria-hidden="true"
         src="{{ Vite::asset('resources/img/grass.png') }}" alt="grass">
</section>
{{--box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 70px 4px;--}}
