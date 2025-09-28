public class Car {

    private String color;
    private String model;
    private int year;

    public Car(String color, String model, int year) {
        this.color = color;
        this.model = model;
        this.year = year;
    }

    public String getColor() {
        return color;
    }

    public String getModel() {
        return model;
    }

    public int getYear() {
        return year;
    }


    public static void main(String[] args) {

        Car aCar = new Car("red", "Highlander", 2018);
        System.out.print(aCar.color);

    }

}


