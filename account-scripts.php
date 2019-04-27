<script>


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
		document.getElementById("account-galliers-list").style.display = "none";

	}else{
		document.getElementById("accountGalleries-content").style.display = "none";
		document.getElementById("account-galliers-list").style.display = "none";

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


	$("#close-upload-image").click(function(){

	document.getElementById("newImagePopup").style.display = "none";
	})


	$("upload-image-trigger").click(function(){

	document.getElementById("newImagePopup").style.display = "block";
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

		document.getElementById("CreateGalleryContent").style.display = "block";
		document.getElementById("upgradePopup").style.display = "none";
		document.getElementById("account-galliers-list").style.display = "none";

		document.getElementById("createGallery-Step1").style.display = "block";
	}else{ 
		document.getElementById("CreateGalleryContent").style.display = "none";
		document.getElementById("upgradePopup").style.display = "block";
	}

	})


	$currentStep = 0;

	function nextStep(){
		$currentStep ++;

		document.getElementById("createGallery-Step1").style.display = "none";
		document.getElementById("createGallery-Step2").style.display = "none";
		document.getElementById("createGallery-Step3").style.display = "none";

		switch ($currentStep){
			case 1:
			document.getElementById("createGallery-Step1").style.display = "block";
			break;
			case 2:
			document.getElementById("createGallery-Step2").style.display = "block";
			break;
			case 3:
			document.getElementById("createGallery-Step3").style.display = "block";
			break;
		}
	}


	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();

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
		<?php $_SESSION['gallerySize'] = 10 ;?>;
		break;
		case "1":
		if(accountType == 0){
			document.getElementById("gallerySmall").style.display = "block";
			document.getElementById("blueprintImageSmall").style.display = "block";
			document.getElementById("upgradePopup").style.display = "block";
			<?php $_SESSION['gallerySize'] = 10 ;?>;
			s.value = 0;
		}else{
			document.getElementById("galleryMedium").style.display = "block";
			document.getElementById("blueprintImageMedium").style.display = "block";
			<?php $_SESSION['gallerySize'] = 20 ;?>;
		}
		break;
		case "2":

		if(accountType != 2){
			document.getElementById("gallerySmall").style.display = "block";
			document.getElementById("blueprintImageSmall").style.display = "block";
			document.getElementById("upgradePopup").style.display = "block";
			s.value = 0;
			<?php $_SESSION['gallerySize'] = 10 ;?>;
		}else{

			document.getElementById("galleryLarge").style.display = "block";
			document.getElementById("blueprintImageLarge").style.display = "block";
			<?php $_SESSION['gallerySize'] = 50 ;?>;
		}
		break;
	}

};

function openTab(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " active";


	if(cityName == "accountGalleries-content"){
	document.getElementById("CreateGalleryContent").style.display = "none";
	document.getElementById("account-galliers-list").style.display = "block";


	}
}

</script>