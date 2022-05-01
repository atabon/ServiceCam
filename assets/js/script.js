/*Ce block permet de changer le text de defilement ecrit par Atabong willy*/
const text=document.querySelector('.second-text');
const tChanger=()=>{
setTimeout(()=>{
    text.textContent="Devenir independant";
},0);
setTimeout(()=>{
    text.textContent="faciliter vos taches";
},2000);
setTimeout(()=>{
    text.textContent="publier et rechercher les services";
},4000);
setTimeout(()=>{
  text.textContent="retrouver les experts dans differents domaines";
},8000);
}
tChanger();
setInterval(tChanger, 12000);

/*Ce bloc permet d'ecrire du text comme ci l'on etait entrain de le frapper au clavier*/

var i = 0;
const txt = 'Au service du peuple camerounais & de l\'inovation'; 
let speed = 80;
const demo=document.getElementById("demo");
this.addEventListener('load',write,false)
function write() {
    if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(write, speed);
  }
}

/* ce bloc permet juste de d' avoir une barre de naviguation static une lors que l'utilisateur fait un scroll de 20px*/

window.onscroll = function() {myFunction()}
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

/* ce block permet de creer un loader pour le chargement de la page*/

var myVar;
function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
  document.getElementById("info").style.display = "none";
}