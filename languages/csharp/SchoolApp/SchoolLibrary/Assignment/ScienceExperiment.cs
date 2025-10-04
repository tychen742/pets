using System;
namespace SchoolLibrary
{
    public class ScienceExperiment : IScored 
    {
        public string Hypothesis { get; set; }
        public string Materails { get; set; }
        public string Method { get; set; }
        public string Conclusion { get; set; }

        public float Score { get ; set; }
        public float MaximuScore { get; set ; }

        public ScienceExperiment()
        {
        }
    }
}
