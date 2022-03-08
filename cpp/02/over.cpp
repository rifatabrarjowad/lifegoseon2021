#include <iostream>
#include <conio.h>
using namespace std;
void sumNumber(int a, int b)
{
    int sum = a + b;
    cout << "Sum of two number is: " << sum << endl;
}
void sumNumber(int a, int b, int c)
{
    int sum = a + b + c;
    cout << "Sum of three number is: " << sum << endl;
}

int main()
{
    sumNumber(10, 20);
    sumNumber(10, 20, 30);

    getch();
}
