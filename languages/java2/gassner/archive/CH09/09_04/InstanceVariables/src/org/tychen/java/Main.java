package org.tychen.java;

import org.tychen.java.model.Olive;

import java.util.ArrayList;
import java.util.List;

// storing data in Instance Variables

public class Main {

    public static void main(String[] args) {

        List<Olive> olives = new ArrayList<>();
        Olive olive1 = new Olive();
        olives.add(olive1);
        Olive olive2 = new Olive();
        olives.add(olive2);
        Olive olive3 = new Olive();
        olives.add(olive3);

        OlivePress press = new OlivePress();
        press.getOil(olives);


    }
}
