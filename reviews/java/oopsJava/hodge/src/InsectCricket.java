public class InsectCricket extends Insect {

    double length;

    public InsectCricket(int age, double length) {
        super(age, 6);
        this.length = length;
    }

    public void says() {
        System.out.println("CHIRP");
    }

    public void jump() {
        System.out.println("A cricket jumped!");
    }
}
