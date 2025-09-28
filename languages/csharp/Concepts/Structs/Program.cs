using System;

namespace Structs {
    struct Customers {
        private string name;
        private double balance;
        private int id;
        public void createCust (string n, double b, int i) {
            name = n;
            balance = b;
            id = i;
        }

        public void showCust () {
            Console.WriteLine ("Name: " + name);
            Console.WriteLine ("Balance: " + balance);
            Console.WriteLine ("ID: " + id);
        }

    }
    class Program {
        static void Main (string[] args) {

            Customers dan = new Customers (); 
            dan.createCust("Daniel Hunter", 200, 007);
            dan.showCust();

        }
    }
}