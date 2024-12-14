#include <iostream>

using namespace std;

int main()
{

    string pet = "cat";

    cout << endl;
    // cout << pet;

    cout << "\"string pet = \'cat\';\" and we have a string variable pet. \n";
    cout << "With &pet we have the memory address of varialbe pet:" << &pet << endl;

    cout << "Now let's create the pointer by assigning the memory address:\n";
    cout << "string* pntr = &pet;\n";
    string *pPet = &pet;
    cout << "The pointer \"pPet\" has a value of: " << pPet;

    cout << endl;
    cout << endl;
    cout << "Now let's change the value of a pointer. (Huh?) \n";
    *pPet = "dog";

    cout << pet ;

    cout << endl;
    cout << endl;

    return 0;
}