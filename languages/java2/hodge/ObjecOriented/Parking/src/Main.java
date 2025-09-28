public class Main {

    public static void main (String[] args) {

    int numberOfSmallRegularSapces = 9;
    int numberOfMediumRegularSpaces = 24;
    int numberOfLargeRegularSpaces = 10;
    int numberOfHandicapMediumSpaces = 5;

    ParkingLot parkingLot = new ParkingLot (
            9, 24,,10,0,5,0
    );

        System.out.println("Parking Medium Handicapped cars");
        for (int i = 0; i < 6; i++) {
            parkingLot.park(new Car(Vehicle.VehicleType.HANDICAPPED));
        }

        System.out.println();

        System.out.println("Parking Large Regular truks");
        for (int j = 0; j < 8 ; j++) {
            parkingLot.park(new Truck(Vehicle.VehicleType.REGULAR));
        }

        System.out.println();

        System.out.println("Parking Medium Regular cars");
        for (int k = 0; k < 3; k++) {
            parkingLot.park(new Car(Vehicle.VehicleType.REGULAR));
        }

        System.out.println();

        System.out.println("Parking Large Handicapped truck");
        parkingLot.park(new Truck(Vehicle.VehicleType.HANDICAPPED));

        System.out.println();

        System.out.println("Parking Large Regular truck");
        parkingLot.park(new Truck(Vehicle.VehicleType.REGULAR));

        System.out.println();

        System.out.println("Parking Large Handicapped truck");
        parkingLot.park(new Truck(Vehicle.VehicleType.HANDICAPPED));
    }

}
