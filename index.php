<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinca Plus</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <header>
        <div class="container">
            <a href="#">
                <img src="assets/img/logo-transparent.png" alt="Logo Quinca Plus">
            </a>
            <h1>QUINCA PLUS</h1>
        </div>
    </header>

    <nav>
        <a href="#" onclick="showSection('presentation')">Accueil</a>
        <a href="#" onclick="showSection('produits')">Produits</a>
        <a href="#" onclick="showSection('contact')">Nous contacter</a>
    </nav>

    <main>
        <section id="presentation" class="content-section">
            <h2>Présentation</h2>
            <p>QUINCA PLUS, c’est avant tout l’histoire d’une femme exceptionnelle : Joëlle Tholozan. En 1994, armée de
                courage et d’une détermination sans faille, elle se lance dans l’univers très masculin de la
                quincaillerie, sans gros moyens, mais avec une passion immense pour le métier...</p>
        </section>

        <section id="produits" class="content-section" style="display: none;">
            <h2>Nos catégories de produits</h2>
            <div class="grid-categories">
                <div class="category-card" onclick="showSousCategories('batiment')">🧱<br><span>Bâtiment</span></div>
                <div class="category-card">🚪<br><span>Ameublement</span></div>
                <div class="category-card">🧷<br><span>Fixations</span></div>
                <div class="category-card">🧪<br><span>Colles & Silicones</span></div>
                <div class="category-card">🎨<br><span>Peintures</span></div>
                <div class="category-card">🧰<br><span>Autres</span></div>
            </div>
            <div id="sous-categories" style="margin-top: 2rem;"></div>
        </section>

        <section id="contact" class="content-section" style="display: none;">
            <h2>Contact</h2>
            <p>
                Adresse : Zone industrielle Cocotte Canal, 97224 Ducos
                <a href="https://maps.app.goo.gl/WhZbq2rKDAXFHmoLA" target="_blank" style="margin-left: 6px;"
                    aria-label="Voir sur la carte">
                    <i class="fa-solid fa-map-pin" style="color: gold;"></i>
                </a>
            </p>
            <p>Email : <a href="mailto:contact.quincaplus@gmail.com">contact.quincaplus@gmail.com</a></p>
            <p>Téléphone : <a href="tel:+596596564026">0596 56 40 26</a></p>
            <p>
                <i class="fa-brands fa-whatsapp" style="color: green;"></i> WhatsApp :
                <a href="https://wa.me/596696303995" style="color: inherit; text-decoration: none;">0696 30 39 95</a>
            </p>
            <div style="margin-top: 1rem; display: flex; gap: 1rem; justify-content: center;">
                <a href="https://www.facebook.com/share/18nVESehEV/?mibextid=wwXIfr" target="_blank"
                    aria-label="Facebook">
                    <i class="fab fa-facebook fa-2x" style="color:#3b5998;"></i>
                </a>
                <a href="https://www.instagram.com/quinca_plus" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram fa-2x" style="color:#E1306C;"></i>
                </a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Quinca Plus – Tous droits réservés.</p>
        <div class="footer-links">
            <a href="#">Mentions légales</a> |
            <a href="#">CGV</a> |
            <a href="#">Politique de confidentialité</a> |
            <a href="#" onclick="showSection('contact')">Contact</a>
        </div>
    </footer>

    <script>
    function showSection(id) {
        const sections = document.querySelectorAll('.content-section');
        sections.forEach(section => section.style.display = 'none');
        document.getElementById(id).style.display = 'block';
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function showSousCategories(categorie) {
        const container = document.getElementById('sous-categories');
        container.innerHTML = '';

        if (categorie === 'batiment') {
            const contenu = `
                    <h3 style="color: #a60000; text-align: center;">Sous-catégories Bâtiment</h3>
                    <div class="subcat-item"><img src="assets/img/boulons-ecrous-rondelles.jpg" alt="Boulons, écrous, rondelles"><span>Boulons, écrous, rondelles</span></div>
                    <div class="subcat-item"><img src="assets/img/cheville-metallique.jpg" alt="Cheville métallique"><span>Cheville métallique</span></div>
                    <div class="subcat-item"><img src="assets/img/goujon-ancrage.jpg" alt="Goujon d’ancrage"><span>Goujon d’ancrage</span></div>
                    <div class="subcat-item"><img src="assets/img/accessoires-volet.jpg" alt="Accessoires volet"><span>Accessoires volet</span></div>
                    <div class="subcat-item"><img src="assets/img/rivet.jpg" alt="Rivet"><span>Rivet</span></div>
                    <div class="subcat-item"><img src="assets/img/tirefond.jpg" alt="Tirefond"><span>Tirefond</span></div>
                    <div class="subcat-item"><img src="assets/img/verrous.jpg" alt="Verrous"><span>Verrous</span></div>
                    <div class="subcat-item"><img src="assets/img/vis-a-bois.jpg" alt="Vis à bois"><span>Vis à bois</span></div>
                    <div class="subcat-item"><img src="assets/img/vis-autoforeuse.jpg" alt="Vis autoforeuse"><span>Vis autoforeuse</span></div>
                    <div class="subcat-item"><img src="assets/img/vis-beton.jpg" alt="Vis béton"><span>Vis béton</span></div>
                `;
            container.innerHTML = contenu;
            container.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }
    </script>

</body>

</html>