using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp2
{
    public class MethodAll
    {
        public static int AddNumber(int a, int b)
        {
            int sum = a + b;
            return sum;
        }
        public static int AddNumber(int a, int b, int c)
        {
            int sum = a + b - c;
            return sum;
        }
        public static int MaiNumber(int a, int b)
        {
            int sum = a - b;
            return sum;
        }
        public static int IntoNumber(int a, int b)
        {
            int sum = a * b;
            return sum;
        }

    }
}
