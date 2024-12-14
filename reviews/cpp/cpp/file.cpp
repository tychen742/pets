#include <iostream>
#include <fstream>

using namespace std;

class AccountingClass
{
private:
    int salary;

public:
    string fname;
    string lname;
    void setSalary(int sal) // setter method
    {
        salary = sal;
    }
    float getSalary() // getter method
    {
        return salary;
    }
};

int main()
{

    AccountingClass account;
    account.setSalary(16002);
    account.fname = "TY";
    account.lname = "Chen";

    int sal = account.getSalary();

    ofstream fileName("file_salary.txt");
    fileName << account.fname << "\n";
    fileName << account.lname << "\n";
    fileName << sal << "\n";
    fileName.close();
}