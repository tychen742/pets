using System;
using System.Text;

namespace SchoolLibrary
{
    public class Student : Person
    {

        public enum GradeLevels { Freshman, Sophomore, Junior, Senior }
        public GradeLevels GradeLevel { get; set ; }

        public override float ComputeGradeAverage()
        {
            //TODO: compute student GPA
            return 0.0f;
        }

        public override string SendMessage(string message)
        {
            var original = base.SendMessage(message);
            var sb = new StringBuilder(original);
            sb.AppendLine("This message is private and confidential.");
            return sb.ToString();
        }
    }
}
