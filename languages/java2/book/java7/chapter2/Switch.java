package book.java7.chapter2;

public class Switch {

	public static void main(String[] args) {

		int x = (int) (Math.random() * 10);
		System.out.println(x);
		switch (x) {
		case 1:
			System.out.println(x);
			break;
		case 2:
			System.out.println(x);
			break;
		case 3:
			System.out.println(x);
			break;
		case 4:
			System.out.println(x);
			break;
		case 5:
			System.out.println(x);
		default:
			System.out.println("The number is larger than 5");
		}

	}

}
