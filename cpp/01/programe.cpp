#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
    char name[20];
    int number;
    cout << "Enter your name: ";
    cin >> name;
    cout << "Enter your age: ";
    cin >> number;
    cout << "Hello " << name << "! You are " << number << " years old." << endl;
    getch();
}
