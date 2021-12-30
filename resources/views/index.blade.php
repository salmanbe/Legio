<!DOCTYPE html>
<html lang="{{ app()->getLocale('nl') }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">     
    <title>Legio Soft – Keeping legionella bacteria under control</title>
</head>
<body>
    <main>
        <div class="bg-cover bg-no-repeat bg-right-top xl:bg-bottom" style="background-image: url('assets/img/bg.png');"><!-- Start Hero Block -->
            <div class="container mx-auto px-5 pb-16 sm:pb-16 lg:pb-24 xl:pb-32">
                <header class="flex justify-between items-center pt-5">
                    <div>
                        <a href="#0" class=""><img class="h-12" src="{{ asset('assets/img/logo.svg') }}" alt=""></a>
                    </div>
                    <!-- Top menu can be enabled later. Does not look nice with only 2 links -->
                    <!--<div class="hidden space-x-8 font-medium lg:block">
                        <a href="#0" class="hover:text-blue-600 transition-colors duration-300">Hoe het werkt</a>
                        <a href="#0" class="hover:text-blue-600 transition-colors duration-300">Contact</a>                        
                    </div>
                    -->
                    <div class="hidden font-medium lg:block">
                        +32 477 8044 53
                    </div>
                    <div class="block lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </div>
                </header>
                <div class="mt-16 space-y-8 lg:mt-24 xl:mt-28">
                    <div class="space-y-4">
                        <!-- May be we can show logo in banner -->
                        <!--<img class="h-24" src="assets/img/logo.svg">-->
                        <h1 class="text-3xl font-black sm:w-2/3 sm:text-4xl md:max-w-xl md:text-5xl">Legionella-beheersing webapplicatie</h1>
                        <p class="max-w-sm text-lg text-gray-700 md:max-w-md md:text-xl">Keeping legionella bacteria under control.</p>
                    </div>
                    <button class="btn" id="btn-contact">Contact Ons</button>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200"></div>

        <section class="py-12 lg:py-16 xl:py-28"><!-- Start How It Works Block -->
            <div class="container mx-auto px-5">
                <div class="grid gap-6 lg:gap-10 xl:grid-cols-3">
                    <div class="space-y-2 lg:space-y-4">
                        <h2 class="h2">Hoe het werkt</h2>
                        <p class="w-full sm:w-1/2 xl:w-80 text-gray-600 md:text-lg">Voluptates aliquid est labore dignissimos similique incidunt porro temporibus. Omnis commodi dolorem.</p>
                    </div>
                    <div class="grid gap-6 sm:grid-cols-2 lg:gap-10 xl:col-span-2">
                        <div class="box">
                            <dt>
                                <div class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                                </div>
                                <p class="box-title">Overzicht kritische tappunten</p>
                            </dt>
                            <dd class="box-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</dd>
                        </div>
                        <div class="box">
                            <dt>
                                <div class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                                </div>
                                <p class="box-title">Periodieke temperatuurinventarisatie</p>
                            </dt>
                            <dd class="box-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</dd>
                        </div>
                        <div class="box">
                            <dt>
                                <div class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                                </div>
                                <p class="box-title">Spoelopdrachten voor de medewerkers</p>
                            </dt>
                            <dd class="box-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</dd>
                        </div>
                        <div class="box">
                            <dt>
                                <div class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <p class="box-title">Staalnameplanning</p>
                            </dt>
                            <dd class="box-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</dd>
                        </div>
                        <div class="box">
                            <dt>
                                <div class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <p class="box-title">Historiek, rapporten en grafieken</p>
                            </dt>
                            <dd class="box-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</dd>
                        </div>
                        <div class="box">
                            <dt>
                                <div class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <p class="box-title">Automatische temperatuurmeting</p>
                            </dt>
                            <dd class="box-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</dd>
                        </div>
                        <div class="box">
                            <dt>
                                <div class="box-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <p class="box-title">Eenvoudig en fexibel in gebruik</p>
                            </dt>
                            <dd class="box-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen.</dd>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="border-t border-gray-200"></div>

        <section class="bg-gray-100 pt-12 pb-7 lg:pb-8 lg:pt-16 xl:pt-28" id="contact-div">
            <div class="container mx-auto px-5">
                <div class="grid gap-6 lg:gap-10 xl:grid-cols-3 mb-7 lg:mb-14">
                    <div class="flex flex-col justify-between space-y-10 xl:space-y-0">
                        <div class="space-y-2 lg:space-y-4">
                            <h2 class="h2">Contact Ons</h2>
                            <p class="w-full sm:w-1/2 xl:w-80 text-gray-600 md:text-lg">Aut vel cumque cum ut minima tempore aliquid labore. Exercitationem consequatur saepe dolor sequi cum. Aperiam odio rerum sequi nobis sint.</p>
                            <span href="#" class="contact-opt">+32 477 8044 53</span>
                            <a href="mailto:info@legiosoft.com" class="contact-opt">info@legiosoft.com</a>
                            <a href="https://www.legiosoft.com" class="contact-opt">www.legiosoft.com</a>
                        </div>                        
                    </div>
                    <div class="xl:col-span-2">
                        
                        <div class="w-full bg-white p-5 rounded-xl shadow">
                            
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative margin-16" id="errors-div" style="display: none" role="alert">
                                <strong class="font-bold">Fout!</strong>
                                <span class="block sm:inline" id="errors"></span>
                            </div>
                            
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative margin-16" id="success-div" style="display: none" role="alert">
                                <span class="block sm:inline" id="success"></span>
                            </div>
                            
                            <div class="flex flex-col space-y-5 mt-2">
                                <input type="text" id="name" class="input-box" placeholder="Naam*">
                                <input type="email" id="email" class="input-box" placeholder="Email*">
                                <input type="text" id="phone" class="input-box" placeholder="Telefoon*">
                                <textarea id="message" cols="30" rows="3" class="textarea" placeholder="Bericht*"></textarea>
                                {!! ReCaptcha::htmlFormSnippet()  !!}
                                <div>
                                    <button class="btn" id="btn-submit">Verzenden</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="border-t border-gray-200 mb-7 lg:mb-8"></div>
                
                <footer class="flex flex-col justify-between space-y-1.5 text-gray-500 text-sm text-center sm:flex-row sm:space-y-0 sm:text-justify">
                    <p>Copyright © {{ date('Y') }} Legio Soft. All rights reserved.</p>                    
                </footer>
            </div>
        </section>
    </main>
 
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script type="text/javascript">
        var params = new Array();        
        params['submit_form_url'] = "{{ route('submit.form') }}";
        params['token'] = '{{ csrf_token() }}';
    </script>
</body>
</html>