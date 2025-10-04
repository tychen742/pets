#include <stdio.h>

int main()
{

    int myAge = 29;
    int* ptr = &myAge;  // the & reference operator creates the pointer vatiable
                        // that stores the memory address of the variable

    printf("\nMy age (some years ago) (var int myAge) is :  %d \n", myAge);
    printf("The memory address (%%p) of variable myAge:    %p \n", &myAge);
    printf("The value of the pointer (ptr):               %p\n", ptr);
    printf("Dereference myAge from the pointer (*ptr):    %d\n\n", *ptr); // *: the dereference operator

    return 0;
}
