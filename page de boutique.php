<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Vente de véhicules d'occasion du garage V.Parrot">
    <title>Page de vente de véhicules</title>
    <link rel="stylesheet" href="bootstrap.min.css">
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
    <?php include 'index.php'; ?>
    
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
            <!-- Autres options de filtrage (prix, kilométrage, boite de vitesse) -->
            <!-- ... -->
        </aside>
        
        <!-- Liste des produits -->
        <section class="produit">
            <!-- Article 1 -->
            <article class="clio 137000km manuelle 4000euros">
                <!-- Image -->
                <img src="chemin/vers/clio2.png" alt="Clio 2">
                <!-- Informations sur le produit -->
                <h2>Clio 2 phase II</h2>
                <p>
                    <ul>
                        <li>Année : 2003</li>
                        <li>Portes : 5</li>
                        <!-- Autres caractéristiques -->
                    </ul>
                </p>
                <!-- Prix et bouton -->
                <p>Prix : 4 000 euros</p>
                <button>Ajouter au panier</button>
            </article>
            
            <!-- Autres articles -->
            <!-- ... -->
        </section>
    </main>
    
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>
</html>
