using System;
namespace EssentialTraining
{
    public class SimpleArray
    {
        public string[] GroceryList;

        public SimpleArray()
        {
            GroceryList = new string[4] { "Apples", "Bread", "Cheeze", "Dates" };               
        }

        public override string ToString()
        {
            //return base.ToString();
            return "There are " + GroceryList.Length + " and thy are: " + GroceryList.ToString();
        }
    }
}
