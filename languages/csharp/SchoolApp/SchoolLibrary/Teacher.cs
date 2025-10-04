using System;
namespace SchoolLibrary
{
    public class Teacher : Person
    {
        private string _subject;

        public string Subject { get { return _subject; } set => _subject = value; }

        public override float ComputeGradeAverage()
        {
            return 4.0f;
        }
    }
}
