// saisir 5 nombres puis afficher le plus grand
let nbr=[], const maxAB = (a, b) =>  a > b ? a : b, max = (collection) => collection.reduce(maxAB, collection[0]);
for (i=1;i<=5; i++) { 
    nbr[i] = Number(prompt(`Veuillez saisir le chiffre ${i}`));
}
console.log(`Le plus grand nombre est: ${max(nbr)}`);
