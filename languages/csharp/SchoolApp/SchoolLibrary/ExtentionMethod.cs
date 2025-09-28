using System;
namespace SchoolLibrary
{
    public static class ExtentionMethod
    {

        public static int WordCount(this string str)
        {
            var wordCount = str.Split(new char[] { ' ', '.', '?', '!' }, StringSplitOptions.RemoveEmptyEntries).Length;
            return wordCount;
        }
    }
}