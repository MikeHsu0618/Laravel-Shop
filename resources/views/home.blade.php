@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <!-- SERVICES -->

        <div class="section">
            <div class="section-title">OUR SERVICES</div>
            <div class="section-subtitle">We offer the best web development solutions.</div>
            <div class="flex justify-center flex-wrap p-10">
                <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                    <div class="flex items-center w-48 h-20 bg-orange-500">
                        <i class="fas fa-bezier-curve fa-3x mx-auto text-white"></i>
                    </div>
                    <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">UI Design</p>
                    <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
                    <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-orange-300 text-center cursor-pointer">
                        <i class="fas fa-chevron-right mt-2 text-orange-500"></i>
                    </div>
                </div>
                <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                    <div class="flex items-center w-48 h-20 bg-green-500">
                        <i class="fas fa-laptop-code fa-3x mx-auto text-white"></i>
                    </div>
                    <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">Web Dev</p>
                    <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
                    <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-green-300 text-center cursor-pointer">
                        <i class="fas fa-chevron-right mt-2 text-green-500"></i>
                    </div>
                </div>
                <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                    <div class="flex items-center w-48 h-20 bg-yellow-500">
                        <i class="fas fa-mobile-alt fa-3x mx-auto text-white"></i>
                    </div>
                    <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">Mobile Apps</p>
                    <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
                    <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-yellow-300 text-center cursor-pointer">
                        <i class="fas fa-chevron-right mt-2 text-yellow-500"></i>
                    </div>
                </div>
                <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                    <div class="flex items-center w-48 h-20 bg-teal-500">
                        <i class="fas fa-search-dollar fa-3x mx-auto text-white"></i>
                    </div>
                    <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">SEO</p>
                    <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
                    <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-teal-300 text-center cursor-pointer">
                        <i class="fas fa-chevron-right mt-2 text-teal-500"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- PROJECTS -->

        <div class="section">
            <div class="section-title">OUR PROJECTS</div>
            <div class="section-subtitle">Explore our rich and diverse portfolio.</div>

            <nav class="flex justify-center flex-wrap mt-4 mb-8 text-white">
                <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20">All</div>
                <div class="h-8 mr-2 px-3 py-1 bg-blue-800 text-center -skewx-20">UI Design</div>
                <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20">Web Dev</div>
                <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20">Mobile Apps</div>
                <div class="h-8 mr-2 px-3 py-1 bg-blue-400 hover:bg-blue-600 text-center cursor-pointer -skewx-20">SEO</div>
            </nav>

            <div class="flex justify-center flex-wrap">
                <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-orange-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
                    <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="design1.jpg" />
                </div>
                <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-orange-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
                    <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="design2.jpg" />
                </div>
                <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-orange-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
                    <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="design3.jpg" />
                </div>
                <div class="w-48 h-48 m-2 hover:-mt-1 border-4 border-orange-600 rounded-tl-2xl rounded-br-2xl cursor-pointer hover:shadow-lg">
                    <img class="w-full h-full object-cover rounded-tl-2xl rounded-br-2xl" src="design4.jpg" />
                </div>
            </div>
        </div>

        <!-- TEAM -->

        <div class="section ">
            <div class="section-title">OUR TEAM</div>
            <div class="section-subtitle">Meet our skilled professionals.</div>

            <div class="flex justify-center flex-wrap">
                <div class="card">
                    <img class="card-image" src="jessica.jpg" />
                    <p class="card-title">Jessica Thompson</p>
                    <p class="card-subtitle">UI Artisan</p>
                    <div class="card-icons">
                        <i class="fab fa-facebook-square fa-2x card-icon"></i>
                        <i class="fab fa-twitter-square fa-2x card-icon"></i>
                        <i class="fab fa-google-plus-square fa-2x card-icon"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="card-image" src="alex.jpg" />
                    <p class="card-title">Alexander Bell</p>
                    <p class="card-subtitle">Code Ninja</p>
                    <div class="card-icons">
                        <i class="fab fa-facebook-square fa-2x card-icon"></i>
                        <i class="fab fa-twitter-square fa-2x card-icon"></i>
                        <i class="fab fa-google-plus-square fa-2x card-icon"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="card-image" src="monica.jpg" />
                    <p class="card-title">Monica Mitchell</p>
                    <p class="card-subtitle">Mobile Maestro</p>
                    <div class="card-icons">
                        <i class="fab fa-facebook-square fa-2x card-icon"></i>
                        <i class="fab fa-twitter-square fa-2x card-icon"></i>
                        <i class="fab fa-google-plus-square fa-2x card-icon"></i>
                    </div>
                </div>
                <div class="card">
                    <img class="card-image" src="david.jpg" />
                    <p class="card-title">David Wilson</p>
                    <p class="card-subtitle">SEO Sorcerer</p>
                    <div class="card-icons">
                        <i class="fab fa-facebook-square fa-2x card-icon"></i>
                        <i class="fab fa-twitter-square fa-2x card-icon"></i>
                        <i class="fab fa-google-plus-square fa-2x card-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->

        <div class="w-full q">
            <div class="flex flex-wrap text-center text-white">

                <!-- ABOUT COLUMN -->

                <div class="w-full md:w-1/3 p-5 border-r border-blue-800 md:text-left">
                    <div class="my-6 ml-3 text-xl font-semibold">ABOUT US</div>
                    <p class
                       ="p-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa. Donec eget elementum sapien, tincidunt tempor nunc. Cras sodales id ipsum at convallis.</p>
                    <p class="p-3 text-gray-400">Morbi tristique massa nec massa auctor, at scelerisque felis consectetur. Morbi tempus et odio sit amet feugiat. Maecenas dignissim a turpis in molestie. Fusce tincidunt vestibulum iaculis.</p>
                </div>

                <!-- CONTACTS COLUMN -->

                <div class="w-full md:w-1/3 p-5 border-r border-blue-800">
                    <div class="my-6 text-xl font-semibold">CONTACT US</div>
                    <p class="mt-8 text-gray-400">
                        A108 Adam Street <br>
                        New York, NY 535022 <br>
                        United States <br>
                        <strong>Phone:</strong> +1 5589 55488 55 <br>
                        <strong>Email:</strong> info@webcraft.com
                    </p>
                    <div class="relative w-20 h-20 mx-auto my-12 bg-blue-300 rotate-45">
                        <div class="flex justify-center items-center absolute left-0 top-0 w-10 h-10 hover:-ml-1 hover:-mt-1 bg-blue-800 cursor-pointer">
                            <i class="fab fa-facebook-f fa-lg text-blue-500 -rotate-45"></i>
                        </div>
                        <div class="flex justify-center items-center absolute top-0 right-0 w-10 h-10 hover:-mt-1 hover:-mr-1 bg-blue-800 cursor-pointer">
                            <i class="fab fa-twitter fa-lg text-blue-500 -rotate-45"></i>
                        </div>
                        <div class="flex justify-center items-center absolute right-0 bottom-0 w-10 h-10 hover:-mr-1 hover:-mb-1 bg-blue-800 cursor-pointer">
                            <i class="fab fa-google-plus-g fa-lg text-blue-500 -rotate-45"></i>
                        </div>
                        <div class="flex justify-center items-center absolute bottom-0 left-0 w-10 h-10 hover:-mb-1 hover:-ml-1 bg-blue-800 cursor-pointer">
                            <i class="fab fa-linkedin-in fa-lg text-blue-500 -rotate-45"></i>
                        </div>
                    </div>
                </div>

                <!-- FORM COLUMN -->

                <div class="w-full md:w-1/3 p-5">
                    <div class="mt-6 text-xl font-semibold">SAY HELLO!</div>
                    <form class="w-4/5 mx-auto mt-2 px-6 pt-6 pb-4 rounded">
                        <div class="flex items-center mb-4">
                            <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Username">
                        </div>
                        <div class="flex items-center mb-4">
                            <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Email">
                        </div>
                        <div class="mb-6">
                            <textarea class="w-full h-24 px-2 pt-2 border-b-2 border-blue-800 bg-blue-900 text-white" placeholder="Message"></textarea>
                        </div>
                        <div class="flex justify-between items-center">
                            <button class="w-full py-2 px-4 rounded bg-orange-600 hover:bg-orange-700 text-white font-bold" type="button">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('inline_js')
    @parent
@endsection
