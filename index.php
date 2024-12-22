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
                        <a href="#home" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">Accueil</a>
                        <a href="#services" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">Services</a>
                        <a href="#about" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">À Propos</a>
                        <a href="#contact" class="block py-2 hover:text-opacity-80 transition-colors text-[#857D66]">Contact</a>
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
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">Bienvenue chez AvocatConnect</h1>
                    <p class="text-xl max-w-2xl mx-auto mb-8">
                        Votre partenaire juridique de confiance. Nous vous accompagnons avec expertise et professionnalisme dans tous vos besoins juridiques.
                    </p>
                    <a href="#services" class="inline-block px-8 py-3 rounded-lg shadow-xl transition-colors duration-300 bg-[#796644] text-[#1E1E18]">
                        Nos Services
                    </a>
                </div>
            </div>
        </section>
    </header>

    <!-- Services Section -->
    <section id="services" class="container mx-auto px-4 py-24">
        <h2 class="text-3xl font-bold text-center mb-16 text-[#796644]">Nos Services Juridiques</h2>
        <div class="grid md:grid-cols-3 gap-8">

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Droit des Affaires</h3>
                <p class="text-[#857D66] text-opacity-80">Accompagnement juridique complet pour les entreprises, conseils stratégiques et support dans vos projets commerciaux.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Droit Civil</h3>
                <p class="text-[#857D66] text-opacity-80">Résolution de litiges, conseils et représentation dans tous les domaines du droit civil.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Droit du Travail</h3>
                <p class="text-[#857D66] text-opacity-80">Assistance juridique complète en droit du travail et résolution de conflits.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Droit Pénal</h3>
                <p class="text-[#857D66] text-opacity-80">Représentation et défense en matière pénale, conseils en cas de procédure judiciaire.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Droit de la Famille</h3>
                <p class="text-[#857D66] text-opacity-80">Divorce, garde d'enfants, succession, et autres aspects du droit familial.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Propriété Intellectuelle</h3>
                <p class="text-[#857D66] text-opacity-80">Protection des marques, brevets, droits d'auteur, et autres actifs intellectuels.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Droit Administratif</h3>
                <p class="text-[#857D66] text-opacity-80">Conseils et assistance en matière de droit public et administratif.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Droit Commercial</h3>
                <p class="text-[#857D66] text-opacity-80">Assistance juridique pour les contrats commerciaux, création d'entreprise et autres problématiques commerciales.</p>
            </div>

            <div class="p-8 rounded-lg shadow-xl transition-all duration-300 group bg-[#32342F] bg-opacity-50 border border-[#312F24]">
                <h3 class="text-xl font-semibold mb-4 text-[#796644]">Médiation</h3>
                <p class="text-[#857D66] text-opacity-80">Solutions amiables et de médiation pour résoudre les conflits sans passer par la justice.</p>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="py-24 bg-[#32342F] bg-opacity-30">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-16 text-[#796644]">Qui Sommes-Nous ?</h2>
            <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-6 md:mb-0 md:mr-8">
                    <img src="/asset/team.jpg" alt="Notre équipe d'avocats" class="rounded-lg shadow-xl transition-colors duration-300 border-4 border-[#796644] opacity-60">
                </div>
                <div class="md:w-1/2">
                    <p class="mb-6 text-[#857D66]">
                        AvocatConnect est un cabinet d'avocats moderne et dynamique, fort d'une expertise juridique de pointe et d'un engagement total envers nos clients.
                    </p>
                    <p class="text-[#857D66]">
                        Notre équipe de professionnels passionnés met son expérience et sa créativité à votre service, pour des solutions juridiques sur mesure et innovantes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-4 py-24">
        <h2 class="text-3xl font-bold text-center mb-16 text-[#796644]">Contactez-Nous</h2>
        <div class="max-w-lg mx-auto p-8 rounded-lg shadow-xl bg-[#32342F] bg-opacity-50 border border-[#312F24]">
            <form>
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-[#796644]">Nom Complet</label>
                    <input type="text" id="name" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 bg-[#1E1E18] border border-[#312F24] text-[#857D66] focus:ring-[#796644]">
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-[#796644]">Email</label>
                    <input type="email" id="email" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 bg-[#1E1E18] border border-[#312F24] text-[#857D66] focus:ring-[#796644]">
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-[#796644]">Message</label>
                    <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 bg-[#1E1E18] border border-[#312F24] text-[#857D66] focus:ring-[#796644]"></textarea>
                </div>
                <button type="submit" class="w-full py-3 rounded-lg transition-colors duration-300 shadow-lg bg-[#796644] text-[#1E1E18]">
                    Envoyer
                </button>
            </form>
        </div>
    </section>

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