#include <stdio.h>
// ALBANY Mael
// 27/10/2021
// Prendre des valeurs au clavier et les ressortir sous
// la forme dun tableau inverse

int main() {
	
	//initialisation variable
	#define max 10
	int tab1[max];
	int cpt;
	int somme;
	
	//definition cpt
	cpt = 0;
	
	//1ere boucle : acquerir les variables
	while (cpt != max){
		printf("Quelle valeur ajouter au tableau : ");
		scanf("%d", &tab1[cpt]);
		cpt = cpt + 1;
	}
	
	//definition cpt
	cpt = max -1;
	
	//deuxieme boucle : inverse 
	while (cpt >= 0){
		printf("%d ", tab1[cpt]);
		cpt = cpt - 1;
	}
	printf("\n");
	
	//definition cpt et somme 
	cpt = 0;
	somme = 0;
	
	//somme
	while (cpt < max){
		somme = somme + tab1[cpt];
		cpt = cpt + 1;
	}
	printf("somme : %d \n", somme);
	
	//fin
	return 0;
}
