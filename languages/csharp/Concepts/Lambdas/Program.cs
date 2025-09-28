using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;

namespace LambdaBanasCS
{
    class Program
    {
        static void Main(string[] args)
        {
            // assign lambda to a function instance
            // see: 1. write temp attributes, 
            // then assign => the statement result to the instance
            Func<int, int, int> getSum = (x, y) => x + y;
            Console.WriteLine(getSum.Invoke(4, 7));

            Func<int, int, int> getMultiply = (x, y) => x * y;
            Console.WriteLine(getMultiply(9, 9));

            Lambd2();
            Processes();
        }


        static void Lambd2()
        {
            // lambda in Lists
            List<int> numList = new List<int>() { 5, 10, 15, 20, 25 };
            List<int> oddNums = numList.Where(n => n % 2 == 1).ToList();
            foreach (int num in oddNums)
            {
                Console.WriteLine(num);
            }
        }


        static void Processes()
        {
            var processList = Process.GetProcesses();
            var process = processList.Where(p => p.ProcessName == "dotnet").First();
            Console.WriteLine("Processing your feeling is: " + process.PriorityClass);
        }


        static void MultiplyOriginal(int a, int b)
        {
            var c = (a * b);
            Console.WriteLine(c);
        }
        // delegation + lambda
        static void Multiply()
        {
            Del del = (x, y) =>
                {
                    Console.WriteLine(x * y);
                };
            del(4, 6);
        }



    }
    delegate void Del(int x, int y);
}