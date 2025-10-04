using System;
namespace Survey
{
    public class Stats
    {

        public void Start()
        {
            Program.Posted += HasPosted;
        }
        void HasPosted()
        {
            Console.WriteLine("Survey posted, run stats.");
        }
    }
}
