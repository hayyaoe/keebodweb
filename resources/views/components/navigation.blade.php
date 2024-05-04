<nav class="p-4 fixed w-full bg-[#E8F4FA] md:flex md:items-center md:justify-center md:p-0 md:pt-24">
    <div class="flex items-center justify-between md:hidden md:my-0">
        <span class="font-archivo text-3xl">
            <a href="" class="flex mx-4">
                <h1>KEE</h1>
                <h1 class="text-transparent font-outline-1">BOD</h1>
            </a>
        </span>

        <span class="text-4xl cursor-pointer mt-1 mx-4 block md:hidden">
            <ion-icon name="menu-sharp" onclick="Menu(this)"></ion-icon>
        </span>
    </div>

    <ul class="absolute w-full bg-[#E8F4FA] border-b-1 border-black left-0 pl-6 pb-6 opacity-0 top-[-400px] md:opacity-100 md:border-none md:flex md:items-center md:z-auto md:static md:pb-0 md:w-auto">
        <li class="m-4">
            <a href=""><h5 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl">CUSTOM KEYBOARD</h5></a>
        </li>
        <li class="m-4">
            <a href=""><h5 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl">KEYBOARD REPAIR</h5></a>
        </li>
        <li class="m-4">
            <a href=""><h5 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl">KEYBOARD MOD</h5></a>
        </li>
        <li class="m-4 md:hidden">
            <a href=""><h5 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through">PARTS STORE</h5></a>
        </li>
        <li class="m-4 md:hidden">
            <a href=""><h5 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through">LATEST PREBUILT</h5></a>
        </li>
        <li class="m-4 md:hidden">
            <a href=""><h5 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through">AI SUGGESTION</h5></a>
        </li>
    </ul>

    <script>
     function Menu(e){
       let list = document.querySelector('ul')

       e.name === 'menu-sharp' ? (e.name = "close-sharp", list.classList.add('top-[80px]'), list.classList.add('opacity-100')): (e.name = "menu-sharp"
         , list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
     }
    </script>
</nav>
