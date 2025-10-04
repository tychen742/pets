using System;


delegate double GetSum(double num1, double num2);

namespace Delegates
// delegates pass methods as arguments to other methods
{
    class Program
    {

        static void Main(string[] args)
        {
            // anonymous method, similar to lambda expression
            GetSum sum = delegate (double num1, double num2)
                {
                    return num1 + num2;
                };
            Console.WriteLine(sum(1, 100));


        }
    }
}
