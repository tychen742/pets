package ch01;

/**
 * Created by polochen on 1/28/16.
 */


import java.util.Scanner;

public class Hi {
    public static void main(String[] args) {

        Scanner scn = new Scanner(System.in);
        System.out.print("Please input your name: ");
        String strName = scn.next();
        System.out.print("Hi! " + strName + ", welcome to the world of Java!");
    }
}
