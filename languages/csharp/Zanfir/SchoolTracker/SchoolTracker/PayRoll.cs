using System;
using System.Collections.Generic;

namespace SchoolTracker
{
    interface IPayee
    {
        void Pay() { }
    }

    class PayRoll
    {

        List<IPayee> payees = new List<IPayee>();

        public PayRoll()
        {
            payees.Add(new Teacher());
            payees.Add(new Teacher());
            payees.Add(new Principal());
            payees.Add(new Principal());

            Logger.Log("Payroll started", "Payroll");

        }

        public void PayAll()
        {
            foreach (var payee in payees)
            {
                payee.Pay();
            }

            Logger.Log("PayAll completed", "PayRoll", 2);

            //teacher1.Pay();
            //teacher2.Pay();
            //principal1.Pay();
            //principal2.Pay();
        }
    }
}
