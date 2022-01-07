using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp2
{
    public class Detail : MethodAll
    {
        public string que = "Who Are You ?";
        public string fname = "Rifat";
        public string lname = "Abrar";
        public static void Are()
        {
            Detail whoAmI = new Detail();
            Console.WriteLine(whoAmI.que);
            Console.WriteLine(whoAmI.fname);


        }
    }
}
