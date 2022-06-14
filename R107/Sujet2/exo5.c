#include <stdio.h>
// ALBANY Mael
// 13/10/2021
// determiner et calculer la prime 

int main() {
	//initialisation variable 
	int km;
	int acc;
	float prime;
	
	printf("Kilometrage ?");
	scanf("%d", &km);
	printf("Combien d'accidents ?");
	scanf("%d", &acc);
	
	if (km <= 80000){
		if (acc <=2){
			prime = 610 * 1.1;
		}
		else {
			prime = 610;
		}
	}
	else if (km <= 100000){
		if (acc <=2){
			prime = 990 * 1.1;
		}
		else {
			prime = 990;
		}
	}
	else {
		if (acc <2){
			prime = 1220 * 1.1;
		}
		else {
			prime = 1220;
		}
	}
	
	printf("votre prime est de %f euros \n", prime);
	return 0;
}
