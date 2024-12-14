#include <iostream>
#include <string>
using namespace std;

int main()
{

    string first_name = "Firsname";
    string last_name = "Lastname";
    string full_name = first_name.append(last_name);
    int length_name = full_name.length();
    char first_letter = full_name[0];

    cout << "\n"
         << full_name << "\n";

    cout << "\n"
         << "The length of full_name is " << length_name << ".\n";

    cout << "\n"
            "the first letter of "
         << full_name << "is " << first_letter << ".\n";

    cout << "What is your first name? Input here: ";
    // cin >> first_name;
    getline(cin, first_name);
    cout << "What is your last name? Input here: ";
    // cin >> last_name;
    getline(cin, last_name);
    cout << "Your name is " << first_name << " " << last_name << ".\n";
    return 0;
}
