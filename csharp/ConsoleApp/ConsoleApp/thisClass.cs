using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp
{
    internal class thisClass
    {
    }
    class Test
    {

        int num;
        Test(int num)
        {
            // this.num refers to the instance field
            this.num = num;
            Console.WriteLine("object of this: " + this);
        }

        static void Mainaa(string[] args)
        {

            Test t1 = new Test(4);
            Console.WriteLine("object of t1: " + t1);
            Console.ReadLine();
        }
    }
}
