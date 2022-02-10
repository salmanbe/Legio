<!DOCTYPE html>
<html lang="{{ $locale }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex" />
        <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}"/>

        <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet">

        <title>Legio Soft – Keeping legionella bacteria under control</title>
    </head>
    <body>
        <main>
            <div class="bg-right-top bg-no-repeat bg-cover xl:bg-bottom" style="background-image: url('assets/img/background.jpg');">
                <div class="container px-5 pb-16 mx-auto sm:pb-16 lg:pb-24 xl:pb-32">
                    <header class="flex items-center justify-between pt-5">
                        <div>
                            <a href="{{ URL::to('/') }}"><img class="h-12" src="{{ asset('assets/img/logo.svg') }}" alt="Legio Soft"></a>
                        </div>
                        <!-- Top menu can be enabled later. Does not look nice with only 2 links -->
                        <!--<div class="hidden space-x-8 font-medium lg:block">
                            <a href="#0" class="transition-colors duration-300 hover:text-blue-600">Hoe het werkt</a>
                            <a href="#0" class="transition-colors duration-300 hover:text-blue-600">Contact</a>
                        </div>
                        -->
                        <div class="font-medium lg:block">
                            <div class="grid grid-flow-col grid-rows-3 gap-4">
                                <div class="row-span-2 row-end-3"><a title="Nederlands" href="{{ URL::to('/') }}"><img class="relative h-6" src="{{ asset('assets/img/nl.svg') }}"></a></div>
                                <div class="row-start-1 row-end-4"><a title="Français" href="{{ URL::to('/fr') }}"><img class="relative h-6" src="{{ asset('assets/img/fr.svg') }}"></a></div>
                            </div>
                        </div>
                    </header>

                    <div class="container mx-auto mt-10">

                        <div class="grid gap-4 xl:grid-cols-2 ">
                            <div class="relative space-y-2 lg:pt-10 md:pt-10">

                                <div class="space-y-8">
                                    <div class="space-y-4">
                                        <h1 class="text-3xl font-black sm:w-2/3 sm:text-4xl md:max-w-xl md:text-4xl">{{ trans('words.legionella control web application') }}</h1>
                                        <p class="max-w-sm text-lg text-gray-700 md:max-w-md md:text-xl">Keeping legionella bacteria under control.</p>
                                    </div>
                                </div>


                            </div>
                            <div class="relative space-y-2">


                                <div class="flex flex-col w-full max-w-md px-4 py-8 bg-white rounded-md shadow-md sm:px-6 md:px-8 lg:px-10 xl:float-right">

                                    <div class="relative h-px bg-gray-300">
                                        <div class="absolute top-0 left-0 flex justify-center w-full -mt-2">
                                            <span class="px-4 text-xs text-gray-500 uppercase bg-white">{{ trans('words.please login') }}</span>
                                        </div>
                                    </div>
                                    <div class="mt-10">
                                        <div class="flex flex-col mb-6">
                                            <div class="relative">
                                                <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
                                                    <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                    </svg>
                                                </div>

                                                <input id="email" type="email" name="email" class="login-input" placeholder="E-Mail" />
                                            </div>
                                        </div>
                                        <div class="flex flex-col mb-6">
                                            <div class="relative">
                                                <div class="absolute top-0 left-0 inline-flex items-center justify-center w-10 h-full text-gray-400">
                                                    <span>
                                                        <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                                        </svg>
                                                    </span>
                                                </div>

                                                <input id="password" type="password" name="password" class="login-input" placeholder="{{ trans('words.password') }}" />
                                            </div>
                                        </div>

                                        <div class="flex w-full">
                                            <button class="btn">{{ trans('words.login') }}</button>

                                        </div>
                                    </div>
                                    <div class="flex items-center mt-6">
                                        <a href="#" class="inline-flex items-center text-blue-500 hover:text-blue-700">
                                            <span class="ml-2 text-xs text-blue-200"><a id="btn-contact" href="#">{{ trans('words.contact support') }}</a></span>
                                        </a>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>


                </div>
            </div>

            <div class="border-t border-gray-200"></div>

            @include($locale)

            <div class="border-t border-gray-200"></div>

            <section class="pt-12 bg-gray-100 pb-7 lg:pb-8 lg:pt-16 xl:pt-28" id="contact-div">
                <div class="container px-5 mx-auto">
                    <div class="grid gap-6 lg:gap-10 xl:grid-cols-3 mb-7 lg:mb-14">
                        <div class="flex flex-col justify-between space-y-10 xl:space-y-0">
                            <div class="space-y-2 lg:space-y-4">
                                <h2 class="text-2xl font-black sm:w-2/3 sm:text-4xl md:max-w-xl md:text-3xl">{{ trans('words.contact us') }}</h2>
                                <p class="w-full text-gray-600 sm:w-1/2 xl:w-80 md:text-lg">Aut vel cumque cum ut minima tempore aliquid labore. Exercitationem consequatur saepe dolor sequi cum. Aperiam odio rerum sequi nobis sint.</p>
                                <span class="contact-opt">+32 477 8044 53</span>
                                <a href="mailto:info@legiosoft.be" class="contact-opt">info@legiosoft.be</a>
                                <a href="https://www.legiosoft.be" class="contact-opt">www.legiosoft.be</a>
                            </div>
                        </div>
                        <div class="xl:col-span-2">

                            <div class="w-full p-5 bg-white shadow rounded-xl">

                                <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded margin-16" id="errors-div" style="display: none" role="alert">
                                    <strong class="font-bold">{{ trans('words.error') }}!</strong>
                                    <span class="block sm:inline" id="errors"></span>
                                </div>

                                <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded margin-16" id="success-div" style="display: none" role="alert">
                                    <span class="block sm:inline" id="success"></span>
                                </div>

                                <div class="flex flex-col mt-2 space-y-5">
                                    <input type="text" id="name" class="input-box" placeholder="{{ trans('words.name') }}*" maxlength="255">
                                    <input type="email" id="email" class="input-box" placeholder="Email*" maxlength="255">
                                    <input type="text" id="phone" class="input-box" placeholder="{{ trans('words.phone') }}*" maxlength="20">
                                    <textarea id="message" cols="30" rows="3" class="textarea" placeholder="{{ trans('words.message') }}*" maxlength="1000"></textarea>
                                    {!! htmlFormSnippet()  !!}
                                    <div>
                                        <button class="btn" id="btn-submit">{{ trans('words.send') }}</button>
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

        <script type="text/javascript" src='https://www.google.com/recaptcha/api.js'></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script type="text/javascript">

        var params = new Array();
        params['submit_form_url'] = "{{ route('submit.form') }}";
        params['token'] = "{{ csrf_token() }}";
        params['locale'] = "{{ $locale }}";
        </script>
    </body>
</html>
