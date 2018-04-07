



function getProducts()
{
	var cell = document.getElementById("productCell");
	cell.innerHTML = "kkkk";
	
    	var firebaseRef = firebase.database().ref();
	
            
            
	var object = firebaseRef.child("products").child("word");
	

	
	var object.on('value', function(datasnapshot){
		 cell.innerHTML = datasnapshot.val();
	});	
	
	
	
	window.alert("index.js calling -> getProducts()");
	
	
}	

function testing()
{
	window.alert("index.js calling -> testing()");
}	