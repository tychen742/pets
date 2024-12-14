package org.tychen.java.listandarraylist;

public class Contact {

    // name
    private String name ;
    private String phoneNumber;
    // phone number


    public Contact(String name, String phoneNumber) {
        this.name = name;
        this.phoneNumber = phoneNumber;
    }

    public String getName() {
        return name;
    }

    public String getPhoneNumber() {
        return phoneNumber;
    }

    public static Contact createContact (String name, String phoneNumber) {
        return new Contact(name, phoneNumber);
    }
}
