#include <stdio.h>

int main()
{
    int num1;
    int num2;
    printf("Enter an integer number: ");
    scanf("%d", &num1);
    printf("Enter another integer number: ");
    scanf("%d", &num2);

    if (num1 > num2)
    {
        printf("\n%d is greater than %d \n\n", num1, num2);
    }
    else if (num1 < num2)
    {
        printf("\n%d is less than %d \n\n", num1, num2);
    }
    else
    {
        printf("\n%d is equal to %d \n\n", num1, num2);
    }

    (num1 == num2) ? printf("\n%d is equal to %d \n\n", num1, num2) : (num1 < num2) ? printf("\n%d is less than %d \n\n", num1, num2) : printf("\n%d is greater than %d \n\n", num1, num2);

    return 0;
}