package org.tychen.java.constructors;

public class Account {

    private int number = 0;
    private double balance = 0;
    private String customerName = "";
    private String customerEmailAddress = "";
    private String customerPhoneNumber = "";


    // constructor: from variable to getter/setter to constructor

    public Account() {
        this(99999, 0.0, "customerName",
                "customerEmailAddress", "customerPhoneNumber");
        System.out.println("Empty constructor called");
    }

    // the major constructor
    public Account(int number, double balance, String customerName,
                   String customerEmailAddress, String customerPhoneNumber) {
        System.out.println("Account constructor with parameters called.");
        this.number = number;
        this.balance = balance;
        this.customerName = customerName;
        this.customerEmailAddress = customerEmailAddress;
        this.customerPhoneNumber = customerPhoneNumber;
    }

    // call the major constructor
    public Account(String customerName, String customerEmailAddress, String customerPhoneNumber) {
        this(99999, 0.0, customerName, customerEmailAddress, customerPhoneNumber);
//        this.customerName = customerName;
//        this.customerEmailAddress = customerEmailAddress;
//        this.customerPhoneNumber = customerPhoneNumber;
    }


    public void deposit(double depositAmount) {
        if (depositAmount > 0) {
//            this.balance = this.balance + depositAmount;
            this.balance = balance + depositAmount;
            System.out.println(depositAmount + " dollar(s) deposited; " +
                    this.getCustomerName() + " has current balance: " + balance);

        } else {
            System.out.println("Deposit amount must be positive.");
        }
    }

    public void withdraw(double withdrawAmount) {
        if ((this.balance - withdrawAmount) < 0) {
            System.out.println("Insufficient fund.");
        } else {
            this.balance = this.balance - withdrawAmount;
            System.out.println(withdrawAmount + " dollar(s) withdrawn; " +
                    this.getCustomerName() + " has current balance: " + balance);
        }
    }

    public int getNumber() {
        return number;
    }

    public void setNumber(int number) {
        this.number = number;
    }

    public double getBalance() {
        return balance;
    }

    public void setBalance(double amount) {
        this.balance = amount;
    }

    public String getCustomerName() {
        return customerName;
    }

    public void setCustomerName(String name) {
        this.customerName = name;
    }

    public String getCustomerEmailAddress() {
        return customerEmailAddress;
    }

    public void setCustomerEmail(String email) {
        this.customerEmailAddress = email;
    }

    public String getCustomerPhoneNumber() {
        return customerPhoneNumber;
    }

    public void setCustomerPhoneNumber(String phone) {
        this.customerPhoneNumber = phone;
    }
}
