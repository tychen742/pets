using System;
namespace SchoolLibrary
{
    public class ScoreUtility
    {

        public static IScored BestOfTwo(IScored Assignment1, IScored Assignment2)
        {
            var score1 = Assignment1.Score / Assignment1.MaximuScore;
            var score2 = Assignment2.Score / Assignment2.MaximuScore;

            if (score1 > score2)
            {
                return Assignment1;
            } else
            {
                return Assignment2;
            }
        }

        public ScoreUtility()
        {

        }
    }
}
