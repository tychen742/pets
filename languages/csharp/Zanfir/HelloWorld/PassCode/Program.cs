using System;

namespace PassCode
{
    class Program
    {
        static void Main(string[] args)
        {

            //while (true) {
            //while (true)
            var code = "";
            while (code != "secret")
            {

                Console.Write("Please enter your passcode: ");
                code = Console.ReadLine();
                if (code != "secret" )
                Console.WriteLine("You are not authenticated.");

            }
            Console.WriteLine("You are authenticated.");

        }
    }
}
