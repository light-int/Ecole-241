let nbr;

do {
	nbr = Number(prompt("saisissez un nombre"));
}
while(Number.isNaN(nbr))

console.log(`Table de multiplication ${nbr}\n___________________________\n`);

for (i = 1; i <= 10; i++) {
	console.log(`${nbr} x ${i} = ${nbr*i}`);
}