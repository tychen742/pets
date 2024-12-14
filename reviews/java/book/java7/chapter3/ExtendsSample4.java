package book.java7.chapter3;

class Father6 {
	Father6(char c) {
		System.out.println(c);
	}
}

class Son6 extends Father6 {
	Son6() {
		this('A');
		System.out.println("B");
	}

	Son6(char c) {
		super(c);
	}
}

public class ExtendsSample4 {
	public static void main(String[] args) {
		Son6 son = new Son6();
	}
}
