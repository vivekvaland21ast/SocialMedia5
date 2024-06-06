@include('layouts.header')
<section class="bg-white dark:bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="container flex items-center justify-center px-6 mx-auto">
        <div class="w-full flex justify-center">
            <div class="w-full md:w-1/2">
                <div class="relative">
                    <div class="text-7xl z-30 flex-auto text-center font-semibold cursor-pointer mb-6">
                        <a class="ml-5">
                            <span class="text-primary">S</span>ocial<span class="text-secondary">M</span>ate
                        </a>
                    </div>
                    <div data-tab-content="" class="p-5">
                        <div class="block opacity-100" id="app" role="tabpanel">
                            <form class="w-full max-w-md mx-auto" action="{{ route('password.update') }}"
                                method="POST">
                                @csrf
                                @if (session('error'))
                                    <div class="mb-4 text-sm text-red-600">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="relative flex items-center">
                                    <span class="absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <input type="email" name="email" value="{{ old('email', $email) }}"
                                        class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                        placeholder="Your registered email" required readonly>
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
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="password" name="password"
                                        class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                        placeholder="New Password" required>
                                </div>
                                @error('password')
                                    <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                                @enderror

                                <div class="relative flex items-center mt-4">
                                    <span class="absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="password" name="password_confirmation"
                                        class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                                        placeholder="Confirm New Password" required>
                                </div>
                                @error('password_confirmation')
                                    <div class="text-sm text-red-600 mt-1">{{ $message }}</div>
                                @enderror
                                <div class="mt-6">
                                    <button type="submit"
                                        class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Reset Password
                                    </button>
                                </div>
                                <div class="text-center mt-4">
                                    <span class="ml-2">Back to login <a href="{{ route('login') }}"
                                            class="dark:text-blue-300">Click here</a></span>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
