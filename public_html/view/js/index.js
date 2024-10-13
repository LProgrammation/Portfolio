var btn_hp = document.getElementById('btn-hp');
var btn_burger = document.getElementById('nav-burger-id');
var nav = document.querySelector('nav');
var img_ls = document.querySelectorAll('img');
var btn_lsr = document.getElementById('btn-lsr');
const localStorageValue = localStorage.getItem("urlImg");

// Affichage de l'image enregistrer en localstorage sur toutes les images de la pages
if (localStorageValue != null) {

  img_ls.forEach(element => element.src = localStorageValue )
  
}


// Api fetcher EventListener
btn_hp.addEventListener('click', async (event) => {
  // stop default action of btn_hp (link redirection for the button)
  event.preventDefault();
  try {

    let response = await fetch(`https://api.waifu.pics/sfw/happy`)
    if (!response.ok) {
      throw new Error(`HTTP error ! status : ${response.status}`);
    }
    url = await response.json()
    localStorage.setItem("urlImg", url.url);
    PrintImage(url.url);
  } catch (error) {
    console.error('Erreur : ', error);

  }


})

// Function to create the content print api image
function ImageToPrint(source) {
  return "<html><head></head><body onload='step1()'>\n" +
    "<img src='" + source + "' style='' /></body></html>";
}

// Function to use the ImageToPrint function with content
function PrintImage(source) {
  var pwa = window.open();
  pwa.document.open();
  pwa.document.write(ImageToPrint(source));
  pwa.document.close();
}

// EventListener for burger opened
btn_burger.addEventListener('click', (event) => {
  event.preventDefault();
  nav.className = (nav.className === "burger-open") ? "" : "burger-open";


})

btn_lsr.addEventListener('click', (event) => {
  event.preventDefault();
  localStorage.clear();
  


})

// EventListener for localstorage

