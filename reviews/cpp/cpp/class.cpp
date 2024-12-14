#include <iostream>

using namespace std;

class ClassOne
{
public:
    ClassOne()
    {
        cout << "\nThis is the constructor of ClassOne.\n";
    }
    string fname;
    string lname;
    int phone;

    void methodHelloNoReturn()
    {
        cout << "hello world in a method";
    }

    int timesFive(int input)
    {
        return input * 5;
        cout << endl;
        cout << "\n";
    }
};

int main()
{

    ClassOne obj1;
    obj1.fname = "TY";
    obj1.lname = "Chen";
    obj1.phone = 12345;
    obj1.phone = 888123;

    cout << "\nclass object property:" << endl;
    cout << obj1.fname;
    cout << endl;
    cout << endl;
    
cout << "class method no returns:\n";
    obj1.methodHelloNoReturn();
    
    cout << endl;
    cout << "\nclass method returns:" << endl;
    cout << "\nWhen returned, no need to cout:\n ";
    cout << obj1.timesFive(5);
    cout << endl;

    return 0;
}