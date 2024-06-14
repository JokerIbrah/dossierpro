<!DOCTYPE html>
<html lang="fr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="Vente de véhicules d'occasion du garage V.Parrot">
    <title>Page de vente de véhicules</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="module" src="fonction asynchrone produit vendu.js"></script>
    <style>
        /* Style des articles */
        article {
            text-align: center;
            display: inline; /* Affiche les éléments côte à côte */
        }
        button {
            text-align: center;
            display: flex;
            justify-content: center; /* Centrer horizontalement */
        }
    </style>
</head>
<body>
    <!-- Le logo du garage -->
    <header>
        <?php include 'logo V.Parrot.php'; ?> 
    </header>
    
    <!-- Le menu pour naviguer entre les pages -->
    <?php include 'menu.php'; ?>
    
    <main>
        <!-- Filtrage par catégorie -->
        <aside>
            <h2>Filtrer par catégorie</h2>
            <select id="categorie">
                <option value="tous">Tous</option>
                <option value="clio">Clio</option>
                <option value="scenic">Scenic</option>
                <option value="C3">C3</option>
            </select>
            <select id="prix">
                <option value="tous">Tous</option>
                <option value="moins de 10 000 euros">moins de 10 000 euros</option>
                <option value="plus de 10 000 euros">plus de 10 000 euros</option>
            </select>
            <select id="boite de vitesse">
                <option value="tous">Tous</option>
                <option value="manuelle">Manuelle</option>
                <option value="automatique">Automatique</option>
            </select>
        </aside>
        
        <!-- Liste des produits -->
        <section class="produit">
            <!-- Article 1 -->
            <article class="clio 137000km manuelle moins de 10 000 euros">
                <!-- Image -->
                <img src="clio2 .png" alt="Clio 2">
                <!-- Informations sur le produit -->
                <h2>Clio 2 phase II</h2>
                <p>
                    <ul>
                        <li>Année : 2003</li>
                        <li>Portes : 5</li>
                        <li>kilométrage: 137 000km </li>
                        <li>boite de vitesse: manuelle</li>
                    </ul>
                </p>
                <!-- Prix et bouton -->
                <p>Prix : 4 000 euros</p>
                <button>Ajouter au panier</button>
            </article>
            
            <!-- Autres articles -->
            <!-- ... -->
            <section class="produit">
            <!-- Article 2 -->
            <article class="scenic 140000km manuelle 8 000euros">
                <!-- Image -->
                <img src="scenic.jpg" alt="Clio 2">
                <!-- Informations sur le produit -->
                <h2>Renault Scenic 2</h2>
                <p>
                    <ul>
                        <li>Année : 2009</li>
                        <li>Portes : 5</li>
                        <li>Boite de vitesse: manuelle</li>
                        <li>kilometrage: 140 000</li>
                    </ul>
                </p>
                <!-- Prix et bouton -->
                <p>Prix : 8 000 euros</p>
                <button>Ajouter au panier</button>
            </article>
            <article class="C3 puretect 200 000km automatique plus de 10 000euros">
                <!-- Image -->
                <img src="Citroën_C3_PureTech_110_C-Series_(III,_Facelift)_–_f_16012021.jpg" alt="Clio 2">
                <!-- Informations sur le produit -->
                <h2>C3 puretech</h2>
                <p>
                    <ul>
                        <li>Année : 2021</li>
                        <li>Portes : 5</li>
                        <li>Boite de vitesse: automatique</li>
                        <li>kilometrage: 200 000</li>
                    </ul>
                </p>
                <!-- Prix et bouton -->
                <p>Prix : 12 000 euros</p>
        </section>
    </main>
    
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>
</html>
