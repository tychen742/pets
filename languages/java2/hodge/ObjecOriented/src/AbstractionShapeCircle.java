
// CONCRETE CLASS

public class AbstractionShapeCircle extends AbstractionShape {

    double radius;
//    final double pi = 3.14159;

    public AbstractionShapeCircle(String color, double radius) {
        super(color); // super calls the Shape constructor
        this.radius = radius;

    }

    public double getArea() {
        return Math.PI * Math.pow(radius, 2);
    }

    public String draw() {
        return "A " + color + " circle with a " +
                radius + " inch radius is drawn.";
    }
}
