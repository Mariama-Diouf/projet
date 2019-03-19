<script>
document.getElementById("inscription").addEventListener("submit",function(e){
e.preventDefault();
var erreur;
var prenom= documemt.getElementById("prenom");
var nom= documemt.getElementById("nom");
var mail= documemt.getElementById("mail");
var mail2= documemt.getElementById("mail2");
var mot= documemt.getElementById("mot");
if(!prenom.value){
   erreur="Veillez rensegner un prenom";
}
if(!nom.value){
   erreur="Veillez rensegner un nom";
}
if(!mail.value){
   erreur="Veillez rensegner un mail";
}
if(!mail2.value){
   erreur="Veillez rensegner un mail2";
}
if(!mot.value){
   erreur="Veillez rensegner un password";
}
if(erreur){
   e.preventDefault();
   document.getElementById("erreur").innerHTML=erreur;
return false;
}else{alert('Formulare envoyer');}

});
    </script>