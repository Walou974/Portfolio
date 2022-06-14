#include <stdio.h>
// ALBANY Mael
// 13/10/2021
// declarer des variables et afficher la taille reservee

int main() {
	//declaration variable 
	int a;
	short int b;
	long int c;
	float d;
	char e;
	
	//declaration variable sizeof
	int i;
	int si;
	int li;
	int f;
	int ch;

	//calcul sizeof
	i = sizeof(a);
	si = sizeof(b);
	li = sizeof(c);
	f = sizeof(d);
	ch = sizeof(e);

	//affichage
	printf("La taille occupee par un int est %d bytes, \n", i);
	printf("La taille occupee par un short int est %d bytes, \n", si);
	printf("La taille occupee par un long int est %d bytes, \n", li);
	printf("La taille occupee par un float est %d bytes, \n", f);
	printf("La taille occupee par un char est %d bytes, \n", ch);	
	
	//fin
	return 0;
	
	}
