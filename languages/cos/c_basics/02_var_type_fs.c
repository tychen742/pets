#include <stdio.h>

/*
w3schools:
Names can contain letters, digits and underscores
Names must begin with a letter or an underscore (_)
Names are case-sensitive (myVar and myvar are different variables)
Names cannot contain whitespaces or special characters like !, #, %, etc.
Reserved words (such as int) cannot be used as names
*/
int main()
{

    // assign value to variable name (identifier)
    int int_a = 100;
    // variable with type float
    float float_a = 1.2345;
    // variable with type double
    float double_a = 1.2345;
    // variable with type chracter "char"
    char char_a = 'B';
    // variable with type chracter "char" with ASCII
    char char_b = 66;
    // variable with type chracter "char"
    // string char_a = 'this is a string';

    // use %d for integers
    printf("##### format specifiers: %%d, %%f, %%lf, %%c, ##### \n" );
    printf("The value of int_a is (%%d):        %d \n", int_a);
    // use %f for floats
    printf("The value of float_a is (%%f):      %f \n", float_a);
    // use %lf for double
    printf("The value of double_a is (%%lf):    %lf \n", double_a);
    // decimal precision places
    printf("Set decimal precision to 3 (%%.3f): %.3f \n", float_a); // use %lf for double
    printf("Set decimal precision to 2 (%%.2f): %.2f \n", double_a);

    // use %c for characters
    printf("value of char_a = \'B\' is (%%c):     %c \n", char_a);
    printf("ASCII char_b = 66 is (%%c):         %c \n", char_b);

    // ########## size of type
    printf("\n");
    printf("##### The sizes of types in bite #####\n");
    int myInt;
    float myFloat;
    double myDouble;
    char myChar;

    printf("The size of an int is:      %lu bites\n", sizeof(myInt));
    printf("The size of a float is:     %lu bites\n", sizeof(myFloat));
    printf("The size of a double is:    %lu bites\n", sizeof(myDouble));
    printf("The size of a character is: %lu bites\n", sizeof(myChar));

    printf("\n");
    printf("##### Type conversion: automatic #####\n");
    float float_b = 100;
    printf("float flat_b = 100; float_b is: %f\n", float_b);
    int int_b = 3.14;
    printf("int int_b = 3.14; int_b is:     %i\n\n", int_b);

    printf("##### Type conversion: manual #####\n");
    float div_a = 5 / 2;
    printf("float div_a = 5/2; div_a is:    %f\n", div_a);
    float div_b = (float)5 / 2;
    printf("(float) div_b = 5/2; div_b is:  %f\n\n", div_b);

    printf("##### Constants #####\n");
    const float const_PI = 3.141592;
    printf("Constant PI has been declared: %d\n", const_PI);

    return 0;
}