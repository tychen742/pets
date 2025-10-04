
public class test {
    public static void main(String[] args) {
        System.out.print("Hello World");
        System.out.println();

        mathy m = new mathy();
        float answer = m.add(3, 3);
        answer = m.deduct(3, 3);
        answer = m.multiply(3, 3);
        answer = m.divide(3, 3);
        System.out.println(answer);

    }

}
