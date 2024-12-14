public abstract class AbstractionShape {

    String color;

    public AbstractionShape(String color) {
        this.color = color;
    }

    abstract String draw();

    abstract double getArea();


}
