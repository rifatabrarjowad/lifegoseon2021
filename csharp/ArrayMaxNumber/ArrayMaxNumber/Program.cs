
namespace ArrayMaxNumber
{
    public class Program
    {
       
        public static void Main(string[] args)
        {
            int[]  arr = { 7, 2, 3,10,9,20 };
            int max = arr[0];
            int min = arr[0];
            for (int i = 1; i < arr.Length; i++)
            {
                if (max < arr[i])
                {
                    max = arr[i];

                }
               
            }
            for (int i = 1;i < arr.Length; i++)
            {
                if (min > arr[i])
                {
                    min = arr[i];
                }
            }
            Console.WriteLine("Max Number of the array is =  " + max);

            Console.WriteLine("Min Number of the array is =  " + min);
        }
    }
}