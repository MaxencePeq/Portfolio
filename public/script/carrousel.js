const collections = {
    LebelOuvrage : [
        "img/LebelOuvrage/accueil.png",
        "img/LebelOuvrage/1.png",
        "img/LebelOuvrage/2.png",
        "img/LebelOuvrage/3.png"
    ],
    BuddySystem : [
        "img/buddysystem/accueil.png",
        "img/buddysystem/chat.png",
        "img/buddysystem/login.png",
        "img/buddysystem/etudiant.png",
        "img/buddysystem/profile.png",
        "img/buddysystem/famille.png"
    ],
    BakerySimulator : [
        "img/BakerySim-img/intro.png",
        "img/BakerySim-img/full.png",
        "img/BakerySim-img/debug.png"
    ],
    WebMusic : [
        "img/webmusic-img/index.png",
        "img/webmusic-img/album.png",
        "img/webmusic-img/album-track.png",
        "img/webmusic-img/song.png"
    ]
}

let collectionActuelle = [];
let position = 0;

function ouvrirCarrousel(nom){
    collectionActuelle = collections[nom];
    position = 0;
    document.getElementById('image').src = collectionActuelle[position];
    document.getElementById('carrousel').style.display = 'flex';
}

function fermer(){
    document.getElementById('carrousel').style.display = 'none';
}

function suivant(){
    position++;
    if (position >= collectionActuelle.length){
        position = 0;
    }
    document.getElementById('image').src = collectionActuelle[position];
}

function precedent(){
    position--;
    if (position < 0){
        position = collectionActuelle.length - 1;
    }
    document.getElementById('image').src = collectionActuelle[position];
}