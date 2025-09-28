#include <stdio.h>


int main(){
    int aInt = 42;
    float aFloat = 3.14;
    double aDouble = 3.141592653589793;
    char aChar = 'A';
    char aString[] = "Hello, World!";   
    int anArray[5] = {1, 2, 3, 4, 5};
    struct {
        int x;
        float y;
    } aStruct;
    aStruct.x = 10;
    aStruct.y = 20.5;               
    int *aPointer = &aInt;
    void *aVoidPointer = &aFloat;

    printf("Size of int: %lu bytes\n", sizeof(aInt));
    printf("Size of float: %lu bytes\n", sizeof(aFloat));
    printf("Size of double: %lu bytes\n", sizeof(aDouble));
    printf("Size of char: %lu bytes\n", sizeof(aChar));
    printf("Size of string: %lu bytes\n", sizeof(aString));
    printf("Size of array: %lu bytes\n", sizeof(anArray));          
    printf("Size of struct: %lu bytes\n", sizeof(aStruct));
    printf("Size of pointer: %lu bytes\n", sizeof(aPointer));
    printf("Size of void pointer: %lu bytes\n", sizeof(aVoidPointer));      
    return 0;
}