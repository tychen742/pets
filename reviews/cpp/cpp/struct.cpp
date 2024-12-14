#include <iostream>

using namespace std;

struct Person
{
    string lastname;
    string firstname;
    int phone;
};

int main()
{

    Person p1;

    p1.firstname = "TY";
    p1.lastname = "Chen";
    p1.phone = 1234568888;

    cout << "\n";
    cout << p1.firstname << " " << p1.lastname << "'s phone number is " << p1.phone;
    cout << endl;
    cout << endl;

    return 0;
}