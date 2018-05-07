
  
    function load() {
                     var mydata = JSON.parse(data);
               


                     var div = document.getElementById('products');

                     for(var i = 0;i < mydata.length; i++)
                     {
                          /* div.innerHTML = div.innerHTML + "<p class='inner' id="+i+">"+ mydata[i].name +"</p>" + "<br>"; */
                        
                        var iDiv = document.createElement('div');
                             iDiv.id = 'kerah';
                             iDiv.className = 'col-md-4';
                        
                             iDiv.innerHTML =  mydata[i].name + " " + mydata[i].index;
                           
                             
                             document.getElementById('products').appendChild(iDiv);
                     }
                 }


function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}