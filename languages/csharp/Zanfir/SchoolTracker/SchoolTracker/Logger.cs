using System;
namespace SchoolTracker
{
    public class Logger
    {
        const string DefaultSystemName = "SchoolTracker";

        public static void Log(string msg, string system = DefaultSystemName, int priority = 1)
        {
            Console.WriteLine($"System: {system}, Priority: {priority}, Message: {msg}");
        }
        public Logger()
        {
        }
    }
}
