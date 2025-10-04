#include <stdio.h>

// ##### function declarations#### #
void hello();
int add(int, int);


// ##### call functions from inside the main() function
int main()
{
    // calling hello()
    hello("TY", 35);
    hello("Chen", 35);
    // hello();
    // hello();

    // calling add()
    int result_add = add(1, 1000);	// save the returned value to a variable
    printf("\nThe result is: %i \n", result_add);
    printf("The result is: %i \n", add(1, 1000));	// function call inside another fuction. 
    return 0;
}


// ##### function hello()
void hello(char name[], int age)	// void means no return values for this function
{
    printf("Hello, %s, you are %i years old.\n", name, age);
}

// ##### function add()
int add(int num1, int num2)		// int means the function returns an int value
{
    return num1 + num2;
}
