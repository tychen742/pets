#include <stdio.h>
    
int main()
{

    int num = 42;
    printf("%d\n", num);        // $d for integer
    printf("%f\n", 3.14);       // %f for float
    printf("%c\n", 'A');        // %c for char
    printf("%s\n", "Hello");    // %s for string
    printf("%%\n");             // %% for literal percent sign
    printf("%lu\n", sizeof(int)); // %lu for unsigned long
    printf("%d\n", (int)sizeof(int)); // cast to int for %d 
    printf("test \n"); // new line

    return 0;
}