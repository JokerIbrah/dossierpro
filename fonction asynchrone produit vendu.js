async function avertirVenteProduit() {
    try {
        // Simuler une requête asynchrone vers le serveur pour avertir de la vente du produit
        const response = await fetch('https://#', {
            method: 'POST', 
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ produitVendu: 'nom_du_produit' }) // Envoyer des données au serveur si nécessaire
        });

        // Vérifier si la requête a réussi
        if (response.ok) {
            const result = await response.json();
            console.log(result.message); // Afficher un message de confirmation ou une réponse du serveur
        } else {
            // Gérer les cas d'erreur
            console.error('Erreur lors de la requête : ' + response.status);
        }
    } catch (error) {
        // Gérer les erreurs de la requête
        console.error('Erreur : ' + error.message);
    }
}
