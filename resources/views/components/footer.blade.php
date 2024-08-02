<footer class="bg-blue-950 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-bold">AquaForce</h3>
                <ul>
                    <li><a href="{{ route('about-us') }}" class="hover:underline">Sobre Nosotros</a></li>
                    <li><a href="#" class="hover:underline">Empleos</a></li>
                    <li><a href="#" class="hover:underline">Blog</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-bold">Soporte</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Centro de ayuda</a></li>
                    <li><a href="#" class="hover:underline">Terminos de Servicio</a></li>
                    <li><a href="#" class="hover:underline">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-xl font-bold">Contacto</h3>
                <ul>
                    <li><a href="#" class="hover:underline">Email</a></li>
                    <li><a href="#" class="hover:underline">Twitter</a></li>
                    <li><a href="#" class="hover:underline">Facebook</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4">
                <h3 class="text-xl font-bold">Registrate</h3>
                <p class="mb-4">Obtén las últimas noticias y ofertas de AquaForce.</p>
                <a href="{{ route('register') }}" class="button px-4 py-2 bg-blue-500 text-white w-full">
                    Registrarse
                </a>
            </div>
        </div>
        <div class="mt-8 text-center">
            <p>&copy; 2024 AquaForce. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>