#include <iostream>

using namespace std;

int x;
int y;

int main()
{
    cout << "\nThis program compares two integer numbers.\n";
    cout << "Please enter integer x: ";
    cin >> x;

    cout << "Please enter integer y: ";
    cin >> y;

    if (x < y)
    {
        cout << x << " is less than " << y;
    }
    else if (x > y)
    {
        cout << x << " is greator than " << y;
    }
    else
    {
        cout << x << " is equal to " << y;
    }
    cout << "\n\n";

    return 0;
}