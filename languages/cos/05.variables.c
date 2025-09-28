#include <stdio.h>

// Names can contain letters, digits and underscores
// Names must begin with a letter or an underscore (_)
// Names are case-sensitive (myVar and myvar are different variables)
// Names cannot contain whitespaces or special characters like !, #, %, etc.
// Reserved words (such as int) cannot be used as names

int main()
{
    // int
    // float
    // char

    // 1/3. Primitive Dat Types: int, char, float, double, void
    // 2/3. Derived Types: array, pointers, function
    // 3/3. User-Defined Types: array, pointers, function

    // 1/2. variable declaration and assign
    // type varName = value
    // int num = 55;
    double num = 55;

    // 2/2. variable declare then assign; no type needed.
    num = 6;
    num = 7.777; // allowed, but not recommended, as it may lose precision

    ////////// output variable
    char buffer[100];
    float pi = 3.1415926;
    // Format Specifiers
    printf("%f\n", pi);     // default 6 decimal places
    printf("%.f2\n", pi);   // incorrect, should be %.2f
    printf("%.2f\n", pi);   // now correct
    printf("%.f3\n", pi);   // incorrect, should be %.3f
    printf("%.f4\n", num);   // incorrect, should be %.4f
    printf("%.3f\n", pi);   // incorrect, should be %.3f
    printf("%.4f\n", pi);
    printf("%.5f\n", pi);
    sprintf(buffer, "%.2f in buffer!", pi); // format a string and store the result in a buffer (character array) instead of printing it to the screen.
    printf("%s\n", buffer); // print the content of buffer
    printf("test\n");
    return 0;
}