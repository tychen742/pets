using System;
using System.Collections.Generic;
using System.Linq;

namespace Lambdas
{
    class Program
    {
        static void Main(string[] args)
        {
            Func<int, int, int> getSum = (x, y) => x + y;
            // this is different from Java lambda expression. this has a type for it. 
            Console.WriteLine(getSum(2, 199));

            List<int> numList = new List<int> { 5, 10, 15, 20, 25 };
            List<int> oddNum = numList.Where(n => n % 2 == 1).ToList();
            foreach (int num in oddNum) {
                Console.WriteLine(num);
            }
        }
    }
}
