function openPage(){
   var x = document.getElementById("srch").value;
   let features = 'menubar=yes,location=yes,resizable=no,scrollbars=yes,status=no';
   
   if(x === "fe notes"||x === "Fe Notes"||x === "FE NOTES"||x === "FENOTE"||x === "fenotes"||x === "Fenotes"){
      window.open("fe.php", "_self");

   }

   if(x === "it notes"||x === "It Notes"||x === "IT NOTES"||x === "ITNOTE"||x === "itnotes"||x === "Itnotes"){
      window.open("it.php", "_self");

   }

   
}

let image = document.getElementById('image');
let images =['dev1.jfif','dev2.png','dev3.png','dev4.jfif','dev5.jpg','dev6.jpg','dev7.jpg']
setInterval(function(){
   let random = Math.floor(Math.random() *7);
   image.src =images[random];
},1000);
