using System;

namespace ForLoop
{
    class Program
    {
        static void Main(string[] args)
        {
            for (int k = 1; k <= 5; k++)
            {
                for (int i = 1; i <= 10; i++)
                {
                    Console.WriteLine(i);
                }
                for (int j = 9; j >= 1; j--)
                {
                    Console.WriteLine(j);
                }
                Console.WriteLine("count: " + k);
            }
        }
    }
}
