@extends('layouts/app2')

@section('title', 'KeeBod')

@section('body')
    @include('components/topbar')
    <!--Header-->
    <section>
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto  mt-[-40px] lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-6xl xl:text-7xl font-archivo">
                    Build Your Dream <span class="text-transparent font-outline-1">Keyboard</span></h1>
                <p class="max-w-2xl mb-6 font-normal text-gray-700 lg:mb-8 md:text-lg lg:text-xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa officia sint nostrum est soluta quisquam quidem neque, perferendis dolore nihil..</p>
                <a href="{{ route('custom-keyboard') }}"
                    class="inline-flex items-center bg-teal-400 justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-teal-500 focus:ring-4 focus:ring-teal-800 dark:focus:ring-primary-900">
                    Custom Now
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('images/bod.png') }}" alt="mockup">
            </div>
        </div>
    </section>
    <!--ABout us-->
    <section class="">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">

            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                    alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="office content 2">
            </div>
            <div class="font-light mt-[-50px]">
                <p class="font-archivo text-teal-500 text-lg pb-2">About Us</p>
                <h2 class="mb-4 text-5xl tracking-tight font-extrabold font-archivo">Building a <span
                        class="text-transparent font-outline-1">Keyboard</span> Made Easier</h2>
                <p class="mb-4 text-lg font-normal text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt minima ipsam amet architecto? Adipisci delectus itaque aliquam. Autem dolorum quia maxime eveniet ad impedit delectus reprehenderit ullam nobis architecto. Eum recusandae asperiores exercitationem adipisci doloremque praesentium sapiente totam possimus architecto, aperiam, illum obcaecati ipsa porro quidem nam magnam ex consectetur facere nisi quos ea? Quaerat provident fugit dolor incidunt molestias.</p>
                <a href="{{ route('prebuilt') }}"
                    class="inline-flex items-center bg-teal-400 justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-teal-500 focus:ring-4 focus:ring-teal-800 dark:focus:ring-primary-900">
                    Check Pre-Built
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!--Our service-->
    <section class="mt-20">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <p class="font-archivo text-teal-500 text-lg pb-2">Our Services</p>
                <h2 class="font-archivo mb-4 text-5xl tracking-tight text-gray-90d">Your <span
                        class="text-transparent font-outline-1">Keyboard</span> is Our Priority</h2>
                <p class="font-normal text-gray-700 sm:text-xl">Lorem, ipsum dolor sit amet consectetur adipisicing elit. sint quisquam aspernatur corrupti iste, obcaecati consectetur hic.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-4 md:space-y-0">
                <div class="hover:bg-teal-200 p-4 rounded-lg transition duration-300">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-400 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img width="24" height="24"
                            src="https://img.icons8.com/material-outlined/24/015e59/windows10-personalization.png"
                            alt="windows10-personalization" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Custom Keyboard</h3>
                    <p class="text-gray-600">Plan it, create it, launch it. Collaborate seamlessly with all the organization
                        and hit your marketing goals every month with our marketing plan.</p>
                </div>
                <div class="hover:bg-teal-200 p-4 rounded-lg transition duration-300">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-400 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img width="24" height="24"
                            src="https://img.icons8.com/material-outlined/24/015e59/support.png" alt="support" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Repair Keyboard</h3>
                    <p class="text-gray-600">Protect your organization, devices and stay compliant with our structured
                        workflows and custom permissions made for you.</p>
                </div>
                <div class="hover:bg-teal-200 p-4 rounded-lg transition duration-300">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-400 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <svg class="w-5 h-5 text-teal-800 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path
                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Keyboard Mod</h3>
                    <p class="text-gray-600">Auto-assign tasks, send Slack messages, and much more. Now power up with
                        hundreds of new templates to help you get started.</p>
                </div>
                <div class="hover:bg-teal-200 p-4 rounded-lg transition duration-300">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-400 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img width="24" height="24"
                            src="https://img.icons8.com/material-outlined/24/015e59/settings--v1.png" alt="settings--v1" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Part Store</h3>
                    <p class="text-gray-600">Audit-proof software built for critical financial operations like month-end
                        close and quarterly budgeting.</p>
                </div>
                <div class="hover:bg-teal-200 p-4 rounded-lg transition duration-300">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-400 lg:h-12 lg:w-12">
                        <img width="24" height="24" src="https://img.icons8.com/material-outlined/24/015e59/bot.png"
                            alt="bot" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold">AI Suggestion</h3>
                    <p class="text-gray-600">Craft beautiful, delightful experiences for both marketing and product with
                        real cross-company collaboration.</p>
                </div>
                <div class="hover:bg-teal-200 p-4 rounded-lg transition duration-300">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-teal-400 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img width="24" height="24"
                            src="https://img.icons8.com/material-outlined/24/015e59/keyboard.png" alt="keyboard" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Lateest Prebuilt</h3>
                    <p class="text-gray-600">Keep your company’s lights on with customizable, iterative, and structured
                        workflows built for all efficient teams and individual.</p>
                </div>
            </div>
        </div>
    </section>
    <!--Contacy-->
    <section id="contact" class="body-font relativ">

        <div class="container mx-auto px-5 py-24">

            <div class="w-full px-4">
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-lg  font-archivo text-teal-400 mb-2 uppercase">Contact</h4>
                    <h2 class="font-bold font-archivo text-4xl mb-4 lg:text-4xl">Contact <span
                        class="text-transparent font-outline-1">Us</span></h2>
                    <p class="font-normal text-gray-700 sm:text-xl">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis ullam
                        corrupti
                        enim consectetur. Recusandae!</p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-1/2">
                    <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.606068118739!2d112.62902667479787!3d-7.285581871604548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fde455555555%3A0xd7e2611ae591f046!2sUniversitas%20Ciputra%20Surabaya!5e0!3m2!1sen!2sid!4v1715500386164!5m2!1sen!2sid" width="600" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="mx-auto md:w-2/3 lg:w-1/2">
                    <div class="-m-2 flex flex-wrap text-black">
                        <div class="w-1/2 p-2">
                            <div class="relative">
                                <input type="text" id="name" name="name"
                                    class="peer w-full rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                                    placeholder="Name" />
                                <label for="name"
                                    class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Name</label>
                            </div>
                        </div>
                        <div class="w-1/2 p-2">
                            <div class="relative">
                                <input type="text" id="email" name="email"
                                    class="peer w-full rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                                    placeholder="Email" />
                                <label for="email"
                                    class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Email</label>
                            </div>
                        </div>
                        <div class="mt-4 w-full p-2">
                            <div class="relative">
                                <textarea type="text" id="email" name="email"
                                    class="peer w-full h-60 rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                                    placeholder="Email"></textarea>
                                <label for="email"
                                    class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Message</label>
                            </div>
                        </div>

                        <div class="w-full p-2">
                            <button
                                class="w-full mx-auto rounded border border-teal-400 bg-teal-400 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-teal-400 focus:outline-none focus:ring active:text-indigo-00">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-900">
        <div class="pt-8 mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div>
                    <span class="font-archivo text-3xl text-white">
                        <a href="{{ route('home') }}" class="flex pb-2">
                            <h1 class="italic">KEE</h1>
                            <div class="text-outline-1 italic">BOD</div>
                        </a>
                    </span>
                    <p class="w-[400px] text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur nihil quam ab accusantium natus impedit officia cupiditate architecto asperiores veritatis.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, sint!</p>
                </div>

                <div class="grid grid-cols-2 gap-8 sm:gap-10 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Menu</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="" class="hover:underline ">Part Store</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline">AI Sugesstion</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline">Latest Prebuilt</a>
                            </li>
                            <li class="mb-4">
                                <a href="" class="hover:underline">Keyboard Customization</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com" class="hover:underline">KeeBod</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
@endsection
