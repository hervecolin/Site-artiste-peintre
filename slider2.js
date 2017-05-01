// Constructeur du Slider
// Arguments:
// - id: identifiant du conteneur
// - images: liste des urls des images
// - options:
//     - delay: attente (en ms) entre chaque image du diaporama
//     - width: largeur des images
//     - height: hauteur des images
function Slider(id, images, options) {
  // Options par défaut
  this.options = Object.assign({
    delay: 5500,
    width: 128,
    height: 128
  }, options);

  // Liste des images
  this.images = images;

  // Récupération du conteneur
  this.containerEl = document.getElementById(id);

  // Création de la balise <img>
  this.imgEl = document.createElement("img");
  this.containerEl.appendChild(this.imgEl);

  // Création du panneau de contrôle
  this.buttonsEl = document.createElement("div");
  this.containerEl.appendChild(this.buttonsEl);

  // Ajout des boutons
  this.addControlButton("play", this.start);
  this.addControlButton("pause", this.stop);
  this.addControlButton("backward", this.prev);
  this.addControlButton("forward", this.next);
  this.addControlButton("random", this.random);

  // Affichage de  la 1ère image
  this.show(0);
}

// Création et ajout d'un bouton de contrôle
Slider.prototype.addControlButton = function(icon, clickFn) {
  var btnEl = document.createElement("button");
  var iconEl = document.createElement("i");
  iconEl.className = "fa fa-" + icon;
  btnEl.appendChild(iconEl);

  // Ajout au conteneur de boutons
  this.containerEl.appendChild(btnEl);

  // Evénement "click"
  btnEl.addEventListener("click", clickFn.bind(this));
};

// Affiche l'image n°index
Slider.prototype.show = function(index) {
  if (typeof(this.images[index]) === 'string') {
    this.imgEl.src = this.images[index];
    this.currentIndex = index;
  }
};

// Affiche l'image suivante
Slider.prototype.next = function() {
  // Si on est à la fin, on revient à la 1ère image
  var isLast = this.currentIndex === this.images.length - 1;
  this.show(isLast ? 0 : this.currentIndex + 1);
};

// Affiche l'image précédente
Slider.prototype.prev = function() {
  // Si on est déjà à la 1ère image, on revient à la fin
  var isFirst = this.currentIndex === 0;
  this.show(isFirst ? this.images.length - 1 : this.currentIndex - 1);
};

// Démarre le diaporama : l'image change toutes les X millisecondes
Slider.prototype.start = function() {
  // On empêche les setInterval multiples
  this.stop();
  // On appelle next toutes les X millisecondes
  this.intervalId = setInterval(this.next.bind(this), this.options.delay);
};

// Arrête le diaporama
Slider.prototype.stop = function() {
  clearInterval(this.intervalId);
};

// Affiche une image au hasard
Slider.prototype.random = function() {
  var index;
  // On tire au sort une image
  // et on recommence tant que l'index trouvé est identique à l'index courant
  // afin d'éviter d'afficher la même image deux fois de suite
  do {
    index = Math.floor(Math.random() * this.images.length);
  } while (index === this.currentIndex);
  // On affiche l'image tirée au sort
  this.show(index);
}
