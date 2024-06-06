@include('layouts.header')

<section class="bg-white dark:bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="container flex items-center justify-center px-6 mx-auto">
        <div class="navbar-center hidden lg:flex text-8xl z-30 flex-auto text-center font-semibold cursor-pointer">
            <dotlottie-player src="https://lottie.host/216798c6-59bc-453a-b7db-92cde096dc44/N7eu1RnuQC.json"
                background="transparent" speed="1" style="width: 580px; height: 650px" direction="1" playMode="normal"
                loop autoplay></dotlottie-player>
        </div>
        <div class="w-full flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="relative">
                    <ul class="relative flex flex-wrap p-1 list-none rounded-xl bg-blue-gray-50/60" data-tabs="tabs"
                        role="list">
                        <li class="z-30 flex-auto text-center">
                            <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target="#app" role="tab" aria-selected="true" aria-controls="app">
                                <span class="ml-1 text-md font-semibold text-primary-400">Sign in</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target="#message" role="tab" aria-selected="false" aria-controls="message">
                                <span class="ml-1 text-md font-semibold text-primary-400">Sign up</span>
                            </a>
                        </li>
                    </ul>
                    <div data-tab-content="" class="p-5">
                        <div class="block opacity-100" id="app" role="tabpanel">
                            <!-- login -->
                            <div role="tabpanel"
                                class="tab-content p-10 block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                @include('pages.login')
                            </div>
                        </div>
                        <div class="hidden opacity-0" id="message" role="tabpanel">
                            <!-- sign up -->
                            <div role="tabpanel"
                                class="tab-content p-10 block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                @include('pages.register')
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</section>

@include('layouts.footer')
