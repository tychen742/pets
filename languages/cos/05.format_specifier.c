#include <stdio.h>

int main()
{
    printf("Hello, World!\n");
    return 0;
}

// ### to compile: 
// gcc -o 05.format_specifier 05.format_specifier.c
// ### to run:
// ./05.format_specifier
// Output: Hello, World!

// w3schools.com:
// The printf() function in C is a standard library function 
// used for printing formatted output to the console 
// (standard output). It is defined in 
// the <stdio.h> header file.

// ### \n
// \n is a special character in C that represents a newline.
// When included in a string, it causes the output to move to the next line.

// return 0;
// In C, the return statement is used to exit a function and 
// optionally return a value to the function's caller. 
// In the case of the main function, returning 0 typically indicates that 
// the program has executed successfully without any errors.        

// Format Specifiers in C
// Format specifiers are special characters used in functions like printf()
// to indicate the type of data being printed.
// They start with a % symbol followed by a character that represents the data type.
// Here are some common format specifiers in C:
// %d or %i - Integer (decimal)
// %c - Character
// %f - Floating-point number
// %s - String (array of characters)
// %x - Hexadecimal number
// %o - Octal number
// %u - Unsigned integer
// %% - A literal percent sign      
