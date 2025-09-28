using System;
namespace Util
{
    public static class ExtensionMethods
    {
        public static int toInt(this string value)
        {
            return int.Parse(value);
        }
    }
    class Console
    {
        public static string Ask(string question)
        {
            System.Console.Write(question + " ");
            var answer = System.Console.ReadLine();
            return answer;
        }

        public static string Ask(int question)
        {
            System.Console.Write(question + " ");
            var answer = System.Console.ReadLine();
            return answer;
        }

        public static int AskInt(string question)
        {
            try
            {
                System.Console.Write(question + " ");
                var answer = System.Console.ReadLine().toInt();
                return answer;
            }
            catch (Exception ex)
            {
                throw new FormatException("Input was NOT a number.");
            }
            
        }
    }

}
