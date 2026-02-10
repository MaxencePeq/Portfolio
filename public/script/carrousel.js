const collections = {
    LebelOuvrage : {
        images: [
            "img/LebelOuvrage/accueil.png",
            "img/LebelOuvrage/1.png",
            "img/LebelOuvrage/2.png",
            "img/LebelOuvrage/3.png"
        ],
        lien: "https://lebelouvrage.bzh"
    },
    BuddySystem : {
        images: [
            "img/buddysystem/accueil.png",
            "img/buddysystem/chat.png",
            "img/buddysystem/login.png",
            "img/buddysystem/etudiant.png",
            "img/buddysystem/profile.png",
            "img/buddysystem/famille.png"
        ],
        lien: "https://buddysystem.calvin-nogueira.fr/"
    },
    BakerySimulator : {
        images: [
            "img/BakerySim-img/intro.png",
            "img/BakerySim-img/full.png",
            "img/BakerySim-img/debug.png"
        ],
        lien: "https://bakerysimulator.alwaysdata.net/BakerySimulator/public/index.php"
    },
    WebMusic : {
        images: [
            "img/webmusic-img/index.png",
            "img/webmusic-img/album.png",
            "img/webmusic-img/album-track.png",
            "img/webmusic-img/song.png"
        ],
        lien: null
    },
    WebForColorblind : {
        images: [
            "img/WebsiteForColorblind/1.png",
            "img/WebsiteForColorblind/2.png",
            "img/WebsiteForColorblind/3.png",
        ],
        lien: null
    }
}

let collectionActuelle = [];
let lienActuel = null;
let position = 0;

function ouvrirCarrousel(nom){
    collectionActuelle = collections[nom].images;
    lienActuel = collections[nom].lien;
    position = 0;

    const imageElement = document.getElementById('image');
    imageElement.src = collectionActuelle[position];

    if (lienActuel) {
        imageElement.style.cursor = 'pointer';
        imageElement.onclick = () => window.open(lienActuel, '_blank');
    } else {
        imageElement.style.cursor = 'default';
        imageElement.onclick = null;
    }
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