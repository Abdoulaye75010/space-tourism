// tableau des membres d'équipage
const crewMembers = [
  {
    role: "Commandant",
    name: "Douglas Hurley",
    bio: "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaisseau Crew Dragon Demo-2.",
    image: "/images/crew/image-douglas-hurley.png"
  },
  {
    role: "Spécialiste de mission",
    name: "Mark Shuttleworth",
    bio: "Mark Richard Shuttleworth est un entrepreneur sud-africain, fondateur de Canonical, l’entreprise derrière Ubuntu, et le premier Africain à être allé dans l’espace.",
    image: "/images/crew/image-mark-shuttleworth.png"
  },
  {
    role: "Pilote",
    name: "Victor Glover",
    bio: "Victor Glover est pilote de la mission SpaceX Crew-1 vers la Station spatiale internationale. C’est un commandant de l’U.S. Navy et un ingénieur expérimenté.",
    image: "/images/crew/image-victor-glover.png"
  },
  {
    role: "Ingénieure de vol",
    name: "Anousheh Ansari",
    bio: "Anousheh Ansari est une ingénieure et entrepreneuse irano-américaine, première femme musulmane et première Iranienne à être allée dans l’espace.",
    image: "/images/crew/image-anousheh-ansari.png"
  }
];

// sélection des éléments
const role = document.querySelector(".crew-role");
const name = document.querySelector(".crew-name");
const bio = document.querySelector(".crew-bio");
const image = document.querySelector(".crew-image");
const dots = document.querySelectorAll(".dot");

// fonction pour afficher un membre d'équipage
function showCrewMember(index) {
  const member = crewMembers[index];
  role.textContent = member.role;
  name.textContent = member.name;
  bio.textContent = member.bio;
  image.src = member.image;

  // mise à jour des points actifs
  dots.forEach(dot => {
    dot.classList.remove("bg-white");
    dot.classList.add("bg-gray-500");
  });
  dots[index].classList.add("bg-white");
  dots[index].classList.remove("bg-gray-500");
}

// écouteurs sur les points
dots.forEach((dot, index) => {
  dot.addEventListener("click", () => showCrewMember(index));
});
