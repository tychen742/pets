
// CONCRETE CLASS

public class AbstractionShapeRectangle extends AbstractionShape {

    double length;
    double width;

    public AbstractionShapeRectangle(String color, double length, double width) {
        super(color);
        this.length = length;
        this.width = width;
    }

    public double getArea() {
        return length * width;
    }

    public String draw() {
        return "A " + color + " rectangle " + length + " inches long and " +
                width + " inches wide has an area of " + getArea();
    }

}
