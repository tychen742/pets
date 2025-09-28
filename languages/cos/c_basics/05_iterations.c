#include <stdio.h>
#include <stdlib.h>
#include <time.h>

// loops: iternation
int main()
{
    // get a random number
    int lower = 5, upper = 10;
    srand(time(0)); // ##### current time as seed
    int rand_num = (rand() % (upper - lower + 1)) + lower;
    printf("\nrand num between 5 and 10: %d \n", rand_num);

    // ##### 1. while loop
    printf("\nwhile loop\n");
    int i = 0;
    while (i < rand_num) // while condition is true
    {
        printf("%i   ", i);
        i++;
    }
    printf("\n\n");

    // ##### 2. do while loop
    printf("do-while loop\n");
    int j = 0;
    do
    {
        printf("%d   ", j);
        j++;
    } while (j < rand_num);
    printf("\n\n");

    // ##### 3. for loop (the C-style for loop)
    printf("for loop\n");
    int k;
    for (k = 0; k < rand_num; k++) // ### 3 expressions
    { 
        printf("%d   ", k);
    }

    // ##### 10. nested for loop (ex. multiplication table)
    printf("\n\nnested for loop (%d x %d)\n", rand_num-1, rand_num-1);
    int m, n;
    for (m = 2; m < rand_num; m++) // ### 3 expressions
    {
        for (n = 2; n < rand_num; n++)
        {
            printf("%dx%d = %d \t", m, n, m * n);
        }
        printf("\n");
    }

    // break & continue
    
}