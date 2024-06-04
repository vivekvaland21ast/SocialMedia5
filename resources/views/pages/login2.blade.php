@include('layouts.header')

<section class="bg-white dark:bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="container flex items-center justify-center px-6 mx-auto">
        <div class="w-full flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="relative">
                    <div class="grid gap-8">
                        <div id="back-div" class="bg-gradient-to-r from-blue-500 to-purple-500 rounded-[26px] m-4 ">
                            <div
                                class="border-[20px] border-transparent rounded-[20px] dark:bg-gray-900 bg-white shadow-lg xl:p-10 2xl:p-10 lg:p-10 md:p-10 sm:p-2 m-2">
                                <h1 class="pt-8 pb-6 font-bold text-5xl dark:text-gray-400 text-center cursor-default">
                                    Sign Up
                                </h1>
                                <form action="#" method="post" class="space-y-4">
                                    @if ($errors->has('error'))
                                        <div class="mb-4 text-sm text-red-600">
                                            {{ $errors->first('error') }}
                                        </div>
                                    @endif
                                    <div class="relative flex items-center">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </span>

                                        <input type="email" name="email"
                                            class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Email">
                                    </div>
                                    @error('email')
                                        <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                                    @enderror
                                    <div class="relative flex items-center mt-4">
                                        <span class="absolute">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </span>

                                        <input type="password" name="password"
                                            class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                            placeholder="Password">
                                    </div>
                                    @error('password')
                                        <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                                    @enderror
                                    <div class="relative flex items-center mt-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="stroke-info shrink-0 w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="ml-2">Forgot your password? <a
                                                href="{{ route('password.request') }}" class="dark:text-blue-300">Click
                                                here</a></span>
                                    </div>
                                    <div class="mt-6">
                                        <button name="login" type="submit"
                                            class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                            Sign in
                                        </button>
                                    </div>
                                </form>
                                <div class="flex flex-col mt-4 items-center justify-center text-sm">
                                    <h3>
                                        <span class="cursor-default dark:text-gray-300">Have an account?</span>
                                        <a class="group text-blue-400 transition-all duration-100 ease-in-out"
                                            href="#">
                                            <span
                                                class="bg-left-bottom ml-1 bg-gradient-to-r from-blue-400 to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                                                Log In
                                            </span>
                                        </a>
                                    </h3>
                                </div>

                                <!-- Third Party Authentication Options -->
                                <div id="third-party-auth" class="flex items-center justify-center mt-5 flex-wrap">
                                    <button href="#"
                                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                                        <img class="max-w-[25px]"
                                            src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/"
                                            alt="Google" />
                                    </button>
                                    <button href="#"
                                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                                        <img class="max-w-[25px]"
                                            src="https://ucarecdn.com/95eebb9c-85cf-4d12-942f-3c40d7044dc6/"
                                            alt="Linkedin" />
                                    </button>
                                    <button href="#"
                                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                                        <img class="max-w-[25px] filter dark:invert"
                                            src="https://ucarecdn.com/be5b0ffd-85e8-4639-83a6-5162dfa15a16/"
                                            alt="Github" />
                                    </button>
                                    <button href="#"
                                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                                        <img class="max-w-[25px]"
                                            src="https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/"
                                            alt="Facebook" />
                                    </button>
                                    <button href="#"
                                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                                        <img class="max-w-[25px] dark:gray-100"
                                            src="https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/"
                                            alt="twitter" />
                                    </button>

                                    <button href="#"
                                        class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                                        <img class="max-w-[25px]"
                                            src="https://ucarecdn.com/3277d952-8e21-4aad-a2b7-d484dad531fb/"
                                            alt="apple" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="grid gap-8">
    <div id="back-div" class="bg-gradient-to-r from-blue-500 to-purple-500 rounded-[26px] m-4 ">
        <div
            class="border-[20px] border-transparent rounded-[20px] dark:bg-gray-900 bg-white shadow-lg xl:p-10 2xl:p-10 lg:p-10 md:p-10 sm:p-2 m-2">
            <h1 class="pt-8 pb-6 font-bold text-5xl dark:text-gray-400 text-center cursor-default">
                Sign Up
            </h1>
            <form action="#" method="post" class="space-y-4">
                <div>
                    <label for="email" class="mb-2 dark:text-gray-400 text-lg">Email</label>
                    <input id="email"
                        class="border dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 p-3 shadow-md placeholder:text-base border-gray-300 rounded-lg w-full focus:scale-105 ease-in-out duration-300"
                        type="email" placeholder="Email" required />
                </div>
                <div>
                    <label for="password" class="mb-2 dark:text-gray-400 text-lg">Password</label>
                    <input id="password"
                        class="border dark:bg-indigo-700 dark:text-gray-300 dark:border-gray-700 p-3 mb-2 shadow-md placeholder:text-base border-gray-300 rounded-lg w-full focus:scale-105 ease-in-out duration-300"
                        type="password" placeholder="Password" required />
                </div>
                <button
                    class="bg-gradient-to-r from-blue-500 to-purple-500 shadow-lg mt-6 p-2 text-white rounded-lg w-full hover:scale-105 hover:from-purple-500 hover:to-blue-500 transition duration-300 ease-in-out"
                    type="submit">
                    SIGN UP
                </button>
            </form>
            <div class="flex flex-col mt-4 items-center justify-center text-sm">
                <h3>
                    <span class="cursor-default dark:text-gray-300">Have an account?</span>
                    <a class="group text-blue-400 transition-all duration-100 ease-in-out" href="#">
                        <span
                            class="bg-left-bottom ml-1 bg-gradient-to-r from-blue-400 to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                            Log In
                        </span>
                    </a>
                </h3>
            </div>

            <!-- Third Party Authentication Options -->
            <div id="third-party-auth" class="flex items-center justify-center mt-5 flex-wrap">
                <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                    <img class="max-w-[25px]" src="https://ucarecdn.com/8f25a2ba-bdcf-4ff1-b596-088f330416ef/"
                        alt="Google" />
                </button>
                <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                    <img class="max-w-[25px]" src="https://ucarecdn.com/95eebb9c-85cf-4d12-942f-3c40d7044dc6/"
                        alt="Linkedin" />
                </button>
                <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                    <img class="max-w-[25px] filter dark:invert"
                        src="https://ucarecdn.com/be5b0ffd-85e8-4639-83a6-5162dfa15a16/" alt="Github" />
                </button>
                <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                    <img class="max-w-[25px]" src="https://ucarecdn.com/6f56c0f1-c9c0-4d72-b44d-51a79ff38ea9/"
                        alt="Facebook" />
                </button>
                <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                    <img class="max-w-[25px] dark:gray-100"
                        src="https://ucarecdn.com/82d7ca0a-c380-44c4-ba24-658723e2ab07/" alt="twitter" />
                </button>

                <button href="#" class="hover:scale-105 ease-in-out duration-300 shadow-lg p-2 rounded-lg m-1">
                    <img class="max-w-[25px]" src="https://ucarecdn.com/3277d952-8e21-4aad-a2b7-d484dad531fb/"
                        alt="apple" />
                </button>
            </div>
            <div class="text-gray-500 flex text-center flex-col mt-4 items-center text-sm">
                <p class="cursor-default">
                    By signing in, you agree to our
                    <a class="group text-blue-400 transition-all duration-100 ease-in-out" href="#">
                        <span
                            class="cursor-pointer bg-left-bottom bg-gradient-to-r from-blue-400 to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                            Terms
                        </span>
                    </a>
                    and
                    <a class="group text-blue-400 transition-all duration-100 ease-in-out" href="#">
                        <span
                            class="cursor-pointer bg-left-bottom bg-gradient-to-r from-blue-400 to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out">
                            Privacy Policy
                        </span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div> --}}

@include('layouts.footer')
