#include <iostream>

using namespace std;
int answer;
void fun()
{
    cout << endl;
    cout << "this is a function.\n\n";
}

int calc(int &x, int &y)
{

    int sum = x + y;
    return sum;
}

int main()
{

    fun();

    int int1 = 2;
    int int2 = 3;
    char optr = '+';

    // answer = calc(2, 100);
    // cout << "The answer is " << answer;

    answer = calc(int1, int2);
    cout << "The answer is " << answer;

    cout << endl;

    return 0;
}