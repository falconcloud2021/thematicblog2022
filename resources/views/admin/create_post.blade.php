@extends('layouts.admin')
@section('title', 'posts_tables')
@section('content')

<main class="h-full pb-16 overflow-y-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            New Post create-form
        </h2>
        <!-- CTA -->
        <!-- Modal ruls fill form post -->

            <div class=class="flex items-center justify-between p-4 mb-8 text-sm font-medium underline text-purple-100 bg-green-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                <!-- Modal -->
                <div x-data="{ showModal : false }">
                    <!-- Button -->

                    <button @click="showModal = !showModal" class="flex items-center justify-between p-4 mb-8 text-sm font-medium text-purple-100 bg-green-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                ></path>
                            </svg>
                            <span class="underline">Ruls for fill create form of new Post page </span>
                            <span> &RightArrow; </span>
                            <span><b> View more </b> => </span>
                        </div>
                    </button>
                    <a href="/admin/posts-tables">
                        <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Return to table
                        </button>
                    </a>
                    {{-- Open Modal --}}
                    <!-- Modal Background -->
                    <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <!-- Modal -->
                        <div x-show="showModal" class="bg-white rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                            <!-- Title -->
                            <span class="font-bold block text-2xl mb-3">🍺 Beer, beer, beer </span>
                            <!-- Some beer 🍺 -->
                            <p class="mb-5">beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>
                            <p>beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer... beer, beer, beer...</p>
                            <!-- Buttons -->
                            <div class="text-right space-x-5 mt-5">
                                <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                <a href="#" target="_blank" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">🍺 Buy me a beer!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Inputs with icons -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Input Data
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Title name </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Title name" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Icon left </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Icon left </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Message </span>
            <textarea class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                rows="4"
                placeholder="Enter some long form content."
            ></textarea>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Requested Limit
            </span>
            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                <option> 1 category </option>
                <option> 2 category </option>
                <option> 3 category </option>
                <option> 4 category </option>
            </select>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Icon left </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Icon left </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Icon left </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Icon left </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pl-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
            <!-- focus-within sets the color for the icon when input is focused -->
            <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400"> Icon right </span>
            <div class="relative text-gray-500 focus-within:text-purple-600 dark:focus-within:text-purple-400">
                <input class="block w-full pr-10 mt-1 text-sm text-black dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
                <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                </div>
            </div>
            </label>
        </div>

        <!-- General elements -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Elements
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Name</span>
            <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
            </label>

            <div class="mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Account Type
            </span>
            <div class="mt-2">
                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">
                <input
                    type="radio"
                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="accountType"
                    value="personal"
                />
                <span class="ml-2">Personal</span>
                </label>
                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                <input class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    type="radio" name="accountType" value="busines" />
                <span class="ml-2">Business</span>
                </label>
            </div>
            </div>



            <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Multiselect
            </span>
            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                multiple>
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
            </select>
            </label>



            <div class="flex mt-6 text-sm">
            <label class="flex items-center dark:text-gray-400">
                <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" />
                <span class="ml-2">
                I agree to the
                <span class="underline">privacy policy</span>
                </span>
            </label>
            </div>
        </div>

        <!-- Validation inputs -->
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Validation
        </h4>
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- Invalid input -->
            <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Invalid input
            </span>
            <input class="block w-full mt-1 text-sm border-red-600 dark:text-gray-300 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
                placeholder="Jane Doe" />
            <span class="text-xs text-red-600 dark:text-red-400">
                Your password is too short.
            </span>
            </label>

            <!-- Valid input -->
            <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Valid input
            </span>
            <input class="block w-full mt-1 text-sm border-green-600 dark:text-gray-300 dark:bg-gray-700 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                placeholder="Jane Doe" />
            <span class="text-xs text-green-600 dark:text-green-400">
                Your password is strong.
            </span>
            </label>

            <!-- Helper text -->
            <label class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">
                Helper text
            </span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe" />
            <span class="text-xs text-gray-600 dark:text-gray-400">
                Your password must be at least 6 characters long.
            </span>
            </label>
        </div>
        <!-- Create new Post button. -->
        <div>
            <a href="/admin/post/save/{id}">
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Save New Post data
                </button>
            </a>
            <a href="/admin/posts-tables">
                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Return to table
                </button>
            </a>
        </div>

    <!-- End Inputs buttons -->

    </div>
</main>

@stop

@section('sidebar')
@parent
@endsection
