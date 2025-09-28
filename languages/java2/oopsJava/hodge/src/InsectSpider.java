public class InsectSpider extends Insect {

    boolean isPoisonous;

    public InsectSpider(int age, boolean isPoisonous) {
        super(age, 8); // super: calls the Insect constructor
        this.isPoisonous = isPoisonous;
    }

    public void says() {    // signature
        System.out.println("HISSSS!");
    }
}
