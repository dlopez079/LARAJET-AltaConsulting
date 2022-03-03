<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('a-p-i.times')

                <div class="min-h-full hidden">
                    <!--
      When the mobile menu is open, add `overflow-hidden` to the `body` element to prevent double scrollbars
  
      Menu open: "fixed inset-0 z-40 overflow-y-auto", Menu closed: ""
    -->
                    <header class="bg-white shadow-sm lg:static lg:overflow-y-visible">
                        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                            <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-8">
                                <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2">
                                    <div class="flex-shrink-0 flex items-center">
                                        <a href="#">
                                            <img class="block h-8 w-auto"
                                                src="https://tailwindui.com/img/logos/workflow-mark.svg?color=rose&shade=500"
                                                alt="Workflow">
                                        </a>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
                                    <div
                                        class="flex items-center px-6 py-4 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
                                        <div class="w-full">
                                            <label for="search" class="sr-only">Search</label>
                                            <div class="relative">
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                                    <!-- Heroicon name: solid/search -->
                                                    <svg class="h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <input id="search" name="search"
                                                    class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-rose-500 focus:border-rose-500 sm:text-sm"
                                                    placeholder="Search" type="search">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center md:absolute md:right-0 md:inset-y-0 lg:hidden">
                                    <!-- Mobile menu button -->
                                    <button type="button"
                                        class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-500"
                                        aria-expanded="false">
                                        <span class="sr-only">Open menu</span>
                                        <!--
                Icon when menu is closed.
  
                Heroicon name: outline/menu
  
                Menu open: "hidden", Menu closed: "block"
              -->
                                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                        <!--
                Icon when menu is open.
  
                Heroicon name: outline/x
  
                Menu open: "block", Menu closed: "hidden"
              -->
                                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                                    <a href="#" class="text-sm font-medium text-gray-900 hover:underline"> Go Premium
                                    </a>
                                    <a href="#"
                                        class="ml-5 flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                                        <span class="sr-only">View notifications</span>
                                        <!-- Heroicon name: outline/bell -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                    </a>

                                    <!-- Profile dropdown -->
                                    <div class="flex-shrink-0 relative ml-5">
                                        <div>
                                            <button type="button"
                                                class="bg-white rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500"
                                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                <span class="sr-only">Open user menu</span>
                                                <img class="h-8 w-8 rounded-full"
                                                    src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                    alt="">
                                            </button>
                                        </div>

                                        <!--
                Dropdown menu, show/hide based on menu state.
  
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
                                        <div class="origin-top-right absolute z-10 right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 focus:outline-none"
                                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                            tabindex="-1">
                                            <!-- Active: "bg-gray-100", Not Active: "" -->
                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem"
                                                tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem"
                                                tabindex="-1" id="user-menu-item-1">Settings</a>

                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700" role="menuitem"
                                                tabindex="-1" id="user-menu-item-2">Sign out</a>
                                        </div>
                                    </div>

                                    <a href="#"
                                        class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                                        New Post </a>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile menu, show/hide based on menu state. -->
                        <nav class="lg:hidden" aria-label="Global">
                            <div class="max-w-3xl mx-auto px-2 pt-2 pb-3 space-y-1 sm:px-4">
                                <!-- Current: "bg-gray-100 text-gray-900", Default: "hover:bg-gray-50" -->
                                <a href="#" aria-current="page"
                                    class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium">Home</a>

                                <a href="#"
                                    class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Popular</a>

                                <a href="#"
                                    class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Communities</a>

                                <a href="#"
                                    class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Trending</a>
                            </div>
                            <div class="border-t border-gray-200 pt-4">
                                <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full"
                                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="">
                                    </div>
                                    <div class="ml-3">
                                        <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                                        <div class="text-sm font-medium text-gray-500">chelseahagon@example.com</div>
                                    </div>
                                    <button type="button"
                                        class="ml-auto flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
                                        <span class="sr-only">View notifications</span>
                                        <!-- Heroicon name: outline/bell -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">
                                    <a href="#"
                                        class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your
                                        Profile</a>

                                    <a href="#"
                                        class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Settings</a>

                                    <a href="#"
                                        class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Sign
                                        out</a>
                                </div>
                            </div>

                            <div class="mt-6 max-w-3xl mx-auto px-4 sm:px-6">
                                <a href="#"
                                    class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-rose-600 hover:bg-rose-700">
                                    New Post </a>

                                <div class="mt-6 flex justify-center">
                                    <a href="#" class="text-base font-medium text-gray-900 hover:underline"> Go Premium
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </header>

                    <div class="py-10">
                        <div class="max-w-3xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
                            <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                                <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
                                    <div class="pb-8 space-y-1">
                                        <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50" -->
                                        <a href="#"
                                            class="bg-gray-200 text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                                            aria-current="page">
                                            <!-- Heroicon name: outline/home -->
                                            <svg class="text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                            <span class="truncate"> Home </span>
                                        </a>

                                        <a href="#"
                                            class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                            <!-- Heroicon name: outline/fire -->
                                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                            </svg>
                                            <span class="truncate"> Popular </span>
                                        </a>

                                        <a href="#"
                                            class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                            <!-- Heroicon name: outline/user-group -->
                                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            <span class="truncate"> Communities </span>
                                        </a>

                                        <a href="#"
                                            class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                            <!-- Heroicon name: outline/trending-up -->
                                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                            </svg>
                                            <span class="truncate"> Trending </span>
                                        </a>
                                    </div>
                                    <div class="pt-10">
                                        <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                                            id="communities-headline">My communities</p>
                                        <div class="mt-3 space-y-2" aria-labelledby="communities-headline">
                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Movies </span>
                                            </a>

                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Food </span>
                                            </a>

                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Sports </span>
                                            </a>

                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Animals </span>
                                            </a>

                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Science </span>
                                            </a>

                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Dinosaurs </span>
                                            </a>

                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Talents </span>
                                            </a>

                                            <a href="#"
                                                class="group flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50">
                                                <span class="truncate"> Gaming </span>
                                            </a>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <main class="lg:col-span-9 xl:col-span-6">
                                <div class="px-4 sm:px-0">
                                    <div class="sm:hidden">
                                        <label for="question-tabs" class="sr-only">Select a tab</label>
                                        <select id="question-tabs"
                                            class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                                            <option selected>Recent</option>

                                            <option>Most Liked</option>

                                            <option>Most Answers</option>
                                        </select>
                                    </div>
                                    <div class="hidden sm:block">
                                        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200"
                                            aria-label="Tabs">
                                            <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                                            <a href="#" aria-current="page"
                                                class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                                <span>Recent</span>
                                                <span aria-hidden="true"
                                                    class="bg-rose-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                                            </a>

                                            <a href="#"
                                                class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                                <span>Most Liked</span>
                                                <span aria-hidden="true"
                                                    class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                                            </a>

                                            <a href="#"
                                                class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                                <span>Most Answers</span>
                                                <span aria-hidden="true"
                                                    class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h1 class="sr-only">Recent questions</h1>
                                    <ul role="list" class="space-y-4">
                                        <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                                            <article aria-labelledby="question-title-81614">
                                                <div>
                                                    <div class="flex space-x-3">
                                                        <div class="flex-shrink-0">
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                                alt="">
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <p class="text-sm font-medium text-gray-900">
                                                                <a href="#" class="hover:underline">Dries Vincent</a>
                                                            </p>
                                                            <p class="text-sm text-gray-500">
                                                                <a href="#" class="hover:underline">
                                                                    <time datetime="2020-12-09T11:43:00">December 9 at
                                                                        11:43 AM</time>
                                                                </a>
                                                            </p>
                                                        </div>
                                                        <div class="flex-shrink-0 self-center flex">
                                                            <div class="relative inline-block text-left">
                                                                <div>
                                                                    <button type="button"
                                                                        class="-m-2 p-2 rounded-full flex items-center text-gray-400 hover:text-gray-600"
                                                                        id="options-menu-0-button" aria-expanded="false"
                                                                        aria-haspopup="true">
                                                                        <span class="sr-only">Open
                                                                            options</span>
                                                                        <!-- Heroicon name: solid/dots-vertical -->
                                                                        <svg class="h-5 w-5"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            aria-hidden="true">
                                                                            <path
                                                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                                        </svg>
                                                                    </button>
                                                                </div>

                                                                <!--
                            Dropdown menu, show/hide based on menu state.
  
                            Entering: "transition ease-out duration-100"
                              From: "transform opacity-0 scale-95"
                              To: "transform opacity-100 scale-100"
                            Leaving: "transition ease-in duration-75"
                              From: "transform opacity-100 scale-100"
                              To: "transform opacity-0 scale-95"
                          -->
                                                                <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                                    role="menu" aria-orientation="vertical"
                                                                    aria-labelledby="options-menu-0-button"
                                                                    tabindex="-1">
                                                                    <div class="py-1" role="none">
                                                                        <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                                                        <a href="#"
                                                                            class="text-gray-700 flex px-4 py-2 text-sm"
                                                                            role="menuitem" tabindex="-1"
                                                                            id="options-menu-0-item-0">
                                                                            <!-- Heroicon name: solid/star -->
                                                                            <svg class="mr-3 h-5 w-5 text-gray-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path
                                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                                            </svg>
                                                                            <span>Add to favorites</span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="text-gray-700 flex px-4 py-2 text-sm"
                                                                            role="menuitem" tabindex="-1"
                                                                            id="options-menu-0-item-1">
                                                                            <!-- Heroicon name: solid/code -->
                                                                            <svg class="mr-3 h-5 w-5 text-gray-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                            <span>Embed</span>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="text-gray-700 flex px-4 py-2 text-sm"
                                                                            role="menuitem" tabindex="-1"
                                                                            id="options-menu-0-item-2">
                                                                            <!-- Heroicon name: solid/flag -->
                                                                            <svg class="mr-3 h-5 w-5 text-gray-400"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                            <span>Report content</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2 id="question-title-81614"
                                                        class="mt-4 text-base font-medium text-gray-900">What would you
                                                        have done differently if you ran Jurassic Park?</h2>
                                                </div>
                                                <div class="mt-2 text-sm text-gray-700 space-y-4">
                                                    <p>Jurassic Park was an incredible idea and a magnificent feat of
                                                        engineering, but poor protocols and a disregard for human safety
                                                        killed what could have otherwise been one of the best businesses
                                                        of our generation.</p>
                                                    <p>Ultimately, I think that if you wanted to run the park
                                                        successfully and keep visitors safe, the most important thing to
                                                        prioritize would be&hellip;</p>
                                                </div>
                                                <div class="mt-6 flex justify-between space-x-8">
                                                    <div class="flex space-x-6">
                                                        <span class="inline-flex items-center text-sm">
                                                            <button type="button"
                                                                class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/thumb-up -->
                                                                <svg class="h-5 w-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                                </svg>
                                                                <span class="font-medium text-gray-900">29</span>
                                                                <span class="sr-only">likes</span>
                                                            </button>
                                                        </span>
                                                        <span class="inline-flex items-center text-sm">
                                                            <button type="button"
                                                                class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/chat-alt -->
                                                                <svg class="h-5 w-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                                <span class="font-medium text-gray-900">11</span>
                                                                <span class="sr-only">replies</span>
                                                            </button>
                                                        </span>
                                                        <span class="inline-flex items-center text-sm">
                                                            <button type="button"
                                                                class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/eye -->
                                                                <svg class="h-5 w-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                                <span class="font-medium text-gray-900">2.7k</span>
                                                                <span class="sr-only">views</span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="flex text-sm">
                                                        <span class="inline-flex items-center text-sm">
                                                            <button type="button"
                                                                class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                                <!-- Heroicon name: solid/share -->
                                                                <svg class="h-5 w-5"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">
                                                                    <path
                                                                        d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                                                </svg>
                                                                <span class="font-medium text-gray-900">Share</span>
                                                            </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>

                                        <!-- More questions... -->
                                    </ul>
                                </div>
                            </main>
                            <aside class="hidden xl:block xl:col-span-4">
                                <div class="sticky top-4 space-y-4">
                                    <section aria-labelledby="who-to-follow-heading">
                                        <div class="bg-white rounded-lg shadow">
                                            <div class="p-6">
                                                <h2 id="who-to-follow-heading"
                                                    class="text-base font-medium text-gray-900">Who to follow</h2>
                                                <div class="mt-6 flow-root">
                                                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                                                        <li class="flex items-center py-4 space-x-3">
                                                            <div class="flex-shrink-0">
                                                                <img class="h-8 w-8 rounded-full"
                                                                    src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                                    alt="">
                                                            </div>
                                                            <div class="min-w-0 flex-1">
                                                                <p class="text-sm font-medium text-gray-900">
                                                                    <a href="#">Leonard Krasner</a>
                                                                </p>
                                                                <p class="text-sm text-gray-500">
                                                                    <a href="#">@leonardkrasner</a>
                                                                </p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <button type="button"
                                                                    class="inline-flex items-center px-3 py-0.5 rounded-full bg-rose-50 text-sm font-medium text-rose-700 hover:bg-rose-100">
                                                                    <!-- Heroicon name: solid/plus-sm -->
                                                                    <svg class="-ml-1 mr-0.5 h-5 w-5 text-rose-400"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                    <span> Follow </span>
                                                                </button>
                                                            </div>
                                                        </li>

                                                        <!-- More people... -->
                                                    </ul>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="#"
                                                        class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                                        View all </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section aria-labelledby="trending-heading">
                                        <div class="bg-white rounded-lg shadow">
                                            <div class="p-6">
                                                <h2 id="trending-heading" class="text-base font-medium text-gray-900">
                                                    Trending</h2>
                                                <div class="mt-6 flow-root">
                                                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                                                        <li class="flex py-4 space-x-3">
                                                            <div class="flex-shrink-0">
                                                                <img class="h-8 w-8 rounded-full"
                                                                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                                    alt="Floyd Miles">
                                                            </div>
                                                            <div class="min-w-0 flex-1">
                                                                <p class="text-sm text-gray-800">What books do you have
                                                                    on your bookshelf just to look smarter than you
                                                                    actually are?</p>
                                                                <div class="mt-2 flex">
                                                                    <span class="inline-flex items-center text-sm">
                                                                        <button type="button"
                                                                            class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                                            <!-- Heroicon name: solid/chat-alt -->
                                                                            <svg class="h-5 w-5"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                aria-hidden="true">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                                                    clip-rule="evenodd" />
                                                                            </svg>
                                                                            <span
                                                                                class="font-medium text-gray-900">291</span>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <!-- More posts... -->
                                                    </ul>
                                                </div>
                                                <div class="mt-6">
                                                    <a href="#"
                                                        class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                                        View all </a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    {{-- The scripts below are used to retrieve the Time API json data. --}}
    <script type="module" src="{{ asset('js/axios.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</x-app-layout>
