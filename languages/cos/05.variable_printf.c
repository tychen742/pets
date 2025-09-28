#include <stdio.h>

// declare variables of different types and print them using appropriate format specifiers
// %d for integer, %f for float, %c for char, %s for string

int main()
{
    /* code */

    int myAge = 35;             // Integer (whole number)
    float myHeight = 5.9;       // Floating point number
    char myBloodType = 'A';     // Character
    char myLastName[] = "Chen"; // String (array of characters)

    printf("Age: %d\n", myAge);
    printf("Height: %.1f\n", myHeight);
    printf("Blood Type: %c\n", myBloodType);
    printf("Last Name: %s\n", myLastName);
    
    // printf(myAge); // incorrect, missing format specifier

    return 0;
}
