package org.tychen.java;

import org.tychen.java.model.*;

import java.util.ArrayList;
import java.util.List;

// storing data in Instance Variables

public class Main {

    public static void main(String[] args) {

        List<Olive> olives = new ArrayList<>();
        olives.add(new Kalamata());
        olives.add(new Kalamata());
//        olives.add(new Olive(OliveName.KALAMATA, OliveColor.PURPLE, 3));
//        olives.add(new Olive(OliveName.KALAMATA, OliveColor.PURPLE, 3));
        olives.add(new Ligurian());
        olives.add(new Ligurian());
        olives.add(new Ligurian());
        olives.add(new Ligurian());


        OlivePress press = new OlivePress();
        int totalOil = press.getOil(olives);
        System.out.println("Total olive oil: " + totalOil);

    }
}
