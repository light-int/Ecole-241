// Ecrire un programme qui demande de saisir un nombre tant que le nombre saisie n'est pas negatif
let nbr;
do {
	nbr = Number(prompt("saisissez un nombre"));
}
while(nbr>0)
console.log(`vous avez saisie ${nbr}, seul les nombres positifs sont authorises`);