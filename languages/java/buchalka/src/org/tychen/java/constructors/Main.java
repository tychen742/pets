package org.tychen.java.constructors;

public class Main {

    public static void main(String[] args) {

        Account bobsAccount = new Account();
        bobsAccount.setNumber(10000);
        bobsAccount.setBalance(0.0);
        bobsAccount.setCustomerName("Bob Smith");
        bobsAccount.setCustomerEmail("bobs@bobs.com");
        bobsAccount.setCustomerPhoneNumber("100-100-1000");
        // the above lines can be replaced with a constructor

        bobsAccount.deposit(300);
        bobsAccount.withdraw( 100);

        Account bobbysAccount = new Account(20000, 0, "Bobby Lee",
                "bobby@bobs.com", "123-123-12345");
        bobbysAccount.deposit(10);
        bobbysAccount.withdraw(50);

        Account timsAccoutn = new Account("Tim Simon",
                "tim@timsimon.com", "123-234-3456");
        System.out.println(timsAccoutn.getNumber() + timsAccoutn.getCustomerName());


        VipCustomer customer1 = new VipCustomer();
        System.out.println(customer1.getName());
        VipCustomer customer2 = new VipCustomer("Bob", 2500);
        System.out.println(customer2.getName());
        VipCustomer customer3 = new VipCustomer("Time", 10000.0 , "tim@vip.com");
        System.out.println(customer3.getEmailAddress());
    }


}
