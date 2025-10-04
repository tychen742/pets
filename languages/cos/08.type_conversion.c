#include <stdio.h>

int main()
{
    int a = 5;
    int b = 2;
    float c = (float)a / (float)b; // cast to float for accurate division
    float d = (float) a / b; // cast only a to float, b will be promoted to float automatically
    // int c = a / b; // cast to float for accurate division
    printf("Result: %.6f\n", c);   // Output: Result: 2.50 // print with 2 decimal places
    printf("Result: %f\n", c);   // Output: Result: 2.50 // print with 2 decimal places
    printf("Result: %.6f\n", d);   // Output: Result: 2.50 // print with 2 decimal places
}