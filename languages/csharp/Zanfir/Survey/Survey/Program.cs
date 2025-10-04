using System;

namespace Survey
{

    class Data
    {
        public string Name;
        public int Age;
        public string Month;

        public void Display()
        {
            Console.WriteLine($"Hi {Name}, you are {Age} years old and born in {Month}. ");

            if (Month == "martch")
            {
                Console.WriteLine("You are an Aries.");
            }
            else if (Month == "april")
            {
                Console.WriteLine("You are a Gtaurus.");
            }
            else if (Month == "may")
            {
                Console.WriteLine("You are a Gemini.");
            }
        }

    }

    class Program
    {
        static public event Action Posted;

        static void Main(string[] args)
        {
            var stats = new Stats();
            stats.Start();

            var data = new Data();

            Console.Write("What is your name? ");
            data.Name = TryAnswer();

            Console.Write("Whwat is your age? ");
            data.Age = int.Parse(TryAnswer());

            Console.Write("What month were you born in? ");
            data.Month = TryAnswer();

            if (Posted != null) Posted();

            data.Display();

        }

        static string TryAnswer()
        {
            var answer = Console.ReadLine();
            while (answer == "")
            {
                Console.Write("You didn't type anything. Please try again: ");
                answer = Console.ReadLine();
            }
            return answer;
        }
    }
}
