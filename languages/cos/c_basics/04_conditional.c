#include <stdlib.h>
#include <time.h>
#include <stdio.h>

// ### <stdlib.h>
// ### if_else if_else-if if_else_if_else
// ### rand()
// switch; break; default

int getRandoms(int lower, int upper, int count)
{
    int num = (rand() % (upper - lower + 1)) + lower;
    return num;
}

int main()
{
    int lower = 1, upper = 10, count = 1;

    srand(time(0)); // ##### see the random number generator
    int rand_num1 = getRandoms(lower, upper, count);
    int rand_num2 = getRandoms(lower, upper, count);

    if (rand_num1 > rand_num2)
    {
        printf("%i is greator than %i \n", rand_num1, rand_num2);
    }
    else if (rand_num1 < rand_num2)
    {
        printf("%i is less than %i \n", rand_num1, rand_num2);
    }
    else
    {
        printf("%i is equal to %i \n", rand_num1, rand_num2);
    }

    // ##### Ternary Operator
    (rand_num1 > rand_num2) ? printf("Ternary: %i > %i \n", rand_num1, rand_num2) : printf("Ternary: %i <= %i \n", rand_num1, rand_num2);

    // ##### switch
    int low = 1;
    int up = 7;
    int num = (rand() % (up - low + 1)) + low;
    printf("num == %i \n", num);
    switch (num)
    {
    case 1:
        printf("Monday \n");
        break; // break out of the switch blook
    case 2:
        printf("Tuesday \n");
        break;
    case 3:
        printf("Wednesday \n");
        break;
    case 4:
        printf("Thursday \n");
        break;
    case 5:
        printf("Friday \n");
        break;
    case 6:
        printf("Saturday \n");
        break;
    case 7:
        printf("Sunday \n");
        break;
    default:
        printf("Weekday \n"); // last one; no break
    }
}
