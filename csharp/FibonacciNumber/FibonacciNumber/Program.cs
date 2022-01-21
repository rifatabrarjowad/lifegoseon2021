namespace FibonacciNumber
{
    public class Program
    {


        // driver code
        public static void Main(string[] args)
        {
            Console.WriteLine("How much Fibonaci Number");
            int number = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("OK Here is output...");
            int n=number;
            int stNmber = 0;
            int ndNumber = 1;
            

            if (n <= 2)
            {
                Console.WriteLine(stNmber);
                Console.WriteLine(ndNumber);

            }
            else
            {
                Console.WriteLine(stNmber);
                Console.WriteLine(ndNumber);
                for (int i =1 ; i<=n-2; i++) {
                    
                    var temNumber = stNmber + ndNumber;
                    Console.WriteLine(temNumber);
                    stNmber = ndNumber;
                    ndNumber = temNumber;
                }
            }


            // Console.Write(Fib(n));
        }
    }
}