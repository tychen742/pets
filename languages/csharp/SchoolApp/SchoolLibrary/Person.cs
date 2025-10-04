using System;
using System.Text;

namespace SchoolLibrary
{
    // abstract classes are base classes cannot be instantiated; we only want student and teacher classes to be used.
    public abstract class Person
    {
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public string Email { get; set; }


        public abstract float ComputeGradeAverage(); // child classes must implement abstract methods

        // A virtual method (in abstract class) to be overriden, optionally; may contain logic
        public virtual string SendMessage(string message)
        {
            var sb = new StringBuilder();
            var timeStamp = string.Format("Message sent on {0:D} at {0:t}", DateTime.Now);
            sb.AppendLine(timeStamp);
            sb.AppendLine("");
            sb.AppendLine("Dear " + FirstName + ",");
            sb.AppendLine(message);

            return sb.ToString();
        }
    }
}