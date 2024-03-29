var accountToggleValue = false;
		var galleriesToggleValue = false;
		var imagesToggleValue = false;

		var accountType = <?php echo $_SESSION['accounttype'] ;?>;
		var galleryCount = <?php echo $_SESSION['totalGalleries'];?>;
		var galleryCountMax = <?php echo $_SESSION['maxGalleries'] ;?>;
		<?php $_SESSION['gallerySize'] = 10 ;?>;

		$(document).ready(function(){


		  $('#accountDetails-trigger').click(function(){

			accountToggleValue = !accountToggleValue;
			if(accountToggleValue){
				document.getElementById("accountDetails-content").style.display = "block";
			}else{
				document.getElementById("accountDetails-content").style.display = "none";
			}

			})

		  $("#accountGalleries-trigger").click(function(){

			galleriesToggleValue = !galleriesToggleValue;
			if(galleriesToggleValue){
				document.getElementById("accountGalleries-content").style.display = "block";
			}else{
				document.getElementById("accountGalleries-content").style.display = "none";
			}

			})


		  $("#accountImages-trigger").click(function(){

			imagesToggleValue = !imagesToggleValue;
			if(imagesToggleValue){
				document.getElementById("accountImages-content").style.display = "block";
			}else{
				document.getElementById("accountImages-content").style.display = "none";
			}

			})

		  	$("#close-createGallery").click(function(){

                document.getElementById("newGalleryPopup").style.display = "none";
			})

			$("#close-upgradeAccount").click(function(){

			document.getElementById("upgradePopup").style.display = "none";
			})


		  $("#createGallery-trigger").click(function(){

            var canCreate = false;
            switch(accountType){

                case 0:
                    if(galleryCount == 0){
                        canCreate = true;
                    }else{
                        canCreate = false;
                    }
                break;
                case 1:
                    if(galleryCount < galleryCountMax){
                        canCreate = true;
                    }else{
                        canCreate = false;
                    }
                break;
                case 2:
                    canCreate = true;
                break;

            }

            if(canCreate){

                document.getElementById("newGalleryPopup").style.display = "block";
                document.getElementById("upgradePopup").style.display = "none";

            }else{ 
				document.getElementById("newGalleryPopup").style.display = "none";
                document.getElementById("upgradePopup").style.display = "block";
            }

			})
		});


		function updateBlueprint(s){


				document.getElementById("gallerySmall").style.display = "none";
				document.getElementById("galleryMedium").style.display = "none";
				document.getElementById("galleryLarge").style.display = "none";

				document.getElementById("blueprintImageSmall").style.display = "none";
				document.getElementById("blueprintImageMedium").style.display = "none";
				document.getElementById("blueprintImageLarge").style.display = "none";

				var value = s.value;

			switch(value){

				case "0":
				document.getElementById("gallerySmall").style.display = "block";
				document.getElementById("blueprintImageSmall").style.display = "block";

				break;
				case "1":
				if(accountType == 0){
					document.getElementById("gallerySmall").style.display = "block";
					document.getElementById("blueprintImageSmall").style.display = "block";
					document.getElementById("upgradePopup").style.display = "block";
					s.value = 0;
				}else{
					document.getElementById("galleryMedium").style.display = "block";
					document.getElementById("blueprintImageMedium").style.display = "block";
				}
				break;
				case "2":

				if(accountType != 2){
					document.getElementById("gallerySmall").style.display = "block";
					document.getElementById("blueprintImageSmall").style.display = "block";
					document.getElementById("upgradePopup").style.display = "block";
					s.value = 0;
				}else{

					document.getElementById("galleryLarge").style.display = "block";
					document.getElementById("blueprintImageLarge").style.display = "block";
				}
				break;
			}

		};