#include <stdio.h>

int main()
{

    char myChar = 'A'; // single character, use single quotes
    printf("Character: %c\n", myChar);

    // char can also be used to store small integers (typically 1 byte)
    char mySmallInt = 65; // ASCII value for 'A'
    printf("Small Integer as Char: %c\n", mySmallInt);
    printf("Small Integer as Int: %d\n", mySmallInt); // print as integer

    // char ARRAY!!! (string)
    char myString[] = "Hello, World!"; // use double quotes for strings
    printf("String: %s\n", myString);

    // Accessing individual characters in a string
    printf("First character of string: %c\n", myString[0]);
    printf("Second character of string: %c\n", myString[1]);

    // Modifying characters in a string
    myString[7] = 'C';
    printf("Modified String: %s\n", myString);

    return 0;

}