#include <stdio.h>

int main(){

	int num = 7;
	printf("num is %d\n", num );

	num = 14;
	printf("num is %d\n", num );

	int* aptr = &num;
	printf("aptr is %x\n", aptr );
	printf("num is %d\n", *aptr );

	*aptr = 21;
	printf("%s", "*aptr = 21 \n" );
	printf("num is %d and *aptr is %d\n", num, *aptr );
}
