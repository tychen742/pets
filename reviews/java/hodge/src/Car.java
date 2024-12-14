import java.awt.*; // awt: Abstract Window Toolkit

public class Car {

    // Data types:
    // int -> integer 1, 2, 3
    // double -> decimal 34.5, 32.1
    // String -> a1a2, "hellow world"
    double averageMilePerGallon;
    String licencePlate;
    Color paintColor;
    boolean areTailLightsWorking;


    public Car(double inputAverageMPG,
               String inputLicensePlate,
               Color inputPaintColor,
               boolean inputAreTailLightsWorking) {
        this.averageMilePerGallon = inputAverageMPG;
        this.licencePlate = inputLicensePlate;
        this.paintColor = inputPaintColor;
        this.areTailLightsWorking = inputAreTailLightsWorking;
    }

    public void changePaintColor(Color newPaintColor) { // signature of method; void: no return
        this.paintColor = newPaintColor;
    }

    public double speedingUp(double currentSpeed) {
        currentSpeed += 100;
        return currentSpeed;


    }
}
