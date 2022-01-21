namespace FibonacciNumber
{
    public class Program
    {

        public void disply()
        {

        }

        // driver code
        public static void Main(string[] args)
        {
             Console.Write(FindNthFib(5));
        }

        static int FindNthFib(int nth)
        {
            if (nth == 1)
            {
                return 0;
            }
            else if (nth == 2)
            {
                return 1;
            }

            return FindNthFib(nth - 2) +  FindNthFib(nth - 1);       
        }
    }
}