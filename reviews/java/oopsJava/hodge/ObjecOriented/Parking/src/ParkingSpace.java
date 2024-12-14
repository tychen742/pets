public class ParkingSpace implements Space {

    private VehicleSize vehicleSize;
    private VehicleType vehicleType;


    private boolean isTaken;

    public ParkingSpace(VehicleSize vehicleSize, VehicleType vehicleType) {
        this.vehicleSize = vehicleSize;
        this.vehicleType = vehicleType;
    }


    public VehicleType getType() {
        return this.vehicleType;
    }

    public VehicleSize getSize() {
        return this.vehicleSize;
    }


    public boolean getIsTaken() {
        return this.isTaken;
    }

    public void setIsTaken(boolean isTaken) {

    }
}
