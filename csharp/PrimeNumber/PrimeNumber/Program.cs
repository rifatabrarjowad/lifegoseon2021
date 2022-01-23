namespace PrimeNumber
{
    public class Program
    {

        public void disply()
        {

        }

        // driver code
        public static void Main(string[] args)
        {
           
            Console.Write(FindNthFib(2147483647));
           
        }

        static int FindNthFib(int prime)
        {
            var stNumber = prime%2;
            var ndNumber = prime%3;
            var rdNumber = prime % 5;
            var thnumber = prime % 6;
            var fthnumber = prime % 7;
            if (prime <= 0)
            {

                Console.WriteLine("It's deffret");
            }
            else if (prime == 1)
            {
                Console.WriteLine("It's deffret");
            }
            else if ((prime == 2) || (prime == 3) || (prime ==5) || (prime == 7))
            {
                Console.WriteLine("It's prime number");
            }
            else if ((stNumber != 0) && (ndNumber != 0) & (rdNumber != 0) & (thnumber != 0) & (fthnumber != 0) )
            {
                Console.WriteLine("It's prime number");
            }
            else
            {
                Console.WriteLine("It's not a prime number");
            }
            return prime ;
        }
    }
}