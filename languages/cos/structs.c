#include <stdio.h>
#include <string.h>

struct MyStructure
{
    int myNum;
    char myLetter;
};

int main()
{

    struct MyStructure s1;

    s1.myNum = 13;
    s1.myLetter = 'C';

    printf("My number: %d\n", s1.myNum);
    printf("My letter: %c\n", s1.myLetter);

    return 0;
}