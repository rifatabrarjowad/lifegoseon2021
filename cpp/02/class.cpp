#include <iostream>
#include <stdio.h>
#include <conio.h>
using namespace std;
class Student
{
public:
    int id;
    double cgpa;
};
int main()
{
    Student s1;
    s1.id = 1;
    s1.cgpa = 3.5;
    cout << "Student id : " << s1.id << endl;
    cout << "Student cgpa : " << s1.cgpa << endl;

    getch();
}
