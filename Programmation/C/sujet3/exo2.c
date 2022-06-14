#include <stdio.h>
// ALBANY Mael
// 27/10/2021
// Donner la valeur binaire dun nombre decimal

int main() {
	
	//initialisation variable
	int nombre;
	int poids;
	int tab[8];
	int i;
	int save;
	
	//def variable
	i = 0;
	poids = 128;
	printf("Quel nombre convertir ? ");
	scanf("%d", &nombre);
	save = nombre;
	
	if (nombre > 255){
		while (poids >= 1){
			tab[i] = 0;
			i = i + 1;
			poids = poids / 2;
		}
		printf("Impossible à coder sinon c'est : \n");
	}
	else {
		//boucle : calcul
		while (poids >= 1){
			
			//si nombre est superieur ou egal au poids
			if (nombre >= poids){
				nombre = nombre - poids;
				poids = poids / 2;
				tab[i] = 1;
				i = i + 1;
			}
			
			// sinon
			else {
				tab[i] = 0;
				i = i + 1;
				poids = poids / 2;
			}
		}
	}
	
	//affichage
	i = 0;
	printf("Le nombre %d s'écrit : ", save);
	while (i<8){
		printf("%d ", tab[i]);
		i = i + 1;
	}
	printf("\n");
	
	//fin
	return 0;
}
