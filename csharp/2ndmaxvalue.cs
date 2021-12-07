using System;

// provides us various methods to use in an array
using System.Linq;

namespace ArrayMinMax
{
    class Program
    {
        static void Main(string[] args)
        {

            /*
                        string strNumbers = " 1, 3, 4, 9, 2";
                        ArrayList numbers = new ArrayList(strNumbers.Split(new char[] { ',' }));
                        numbers.RemoveAt(numbers.IndexOf(4));
                        foreach (var n in numbers)
                        {
                            Response.Write(n);
                        }
            ========================================================================================

                                    int[] numbers = { 51, 1, 3, 4, 98 };

                                    // Max() returns the largest number in array

                                    numbers.RemoveAt(numbers.IndexOf(4));
                                    Console.WriteLine("Largest Element: " + numbers.Max());

                                    Console.ReadLine();
                                    */





             int[] numbers = { 51, 98, 1, 3, 4, 98 };

            while (true)
            {
               

                int max1 = numbers.Max();
                var allNumber = numbers.ToList();
                var remove = allNumber.Remove(max1);
                
                var max2 = allNumber.Max();
                var number = allNumber;

                if (max1 == max2)
                { 
                    
                }
                else
                {
                    Console.WriteLine(max2);
                    break;
                }
            }

        
            //Console.WriteLine( max2);


        }
    }
}

