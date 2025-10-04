#include <stdio.h>

int sum(int k);

int main()
{
    printf("\n%d\n", sum(10));
    return 0;
}

int sum(int k)
{
    if (k > 0)
    {
        return k + sum(k - 1);
    }
    else
    {
        return 0;
    }
}