#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
    cout << "Enter a number: ";
    int num;
    cin >> num;
    if (num % 2 == 0)
    {
        cout << "this number is even" << endl;
    }
    else
    {
        cout << "The number is odd." << endl;
    }
}
