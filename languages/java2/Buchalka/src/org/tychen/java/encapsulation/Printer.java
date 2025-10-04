package org.tychen.java.encapsulation;

public class Printer {

    private int tonerLevel;
    private int pagesPrinted;
    private boolean duplex;
    private int pagesAvailable;

    public Printer(int tonerLevel, int pagePrinted, boolean duplex) {
        this.tonerLevel = tonerLevel;
        this.pagesPrinted = pagePrinted;
        this.duplex = duplex;
    }

    public void print(int pagePrinting) {
        if (pagePrinting <= pagesAvailable()) {
            this.pagesPrinted = this.pagesPrinted + pagePrinting;
        } else {
            System.out.println("Toner level low. ");
        }
    }

    public int pagesAvailable() {
        int pagesCanPrint = this.tonerLevel * 100;
        return pagesCanPrint;
    }

    public void setTonerLevel(int tonerLevel) {
        if (tonerLevel <= 100) {
            this.tonerLevel = tonerLevel;
        }
    }

    public int getTonerLevel() {
        return tonerLevel;
    }

    public void setPagesPrinted(int pagesPrinted) {
        this.pagesPrinted = this.pagesPrinted + pagesPrinted;
    }
}
