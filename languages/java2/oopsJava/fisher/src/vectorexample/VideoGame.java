package vectorexample;//package org.tychen.java;

public class VideoGame {

    private  String title;
    private int year;
    private String rating;
    private String[] platforms;

    public VideoGame() {    }

    public VideoGame(String title, int year, String rating, String[] platforms) {
        this.title = title;
        this.year = year;
        this.rating = rating;
        this.platforms = platforms;
    }
}
