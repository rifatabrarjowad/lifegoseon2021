//
// Created by RifatDev on 3/8/2022.
//
#include "WhoAreYou.h"
#include <iostream>
#include <stdio.h>
#include <conio.h>
using namespace std;
WhoAreYou::WhoAreYou(){
    cout <<"Enter your Name : ";
    char myName[200];
    gets(myName);
    cout << "Welcome " << myName;
};