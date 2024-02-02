<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>hire</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css'>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->

    <body class="relative bg-yellow-50 overflow-hidden max-h-screen">
        <header class="fixed right-0 top-0 left-60 bg-yellow-50 py-3 px-4 h-16">
            <div class="max-w-4xl mx-auto">
                <div class="flex items-center justify-between">
                    <div class="text-lg font-bold">Services</div>
                </div>
            </div>
        </header>

        <aside class="fixed inset-y-0 left-0 bg-white shadow-md max-h-screen w-60">
            <div class="flex flex-col justify-between h-full">
                <div class="flex-grow">
                    <div class="px-4 py-6 text-center border-b">
                        <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">Hire ME</span> App</h1>
                    </div>
                    <div class="p-4">
                        <ul class="space-y-1">
                            <li>
                                <a href="javascript:void(0)" class="flex items-center bg-yellow-200 rounded-xl font-bold text-sm text-yellow-900 py-3 px-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z" />
                                    </svg>Plan
                                </a>
                            </li>
                            <li>
                        </ul>
                    </div>
                </div>

            </div>
        </aside>

        <main class="ml-60 pt-16 max-h-screen overflow-auto">
            <div class="px-6 py-8">
                <div class="max-w-4xl mx-auto">
                    <div class="bg-white rounded-3xl p-8 mb-5">
                        <h1 class="text-3xl font-bold mb-10"> Create a service</h1>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-x-2">
                                <a href="{{route('service.create')}} " class="inline-flex items-center justify-center h-9 px-5 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">

                                    add
                                    >
                                </a>

                            </div>
                        </div>

                        <hr class="my-10">
                    </div>
                </div>
                <div class="flex">

                    @foreach($services as $service)
                    <div class="w-full md:w-1/2 xl:w-1/3 px-4">
                        <div class="bg-white rounded-lg overflow-hidden mb-10">
                            <img src="https://cdn.tailgrids.com/1.0/assets/images/cards/card-01/image-02.jpg" alt="image" class="w-full" />
                            <div class="p-8 sm:p-9 md:p-7 xl:p-9 text-center">
                                <h3>
                                    <a href="javascript:void(0)" class="
                        font-semibold
                        text-dark text-xl
                        sm:text-[22px]
                        md:text-xl
                        lg:text-[22px]
                        xl:text-xl
                        2xl:text-[22px]
                        mb-4
                        block
                        hover:text-primary
                        ">
                                        {{$service->titre}}
                                    </a>
                                </h3>
                                <p class="text-base text-body-color leading-relaxed mb-7 break-words">
                                    {{$service->description}}
                                </p>
                                <a href="javascript:void(0)" class="
                     inline-block
                     py-2
                     px-7
                     border border-[#E5E7EB]
                     rounded-full
                     text-base text-body-color
                     font-medium
                     hover:border-primary hover:bg-primary hover:text-white
                     transition
                     ">
                                    {{$service->category}}
                                </a>
                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>


        </main>
    </body>
</body>

</html>