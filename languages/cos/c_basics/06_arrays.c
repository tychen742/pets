#include <stdio.h>

int main()
{

    int nums[] = {1, 2, 3, 4, 5}; // array variable

    // access elements
    printf("\nnums[0] == %d\n", nums[0]);

    // update elements
    nums[0] = 100;
    printf("\nnums[0] now == %d\n", nums[0]);

    // loop through
    int i;
    for (i = 0; i < (int)sizeof(nums) / sizeof(nums[0]); i++)
    {
        printf("%d ", nums[i]);
    }
    printf("\n");
}