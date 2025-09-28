import java.util.*;


public class ParkingLot {

    private HashMap<Vehicle.VehicleSize, HashMap<Vehicle.VehicleType,
            ArrayList<ParkingSpace>>> parkingAvailableBySize = new HashMap<>();

    final private Vehicle.VehicleType[] vehicleTypes = Vehicle.VehicleType.values();
    final private Vehicle.VehicleSize[] vehicleSizes = Vehicle.VehicleSize.values();

    public ParkingLot(int numberOfSmallReularSpaces,
                      int numberOfMediumRegularSpaces,
                      int numberOfLargeRegularSpaces,
                      int numberOfSmallHandicappedSapces,
                      int numberOfMediumHandicappedSpaces,
                      int numberOfLargeHandicappedSpaces) {

        int[][] numberOfSpaces = {{numberOfSmallReularSpaces, numberOfSmallHandicappedSapces},
                {numberOfMediumRegularSpaces, numberOfMediumHandicappedSpaces},
                {numberOfLargeRegularSpaces, numberOfLargeHandicappedSpaces}};

        // initialize the parking lot...
        for (int sizeIndex = 0; sizeIndex < vehicleSizes.length; sizeIndex++) {
            for (int vehicleTypeIndex = 0; vehicleTypeIndex < vehicleTypes.length; vehicleTypeIndex++) {
                ArrayList<ParkingSpace> spaces = new ArrayList<>();
                for (int i = 0; i < numberOfSpaces[sizeIndex][vehicleTypeIndex]; i++) {
                    ParkingSpace p = new ParkingSpace(vehicleSizes[sizeIndex], vehicleTypes[vehicleTypeIndex]);
                    spaces.add(p);
                }

                if (parkingAvailableBySize.containsKey(vehicleSizes[sizeIndex])) {
                    HashMap<Vehicle.VehicleType, ArrayList<ParkingSpace>> previousTypeToSpaceMap = parkingAvailableBySize.get(vehicleSizes[sizeIndex]);
                    previousTypeToSpaceMap.put(vehicleTypes[vehicleTypeIndex], spaces);
                } else {
                    HashMap<Vehicle.VehicleType, ArrayList<ParkingSpace>> typeToSapceMap = new HashMap<>();
                    typeToSapceMap.put(vehicleTypes[vehicleTypeIndex], spaces);
                    parkingAvailableBySize.put(vehicleSizes[sizeIndex], typeToSapceMap);
                }
            }

        }
        System.out.println("Init");
    }


    public ParkingLot(HashMap<Vehicle.VehicleSize, HashMap<Vehicle.VehicleType, ArrayList<ParkingSpace>>> parkingAvailableBySize) {
        this.parkingAvailableBySize = parkingAvailableBySize;
    }

    public ParkingSpace park(Vehicle c) {
        ParkingSpace attemptedPark = tryToPark(c);
        if (attemptedPark != null) {
            attemptedPark.setIsTaken(true);
            System.out.println("The car has parked in a " + attemptedPark.getSize() + " " + attemptedPark.getType());
        } else {
            System.out.println("The car cannot be parked at this time.");
        }
        return attemptedPark;
    }

    private ParkingSpace tryToPark(Vehicle vehicle) {
        Vehicle.VehicleSize size = vehicle.getSize();
        Vehicle.VehicleType type = vehicle.getType();

        // LARGE PARKING SPOTS
        if (size.equals(Vehicle.VehicleSize.LARGE)) {
            return
        }
    }

    private


}
