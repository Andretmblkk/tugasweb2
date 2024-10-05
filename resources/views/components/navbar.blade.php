<nav class="bg-gray-800 fixed top-0 left-0 right-0 z-50" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="{{ asset('img/nav.png') }}" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ request()->is('/') ? 'page' : 'false' }}">Home</a>
                        
                        <a href="/destination" class="{{ request()->is('destination') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ request()->is('destination') ? 'page' : 'false' }}">Destination</a>
                        
                        <a href="/contact" class="{{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ request()->is('contact') ? 'page' : 'false' }}">contact us</a>
                        
                        <a href="/whyus" class="{{ request()->is('whyus') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ request()->is('whyus') ? 'page' : 'false' }}">Why Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </nav>