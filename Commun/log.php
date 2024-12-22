<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AvocatConnect - Cabinet d'Avocats</title>
</head>

<body class="bg-[#1E1E18]">
    <header class="relative">
        <!-- Navigation -->
        <nav class="fixed top-0 left-0 w-full z-50 bg-[#32342F] bg-opacity-95">
            <div class="container mx-auto px-4 py-3">
                <div class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="/asset/brand_logo.jpg" alt="Logo AvocatConnect" class="w-20 h-10 object-contain rounded-full border-2 border-[#796644]">
                        <span class="ml-3 text-xl font-bold text-[#857D66]">AvocatConnect</span>
                    </div>

                    <!-- Mobile Menu Toggle -->
                    <button id="mobile-menu-toggle" class="focus:outline-none text-[#857D66]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="hidden absolute right-0 w-64 shadow-2xl mt-2 bg-[#32342F]">
                    <div class="px-4 pt-2 pb-4 space-y-2">
                        <a href="/index.php#home" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">Accueil</a>
                        <a href="/index.php#services" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">Services</a>
                        <a href="/index.php#about" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">À Propos</a>
                        <a href="/index.php#contact" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">Contact</a>
                        <div class="flex flex-col space-y-2 pt-4">
                            <a href="/Commun/log.php" class="text-center py-2 rounded-lg transition-colors duration-300 bg-[#796644] text-[#1E1E18]">Connexion</a>
                            <a href="/Commun/sing.php" class="text-center py-2 rounded-lg transition-colors duration-300 bg-[#857D66] text-[#1E1E18]">S'inscrire</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="home" class="relative">
            <div class="w-full h-screen overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b z-10 from-[#1E1E18] to-[#1E1E18] opacity-80"></div>
                <img src="/asset/hero_image.jpg" alt="Image de cabinet d'avocats" class="w-full h-full object-cover">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center z-20 text-[#857D66]">
                    <h2 class="text-3xl font-bold text-center mb-16 text-[#796644]">Se Connecter</h2>
                    <div class="max-w-lg mx-auto p-8 rounded-lg shadow-xl bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                        <form method="POST">
                            <!-- Champ Email -->
                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-[#796644]">Adresse Email</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#796644] bg-[#1E1E18] border border-[#312F24] text-[#857D66]" required>
                            </div>

                            <!-- Champ Mot de Passe -->
                            <div class="mb-6">
                                <label for="password" class="block mb-2 text-[#796644]">Mot de Passe</label>
                                <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#796644] bg-[#1E1E18] border border-[#312F24] text-[#857D66]" required>
                            </div>

                            <!-- Bouton Connexion -->
                            <button type="submit" class="w-full py-3 rounded-lg transition-colors duration-300 shadow-lg bg-[#796644] text-[#1E1E18] hover:bg-[#6f5e46]">
                                Se Connecter
                            </button>
                        </form>

                        <!-- Lien Inscription si l'utilisateur n'a pas de compte -->
                        <div class="text-center mt-4">
                            <p class="text-[#857D66]">Pas de compte ? <a href="/Commun/sing.php" class="text-[#796644] hover:underline">S'inscrire</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </header>

    <!-- Footer -->
    <footer class="py-8 bg-[#32342F]">
        <div class="container mx-auto px-4 text-center text-[#857D66]">
            <p>&copy; 2024 AvocatConnect. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const toggleButton = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggleButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>