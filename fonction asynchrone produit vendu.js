async function avertirVenteProduit() {
    try {
        // Simuler une requête asynchrone vers le serveur pour avertir de la vente du produit
        const reponseServeur = await fetch('https://v.parrot.fr/pagedeboutique', {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ produitVendu: 'nom_du_produit' }) // Envoyer des données au serveur si nécessaire
        });

        // Vérifier si la requête a réussi
        if (reponseServeur.ok) {
            const resultat = await reponseServeur.json();
            console.log(resultat.message); // Afficher un message de confirmation ou une réponse du serveur
        } else {
            // Gérer les cas d'erreur
            console.error('Erreur lors de la requête : ' + reponseServeur.status);
        }
    } catch (erreur) {
        // Gérer les erreurs de la requête
        console.error('Erreur : ' + erreur.message);
    }
}

