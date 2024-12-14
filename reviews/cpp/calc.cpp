#include <iostream>
#include <string>

using namespace std;
int main()
{

    int x, y;
    int sum;
    cout << '\n'
         << "Please input integer x: ";
    cin >> x;
    cout << "Please input integer y: ";
    cin >> y;

    sum = x + y;
    cout << '\n'
         << "The sum is: " << sum << '\n';

    string str1 = "The result is: ";
    
    cout << "Is x > y? " << str1 << ( x > y ) << "\n"; 
    
    }