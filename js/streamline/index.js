// Get the image and insert it inside the modal - use its "alt" text as a caption
function imgClick(img) {
	var modal = document.getElementById("myModal");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
    modal.style.display = "block";
  	modalImg.src = img.src;
  	captionText.innerHTML = img.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}