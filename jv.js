
 var productIndex = 1;
  
   function changeproductIndex(n)
   {
      alert("calling changeproductIndex()");
      //productIndex=n;
      //alert(productIndex);
   }
  
  
    function load() {
                     var mydata = JSON.parse(data);
               


                     var div = document.getElementById('products');

                     for(var i = 0;i < mydata.length; i++)
                     {
                          /* div.innerHTML = div.innerHTML + "<p class='inner' id="+i+">"+ mydata[i].name +"</p>" + "<br>"; */
                        
                        
                        
                        var iDiv = document.createElement('div');
                             iDiv.id = 'kerah';
                             iDiv.className = 'col-md-4';
                        
                            
                        
                        var img = document.createElement("img");
                            img.src = "product"+mydata[i].index+".jpg";
                            img.classList.add('center');
                        
                        var a = document.createElement("a");
                              a.href = "product.html"
                              //a.onclick= changeproductIndex(mydata[i].index)
                             iDiv.appendChild(a);
                             a.appendChild(img);
                             iDiv.innerHTML += "Model: ";
                             iDiv.innerHTML +=  mydata[i].name;
                             
                            
                             
                             document.getElementById('products').appendChild(iDiv);
                     }
                 }


function changeCurrentProduct()
{
    alert("muhahahha"); 
    print("lalalal");
}    

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}