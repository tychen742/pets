using System;
using System.Collections.Generic;
using System.IO;
using NLog;

namespace EssentialTrainingApp
{
    class Program
    {
        public static Logger logger = LogManager.GetCurrentClassLogger();

        public static List<string> Words;

        static void Main(string[] args)
        {
            logger.Trace("The program started.");
            Words = new List<string>();
            Words.Add("Bread");
            Words.Add("Milk");
            Words.Add("Cheeze");

            CrazyMathProblem();
            ReadTextFile();
            Console.ReadLine();
        }

        private static void ReadTextFile()
        {
            try
            {
                using (var sr = new StreamReader("/Users/tychen/workspaces/csharp/EssentialTraining/EssentialTrainingApp/files/test.txt"))
                {
                    string contents = sr.ReadToEnd();
                    Console.WriteLine(contents);
                }

            }
            catch (System.IO.DirectoryNotFoundException ex)
            {
                Console.WriteLine("Could not find the directory: " + ex.Message);
                logger.Error("The directory was not found: " + ex.Message);
            }
            catch (System.IO.FileNotFoundException ex)
            {
                Console.WriteLine("Could not find the file: " + ex.Message);
                logger.Error("The filewas not found: " + ex.Message);
            }
            catch (Exception ex)
            {
                Console.WriteLine("An unknown error occered: " + ex.Message);
                logger.Error("Error: " + ex.Message);
            }
            finally
            {
                Console.WriteLine("The finally runs every time");
            }
        }

        private static int CrazyMathProblem()
        {
            int income = 1000;
            for (var i = 10; i > 0; i--)
            {
                income = income = (income / i);
            }

            return income;
        }
    }
}
