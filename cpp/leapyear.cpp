#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
    cout << "Enter a year: ";
    int year;
    cin >> year;
    if (year % 4 == 0 && year % 100 != 0 || year % 400 == 0)
    {
        cout << year << " is a leap year." << endl;
    }
    else
    {
        cout << year << " is not a leap year." << endl;
    }
    getch();
}
