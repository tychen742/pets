package org.tychen.java.constructors;

public class VipCustomer {

    private String name;
    private double creditLimit;
    private String emailAddress;

    public VipCustomer() {
        this("defaultName", 9999, "defaultEmailAdress");
    }

    public VipCustomer(String name, double creditLimit) {
//        this.creditLimit = 1000;
//        this.name = name;
//        this.emailAddress = emailAddress;
        this (name, creditLimit, "unknow@email");
    }

    public VipCustomer(String name, double creditLimit, String emailAddress) {
        this.name = name;
        this.creditLimit = creditLimit;
        this.emailAddress = emailAddress;
    }

    public String getName() {
        return name;
    }

    public double getCreditLimit() {
        return creditLimit;
    }

    public String getEmailAddress() {
        return emailAddress;
    }
}
