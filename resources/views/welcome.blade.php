<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evento</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Styles -->
      
    </head>
    <body class="">
        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:left-0 p-6 text-left z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif
    
    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white ">
      <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
          <video class="min-w-full min-h-full absolute object-cover"
              src="https://fiverr-res.cloudinary.com/video/upload/t_fiverr_hd/lqzue5xjmctq6pcsgvq1"
              type="video/mp4" autoplay muted loop></video>
      </div>
      <div class="video-content space-y-2 z-10">
          <h1 class="font-light text-6xl">Welcome to EVENTO</h1>
          <h3 class="font-light text-3xl">An unforgettable experience awaits you!</h3>
          <p class="font-light text-lg">Join us for a spectacular event filled with excitement, entertainment, and amazing surprises.</p>

      </div>
  </section>
  
  
    <main>
        <!-- Pricing section -->
        <div>
          <div class="relative bg-gray-900">
            <!-- Overlapping background -->
            <div aria-hidden="true" class="absolute bottom-0 hidden h-6 w-full bg-gray-50 lg:block"></div>
  
            <div class="relative mx-auto max-w-2xl px-6 pt-16 text-center sm:pt-32 lg:max-w-7xl lg:px-8">
              <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">
                  <span class="block lg:inline">Simple pricing,</span>
                  <span class="block lg:inline">no commitment.</span>
              </h1>
              <p class="mt-4 text-xl text-indigo-100">Everything you need, nothing you don't. Pick a plan that best suits your business.</p>
          </div>
          
          <h2 class="sr-only">Plans</h2>
            <!-- Toggle -->
            <div class="relative mt-12 flex justify-center sm:mt-16">
              <div class="flex rounded-lg bg-indigo-700 p-0.5">
                <button type="button" class="relative whitespace-nowrap rounded-md border-indigo-700 bg-white py-2 px-6 text-sm font-medium text-indigo-700 shadow-sm hover:bg-indigo-50 focus:z-10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-700">Monthly billing</button>
                <button type="button" class="relative ml-0.5 whitespace-nowrap rounded-md border border-transparent py-2 px-6 text-sm font-medium text-indigo-200 hover:bg-indigo-800 focus:z-10 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-700">Yearly billing</button>
              </div>
            </div>
  
            <!-- Cards -->
            <div class="relative mx-auto mt-8 max-w-2xl px-6 pb-8 sm:mt-12 lg:max-w-7xl lg:px-8 lg:pb-0">
              <!-- Decorative background -->
              <div aria-hidden="true" class="absolute inset-0 top-4 bottom-6 left-8 right-8 hidden rounded-tl-lg rounded-tr-lg bg-indigo-700 lg:block"></div>
  
              <div class="relative space-y-6 lg:grid lg:grid-cols-3 lg:space-y-0">
                
                  <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                    <div>
                      <h3 class="text-white text-base font-semibold">Starter</h3>
                      <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                        <div class="mt-3 flex items-center">
                          <p class="text-white text-4xl font-bold tracking-tight">$5</p>
                          <div class="ml-4">
                            <p class="text-white text-sm">USD / mo</p>
                            <p class="text-indigo-200 text-sm">Billed yearly ($56)</p>
                          </div>
                        </div>
                        <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Starter</a>
                      </div>
                    </div>
                    <h4 class="sr-only">Features</h4>
                    <ul role="list" class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0">
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Basic invoicing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Easy to use accounting</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Mutli-accounts</span>
                        </li>
                      
                    </ul>
                  </div>
                
                  <div class="bg-white ring-2 ring-indigo-700 shadow-md pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                    <div>
                      <h3 class="text-indigo-600 text-base font-semibold">Scale</h3>
                      <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                        <div class="mt-3 flex items-center">
                          <p class="text-indigo-600 text-4xl font-bold tracking-tight">$19</p>
                          <div class="ml-4">
                            <p class="text-gray-700 text-sm">USD / mo</p>
                            <p class="text-gray-500 text-sm">Billed yearly ($220)</p>
                          </div>
                        </div>
                        <a href="#" class="bg-indigo-600 text-white hover:bg-indigo-700 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Scale</a>
                      </div>
                    </div>
                    <h4 class="sr-only">Features</h4>
                    <ul role="list" class="border-gray-200 divide-gray-200 mt-7 border-t divide-y lg:border-t-0">
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Advanced invoicing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Easy to use accounting</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Mutli-accounts</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Tax planning toolkit</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">VAT &amp; VATMOSS filing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-500 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-gray-600 ml-4 text-sm font-medium">Free bank transfers</span>
                        </li>
                      
                    </ul>
                  </div>
                
                  <div class="bg-indigo-700 lg:bg-transparent pt-6 px-6 pb-3 rounded-lg lg:px-8 lg:pt-12">
                    <div>
                      <h3 class="text-white text-base font-semibold">Growth</h3>
                      <div class="flex flex-col items-start sm:flex-row sm:items-center sm:justify-between lg:flex-col lg:items-start">
                        <div class="mt-3 flex items-center">
                          <p class="text-white text-4xl font-bold tracking-tight">$12</p>
                          <div class="ml-4">
                            <p class="text-white text-sm">USD / mo</p>
                            <p class="text-indigo-200 text-sm">Billed yearly ($140)</p>
                          </div>
                        </div>
                        <a href="#" class="bg-white text-indigo-600 hover:bg-indigo-50 mt-6 w-full inline-block py-2 px-8 border border-transparent rounded-md shadow-sm text-center text-sm font-medium sm:mt-0 sm:w-auto lg:mt-6 lg:w-full">Buy Growth</a>
                      </div>
                    </div>
                    <h4 class="sr-only">Features</h4>
                    <ul role="list" class="border-indigo-500 divide-indigo-500 divide-opacity-75 mt-7 border-t divide-y lg:border-t-0">
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Basic invoicing</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Easy to use accounting</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Mutli-accounts</span>
                        </li>
                      
                        <li class="flex items-center py-3">
                          <svg class="text-indigo-200 w-5 h-5 flex-shrink-0" x-description="Heroicon name: mini/check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
    <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd"></path>
  </svg>
                          <span class="text-white ml-4 text-sm font-medium">Tax planning toolkit</span>
                        </li>
                      
                    </ul>
                  </div>
                
              </div>
            </div>
          </div>
          <ul class="max-w-2xl mx-auto mt-20 divide-y  shadow shadow-blue-600 rounded-xl">
            <!-- Event FAQ Item 1 -->
            <li>
                <details class="group">
                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                        <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                        <span>How do I register for an event?</span>
                    </summary>
        
                    <article class="px-4 pb-4">
                        <p>
                            To register for an event, please follow these steps:
                        </p>
                        <ol class="list-decimal pl-8">
                            <li>Visit our event registration page</li>
                            <li>Find the event you want to attend</li>
                            <li>Click on the "Register" button</li>
                            <li>Complete the registration form</li>
                        </ol>
                        <p>
                            Once registered, you'll receive a confirmation email with further details.
                        </p>
                    </article>
                </details>
            </li>
        
            <!-- Event FAQ Item 2 -->
            <li>
                <details class="group">
                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                        <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                        <span>What happens if the event is canceled?</span>
                    </summary>
        
                    <article class="px-4 pb-4">
                        <p>
                            In the event of a cancellation, we will notify all registered participants via email and provide
                            information on refunds or rescheduling. Please check your email and our website for updates.
                        </p>
                    </article>
                </details>
            </li>
            <li>
                <details class="group">
                    <summary class="flex items-center gap-3 px-4 py-3 font-medium marker:content-none hover:cursor-pointer">
                        <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                            </path>
                        </svg>
                        <span>Are there any age restrictions for events?</span>
                    </summary>
        
                    <article class="px-4 pb-4">
                        <p>
                            Age restrictions may vary for each event. Please check the event details on our website or
                            contact our support team for specific information regarding age requirements.
                        </p>
                    </article>
                </details>
            </li>
        </ul>
        <br><br><br>
        <br><br><br>
      </main>
      <div class="bg-gray-100">
        <div class="max-w-screen-lg py-10 px-4 sm:px-6 text-gray-800 sm:flex justify-between mx-auto">
            <div class="p-5 sm:w-2/12 border-r">
                <div class="text-sm uppercase text-indigo-600 font-bold">Menu</div>
                <ul>
                    <li class="my-2">
                        <a class="hover:text-indigo-600" href="#">Home</a>
                    </li>
                    <li class="my-2">
                        <a class="hover:text-indigo-600" href="#">Services</a>
                    </li>
                    <li class="my-2">
                        <a class="hover:text-indigo-600" href="#">Products</a>
                    </li>
                    <li class="my-2">
                        <a class="hover:text-indigo-600" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
            <div class="p-5 sm:w-7/12 border-r text-center">
              <h3 class="font-bold text-xl text-indigo-600 mb-4">Componentity Event</h3>
              <p class="text-gray-500 text-sm mb-10">
                  Join us for an exciting exploration of the latest trends in component-based development at the Componentity Event! Discover innovative approaches and best practices in creating modular and scalable applications.
              </p>
              <a href="#register" class="bg-indigo-600 text-white py-2 px-4 rounded-full inline-block hover:bg-indigo-700">Register Now</a>
          </div>
          <div class="p-5 sm:w-3/12">
            <div class="text-sm uppercase text-indigo-600 font-bold">Contact Us</div>
            <ul>
                <li class="my-2">
                    <a class="hover:text-indigo-600" href="#">0123 4569, Floor 4 San Francisco, CA</a>
                </li>
                <li class="my-2">
                    <a class="hover:text-indigo-600" href="#">Evento@gmail.com</a>
                </li>
                <li class="my-2">
                    <div class="flex items-center">
                        <svg class="w-4 h-4 mr-2 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM12 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
                            </path>
                        </svg>
                        <span>+1 (404) 440-0440</span>
                    </div>
                </li>
            </ul>
        </div>
        
        </div>
        <div class="flex py-5 m-auto text-gray-800 text-sm flex-col items-center border-t max-w-screen-xl">
            <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                <a href="#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                        viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                      5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                      -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                      0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                      -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                      0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                      -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                      0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                      -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                      -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                      1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                      -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                      6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                      0.771,-0.67 1.054,-1.093Z"></path>
                    </svg>
                </a>
                <a href="#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                        viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                      5.373,-12 12,-12c6.627,0 12,5.373
                      12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                      0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                      -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                    </svg>
                </a>
                <a href="#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                        viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <g id="Layer_1">
                            <circle id="Oval" cx="12" cy="12" r="12"></circle>
                            <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                         -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                         -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                         -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                         -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                         0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                         2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                         1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                         0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                         -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                         -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                         -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                         0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                         0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                        </g>
                    </svg>
                </a>
                <a href="#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                        viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                      3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                      -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                      -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                      -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                      0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                      3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                      -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                      -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                      1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                      -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                      -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                      0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                      0.4,1.5l0,4.5l2.9,0Z"></path>
                    </svg>
                </a>
                <a href="#" class="w-6 mx-1">
                    <svg class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600" width="100%" height="100%"
                        viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
                        style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                        <path id="Combined-Shape" d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                      -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                      -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                      0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                      0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                      -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z"></path>
                    </svg>
                </a>
            </div>
            <div class="my-5">© Copyright 2023. All Rights Reserved.</div>
        </div>
    </div>
    </body>
</html>
