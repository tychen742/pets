#include <stdio.h>

// Every C program has a primary function that must be
// named main.

int main()
{
    // printf for output
    printf("output");
    ////////// new line: \n //////////
    printf("output\n");
    printf("output\n\n\n\n");

    ////////// sprintf  //////////
    char buffer[100]; ///// buffer
    float pi = 3.1415926;
    sprintf(buffer, "pi = %.2f", pi); ///// buffer, %.2f,


    ////////// C Format Specifiers: %
    printf("pi: %f\n", pi);
    printf("pi: %f2\n", pi);
    
    
    return 0;
}