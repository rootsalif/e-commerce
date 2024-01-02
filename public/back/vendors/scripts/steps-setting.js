$(".tab-wizard").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> #title#',
	labels: {
		finish: "Engistrer"
	},
	onStepChanged: function (event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
	},
	onFinished: function (event, currentIndex) {
		$('#success-modal').modal('show');
	}
});

$(".tab-wizard2").steps({
	headerTag: "h5",
	bodyTag: "section",
	transitionEffect: "fade",
	titleTemplate: '<span class="step">#index#</span> <span class="info">#title#</span>',
	labels: {
		finish: "Engistrer",
		next: "Suivant",
		previous: "Precedent",
	},
	onStepChanged: function(event, currentIndex, priorIndex) {
		$('.steps .current').prevAll().addClass('disabled');
	},
	onFinished: function(event, currentIndex) {
		$('#success-modal-btn').trigger('click');
		
		// document.forms["myform"].submit();
		// HTMLFormElement.submit()
	}
});

function change()
{
	var doc = document.getElementById("select");
	var val = doc.options[doc.selectedIndex].value;
	var input = document.getElementById("inpuTxt");
	
	if(val=="autre")
	{
	input.style.display="block";
	}
	else
	{
	input.style.display="none";
	}
}

const triggerTabList = document.querySelectorAll('#myTab a')
triggerTabList.forEach(triggerEl => {
  const tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', event => {
    event.preventDefault()
    tabTrigger.show()
  })
})

const triggerEl = document.querySelector('#myTab a[href="#profile"]')
bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

const triggerFirstTabEl = document.querySelector('#myTab li:first-child a')
bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab



    $(document).ready(function () {
        $("#categorieSelect").change(function () {
            var categorieId = $(this).val();
            var sousCategorieSelect = $("#sousCategorieSelect");
            var autreSousCategorieInput = $("#autreSousCategorieInput");

            $.ajax({
                url: '/artisan/home/article/' + categorieId,
                type: 'GET',
                success: function (response) {
                    sousCategorieSelect.html(response);
                    sousCategorieSelect.show();
                    autreSousCategorieInput.hide();
                }
            });
        });

        $("#sousCategorieSelect").change(function () {
            var selectedValue = $(this).val();
            var autreSousCategorieInput = $("#autreSousCategorieInput");

            if (selectedValue === "autre") {
                autreSousCategorieInput.show();
            } else {
                autreSousCategorieInput.hide();
            }
        });
    });



// $('.categorie').on('click', function() {
//     var categoryId = $(this).data('category-id');
// 	categoryId.console();
//     $.ajax({
//         url: '/article/' + categoryId,
//         method: 'GET',
//         success: function(subcategories) {
//             $('.subcategories').empty();
//             subcategories.forEach(function(subcategorie) {
//                 var subcategoryElement = $('<div class="subcategorie"></div>');
//                 subcategoryElement.text(subcategorie.nom_s_categorie);
//                 $('.subcategories').append(subcategoryElement);
//             });
//         }
//     });
// });

// Supposons que vous ayez une liste déroulante pour les catégories et une div pour afficher les sous-catégories

// $('#categorySelect').on('change', function () {
//     var categoryId = $(this).val();
    
//     // Faites une requête AJAX pour obtenir les sous-catégories liées à la catégorie sélectionnée
//     $.ajax({
//         url: '/article/' + categoryId,
//         type: 'GET',
//         success: function (response) {
//             // Affichez les sous-catégories dans la div appropriée
//             $('#subcategoryContainer').html(response);
//         }
//     });
// });

