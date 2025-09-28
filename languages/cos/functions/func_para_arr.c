#include <stdio.h>
#include <string.h>

void a_func(int para[5])
{
    // int length = sizeof(para) / sizeof(para[0]);
    // printf("%d", strlen(para));
    // printf("$d", sizeof(para) / sizeof(para[0]));

    // int sum = 0;
    // for (int i = 0; i <= length; i++)

//    for (int i = 0; i <= 5; i++)  	// ### will produce a 0 at position 6
    for (int i = 0; i < 5; i++)
    {
        printf("%d\n", para[i]);
    }
}

int main()
{
    int arr[] = {1, 2, 3, 4, 5};
    a_func(arr);

    // ##### testing length of array
    //    int length = sizeof(arr) / sizeof(arr[0]);
    //    printf("%d", length);
}
