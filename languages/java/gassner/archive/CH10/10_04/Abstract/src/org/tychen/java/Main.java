package org.tychen.java;

import org.tychen.java.model.Kalamata;
import org.tychen.java.model.Ligurian;
import org.tychen.java.model.Olive;

import java.util.ArrayList;
import java.util.List;

public class Main {

    public static void main(String[] args) {

        List<Olive> olives = new ArrayList<>();
        olives.add(new Kalamata());
        olives.add(new Kalamata());
        olives.add(new Ligurian());
        olives.add(new Ligurian());
        olives.add(new Ligurian());
        olives.add(new Ligurian());

        OlivePress press = new OlivePress();
//        press.setOil(5);
        int totalOil = press.getOil(olives);

        System.out.println("You got " + totalOil + " units of oil");


    }
}
