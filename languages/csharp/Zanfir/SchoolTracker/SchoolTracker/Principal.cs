using System;
namespace SchoolTracker
{
    class Principal : Member, IPayee
    {
        public void Pay()
        {
            Console.WriteLine("Paying the principal...");
        }

        public Principal()
        {
        }
    }
}
