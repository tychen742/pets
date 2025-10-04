#include <stdio.h>
#include <string.h>

enum Level
{
    LOW,
    MEDIUM,
    HIGH
};

int main()
{
    // enum Level myVar;
    enum Level myVar = MEDIUM;

    printf("%d\n", myVar);

    return 0;
}