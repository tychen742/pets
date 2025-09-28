using System;
namespace SchoolTracker
{

    class Teacher : Member, IPayee
    {
        public void Pay()
        {
            Console.WriteLine("Pying the teacher...");
        }
        public string Subject { get; set; }
    }
}
