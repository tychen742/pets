#include <stdio.h>
#include <string.h>
int main()
{

    char hello[] = "hello world";
    printf("\n %s \n", hello);

    hello[0] = 'c';
    printf("\n %s \n", hello);

    for (int i = 0; i < sizeof(hello); i++)
    {
        printf(" %c \n", hello[i]);
    }
    printf("%lu \n", sizeof(hello));
    printf("%lu \n", strlen(hello));



    return 0;
}