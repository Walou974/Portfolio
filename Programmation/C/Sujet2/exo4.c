#include <stdio.h>
// ALBANY Mael
// 13/10/2021
// Résoudre l'équation ax+b=0

int main() {
	//initialisation variable 
	float a;
	float b;
	float x;
	
	printf("a :");
	scanf("%f", &a);
	printf("b :");
	scanf("%f", &b);
	
	if ((a==0) && (b=!0)){
		x = -b/a;
		printf("x : %f", x);
		return 0;
		}
		
	if (b==0) {
		printf("x a une infinite de valeurs");
		}
	else {
		printf("x n'existe pas");
		}
	return 0;
	}
