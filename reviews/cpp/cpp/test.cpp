#include <string>
#include <iostream>

using namespace std;

int main()
{
    int num = 100;

    double double_num = 1.5;
    char a_char = 'D';

    int x = 5;
    int y = 10;
    int sum = x + y;

    int int_a;

    string a_string = "a string";
    cout << "\n"
         << num << "\n"
         << double_num << "\n"
         << a_char << "\n"
         << sum << "\n"
         << x + y << "\n";
    //  << " \n";
    cout << "Please input a valueinteger x: ";
    cin >> int_a;
    cout << "Your number is: " << int_a << " \n";

    return 0;
}