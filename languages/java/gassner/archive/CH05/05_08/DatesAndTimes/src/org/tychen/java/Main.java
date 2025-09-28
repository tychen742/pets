package org.tychen.java;

import java.text.DateFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Date;
import java.util.GregorianCalendar;

public class Main {

    public static void main(String[] args) {
        /// old Java API date/time
        Date d = new Date();
        System.out.println(d);

        GregorianCalendar gc = new GregorianCalendar(2018, 1, 4);
        gc.add(GregorianCalendar.DATE, 1);
        Date d2 = gc.getTime();
        System.out.println(d2);

        DateFormat df = DateFormat.getDateInstance(DateFormat.FULL);
        System.out.println(df.format(d2));

        ///// Java 8 Date/Time
        LocalDateTime ldt = LocalDateTime.now();
        System.out.println(ldt);

        LocalDate ld = LocalDate.of(2018, 1, 4);
        System.out.println(ld);

        DateTimeFormatter dtf = DateTimeFormatter.ISO_DATE;
        System.out.println(dtf.format(ld));

        DateTimeFormatter dtf2 = DateTimeFormatter.ofPattern("M/d/yyyy");
        System.out.println(dtf2.format(ld));
    }
}
