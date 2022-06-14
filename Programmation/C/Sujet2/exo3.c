#include <stdio.h>
// ALBANY Mael
// 13/10/2021
// Affiche la circonference et la surface d'un cercle avec un menu d'entrée

int main() {
	//initialisation variable 
	float Pi;
	float R;
	float p;
	float s;
	int tmp;
	
	//def variable
	Pi = 3.14;
	printf("Rayon : ");
	scanf("%f", &R);
	printf("Circonference = 1 ou Surface = 0 : ");
	scanf("%d", &tmp);
	
	//calcul 
	if (tmp == 0) {
		s = Pi*(R*R);
		printf("La surface est de : %f \n",s);
	}
	else {
		p = Pi*R*2;
		printf("La circonference est de : %f \n",p);
	}
	
	//fin
	return 0;
	}
