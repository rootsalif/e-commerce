// const form= document.getElementsByClassName('my-awesome-dropzone');
// const nom_article=document.getElementById('nom_article');

// form.addEventListener('submit', e=> {
//     e.preventDefault();
    
//     validateInputs();
// });
// const setError= (element, message)=>{
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText= message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success');
// };
// const setSuccess= element => {
//     const inputControl= element.parentElement;
//     const errorDisplay= inputControl.querySelector('.error');

//     errorDisplay.innerText='';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };
// const validateInputs= ()=> {
//     const nomvalue= nom_article.value.trim();
// }
// if(nomvalue=== ''){
//     setError(nom_article, 'Nom de L\'article est requis');
// } else{
//     setSuccess(nom_article);
// }


// // Sélection du formulaire
// const form = document.getElementById('my-awesome-dropzone');

// // Écouteur d'événement pour la soumission du formulaire


// // Récupération des éléments pour afficher les erreurs
// const errorNomArticle = document.getElementById('error-nom-article');
// const nomArticle = document.getElementById('nom_article');
// // Récupérez les éléments pour chaque champ requis et leurs messages d'erreur.

// // Fonction de validation pour le nom de l'article
// function validateNomArticle() {
//     if (nomArticle.value.trim() === '') {
//         errorNomArticle.textContent = 'Veuillez remplir le nom de l\'article.';
//     } else {
//         errorNomArticle.textContent = '';
//     }
// }

// // Événement blur (lorsque l'utilisateur quitte le champ)
// nomArticle.addEventListener('blur', validateNomArticle);

// // Autres champs et événements de validation à ajouter de la même manière pour chaque champ requis

// // Fonction de validation pour chaque champ requis
// // ...

// // Validation globale du formulaire
// form.addEventListener('submit', function(event) {
//     event.preventDefault();

//     // Valider chaque champ requis avant la soumission du formulaire
//     validateNomArticle();
//     // Valider les autres champs requis de la même manière

//     // Validation des champs d'image (au moins une image requise)
//     let imageFilled = false;
//     for (let i = 0; i < images.length; i++) {
//         if (images[i].value.trim() !== '') {
//             imageFilled = true;
//             break;
//         }
//     }

//     if (!imageFilled) {
//         alert('Veuillez sélectionner au moins une image.');
//         return;
//     }

//     form.submit();
// });



form.addEventListener('submit', function(event) {
    // Empêcher la soumission par défaut du formulaire
    event.preventDefault();

    // Récupération des champs du formulaire
    const nomArticle = document.getElementById('nom_article');
    const prixUnitaire = document.getElementsByName('prix_unitaire_article')[0];
    const quantiteArticle = document.getElementsByName('qte_article')[0];
    const remiseArticle = document.getElementsByName('remise_article')[0];
    const tvaArticle = document.getElementsByName('tva_article')[0];
    const etatArticle = document.getElementsByName('etat_id')[0];
    const familleArticle = document.getElementsByName('famille_id')[0];
    const categorieArticle = document.getElementsByName('categorie_id')[0];
    const modeleArticle = document.getElementsByName('modele_id')[0];
    const marqueArticle = document.getElementsByName('marque_id')[0];
    const descriptionArticle = document.getElementsByName('desc_article')[0];
    const couleurArticle = document.getElementsByName('couleur_id')[0];
    const images = document.getElementsByName('images[]');
    

    // Validation des champs requis
    if (
        nomArticle.value.trim() === '' ||
        prixUnitaire.value.trim() === '' ||
        quantiteArticle.value.trim() === '' ||
        remiseArticle.value.trim() === '' ||
        tvaArticle.value.trim() === '' ||
        etatArticle.value.trim() === '' ||
        familleArticle.value.trim() === '' ||
        categorieArticle.value.trim() === '' ||
        modeleArticle.value.trim() === '' ||
        marqueArticle.value.trim() === '' ||
        descriptionArticle.value.trim() === '' ||
        couleurArticle.value.trim() === ''
    ) {
        alert('Veuillez remplir tous les champs obligatoires.');
        return;
    }

    // Validation des champs d'image (au moins une image requise)
    let imageFilled = false;
    for (let i = 0; i < images.length; i++) {
        if (images[i].value.trim() !== '') {
            imageFilled = true;
            break;
        }
    }

    if (!imageFilled) {
        alert('Veuillez sélectionner au moins une image.');
        return;
    }

    // Si la validation réussit, soumettre le formulaire
    form.submit();
});

// ... (validation du formulaire)

// // Récupération des éléments pour afficher les erreurs
// const errorNomArticle = document.getElementById('error-nom-article');
// const errorPrixUnitaire = document.getElementById('error-prix-unitaire');
// // Récupérez les éléments pour chaque champ requis et leurs messages d'erreur.

// form.addEventListener('submit', function(event) {
//     event.preventDefault();

//     // Validation de chaque champ requis
//     if (nomArticle.value.trim() === '') {
//         errorNomArticle.textContent = 'Veuillez remplir le nom de l\'article.';
//         return;
//     } else {
//         errorNomArticle.textContent = '';
//     }
//     // Ajoutez des blocs similaires pour chaque champ requis pour effectuer la validation et afficher les messages d'erreur appropriés.
//     // ...

//     // Validation des champs d'image (au moins une image requise)
//     let imageFilled = false;
//     for (let i = 0; i < images.length; i++) {
//         if (images[i].value.trim() !== '') {
//             imageFilled = true;
//             break;
//         }
//     }

//     if (!imageFilled) {
//         alert('Veuillez sélectionner au moins une image.');
//         return;
//     }

//     form.submit();
// });
