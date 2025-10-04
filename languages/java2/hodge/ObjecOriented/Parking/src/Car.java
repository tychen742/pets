public class Car implements Vehicle {

    private VehicleType type;


    public Car(Vehicle.VehicleType type) {
        this.type = type;
    }

    public Vehicle.VehicleSize getSize() {
        return Vehicle.VehicleSize.MEDIUM;
    }

    public Vehicle.VehicleType getType() {
        return this.type;
    }
}
