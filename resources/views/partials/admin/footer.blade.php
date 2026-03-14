<!-- Footer -->
    <footer class="lg:ml-64 bg-white border-t border-gray-200 p-6 text-center">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 text-sm mb-3 md:mb-0">
                <i class="fas fa-copyright mr-1"></i> 2024 Sistema de Administración de Biblioteca.
            </p>
            <div class="flex space-x-4 text-sm">
                <a href="#" class="text-gray-500 hover:text-blue-600">Política de privacidad</a>
                <a href="#" class="text-gray-500 hover:text-blue-600">Términos de uso</a>
                <a href="#" class="text-gray-500 hover:text-blue-600">Soporte</a>
            </div>
        </div>
        <p class="text-xs text-gray-400 mt-2">
            Usuario: <span class="font-medium text-blue-600">
                @auth
                {{ auth()->user()->name }}</span>
                @endauth

        </p>
    </footer>

    <script>
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('-translate-x-full');
            sidebar.classList.toggle('translate-x-0');
            sidebar.classList.toggle('w-full');
            sidebar.classList.toggle('w-64');
        });
    </script>

</body>
</html>