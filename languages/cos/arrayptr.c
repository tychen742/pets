#include <stdio.h>

int main(){

	int somenumbers[5];
	int *ptr = somenumbers;
	int v =2;


	for (; ptr < &somenumbers[5]; ptr++ ) {
		*ptr = v;
		v = v * 2;
	}


	int i;
	for (i = 0; i < 5 ; i ++) {
		printf("%d \n", somenumbers[i]);
	}

}
