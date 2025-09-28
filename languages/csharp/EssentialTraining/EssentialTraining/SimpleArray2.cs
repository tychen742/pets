using System;
namespace EssentialTraining
{
    public class SimpleArray2
    {

        public string[] GroceryList2;

        public SimpleArray2()
        {
            GroceryList2 = new string[4] { "Apple", "Banana", "Cantelope", "Durian" };
        }

        public override string ToString()
        {
            return $"There are + {GroceryList2} + items and they are {GroceryList2}";
        }


    }
}
