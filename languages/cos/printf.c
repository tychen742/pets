#include <stdio.h>

int main()
{

    int intOne = 1111;
    float floatOne = 5.55;
    char charOne = 'D';
    printf("\n");

    // printf(intOne);
    printf("printing an int with format specifier %%d: %d \n", intOne);

    printf("printing an int with format sepcifier %%i: %i \n", intOne);
    
    printf("printing a float number with format sepcifier %%f WHAT???: %i \n", floatOne);
    printf("printing a float number with format sepcifier %%f: %f \n", floatOne);
    printf("printing a float number with format sepcifier %%.2f: %.2f \n", floatOne);

    printf("printing an char with format sepcifier %%c WHAT???: %c \n", intOne);
    printf("printing an char with format sepcifier %%c: %c \n", charOne);

    return 0;
}