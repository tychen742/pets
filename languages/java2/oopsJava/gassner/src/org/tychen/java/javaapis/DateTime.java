package org.tychen.java.javaapis;

import java.text.DateFormat;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.Date;
import java.util.GregorianCalendar;

public class DateTime {


    public static void main(String[] args) {

        Date now = new Date();
        System.out.println(now);

        GregorianCalendar gc = new GregorianCalendar(2018, 4, 22);

        Date d1 = gc.getTime();
        System.out.println(d1);

        gc.add(GregorianCalendar.DATE, 1);

        Date d2 = gc.getTime();
        System.out.println(d2);

        DateFormat df = DateFormat.getDateInstance(DateFormat.FULL);
        System.out.println(df.format(d2));

        // new JAva API
        LocalDateTime ldt = LocalDateTime.now();
        System.out.println(ldt);
        LocalDate ld = LocalDate.of(1998, 1 ,02); // new API, date starts with 1
        System.out.println(ld);

        DateTimeFormatter dtf = DateTimeFormatter.ofPattern("MM/DD/YYYY");
        System.out.println(dtf.format(ld));
    }

}
