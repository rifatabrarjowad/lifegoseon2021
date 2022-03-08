#include <iostream>
#include <conio.h>
using namespace std;
void GetNumber(int number[], int size)
{
    for (int i = 0; i < size; i++)
    {
        cout << "Array Index " << i << ": ";
        cout << number[i] << endl;
    }
}

int main()
{
    int num[5] = {1, 2, 3, 6, 5};
    GetNumber(num, 5);

    getch();
}
