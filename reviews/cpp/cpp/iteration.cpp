#include <iostream>

using namespace std;

int main()
{

    // while loop
    cout << "This is a while loop.\n";
    int i = 0;

    while (i < 5)
    {
        cout << i << "\n";
        i++;
    }

    // do-while loop
    cout << "\nThis is a do-while loop \n";
    int j = 0;
    do
    {
        cout << j << "\n";
        j = j + 1;
    } while (j < 5);

    //  for loop
    cout << "\nThis is a for loop \n";
    for (int i = 0; i < 5; i++)
    {
        cout << i << "\n";
    }

    //  nested for loop
    cout << "\nThis is a nested for loop \n";
    for (int i = 1; i < 10; i++)
    {
        // cout << i << "\n";
        for (int j = 1; j < 10; j++)
        {
            cout << i * j << "\t";
        }
        cout << "\n";
    }

    //   for-each loop
    cout << "\nThis is a foreach  loop \n";

    int nums[5] = {0, 1, 2, 3, 4};

    for (int i : nums) // still use "for", not "foreach", though
    {
        cout << i;
        cout << "\n";
    }

    // break and continue

    return 0;
}