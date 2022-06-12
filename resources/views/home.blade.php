<x-app-layout>


    <div class="py-16 bg-white">

        <section>
            <div class="bg-black text-white py-20">
                <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
                    <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                        <h1 class="text-3xl md:text-5xl p-2 text-violet-700 tracking-loose">VR Blog</h1>
                        <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Simulación : El infinito
                            atemporal
                        </h2>
                        <p class="text-sm md:text-base text-gray-50 mb-4">Explora tu simulación favorita...regístrate ahora para compartir y mostrar tu experiencia virtual.</p>
                        <a href="#"
                            class="bg-transparent hover:bg-violet-300 text-violet-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-violet-300 hover:border-transparent">
                            Comienza Aquí</a>
                    </div>
                    <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
                        <div class="h-48 flex flex-wrap content-center">
                            <div class="rotate-12 ">
                                <img class="hover:-rotate-12 mt-28 hidden xl:block" src="{{ asset('img/pic1hero.png') }}">
                            </div>
                            <div>
                                <img class="hover:scale-110 inline-block mt-24 md:mt-0 p-8 md:p-0"
                                    src="{{ asset('img/pic2hero.png') }}">
                            </div>
                            <div>
                                <img class="hover:translate-y-6 mt-28 inline-block" src="{{ asset('img/pic3hero.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-app-layout>