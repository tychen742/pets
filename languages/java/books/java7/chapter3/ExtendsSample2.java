package book.java7.chapter3;

class Father4 {
	Father4() {
		System.out.println("A");
	}
}

class Son4 extends Father4 {
	Son4() {
		System.out.println("B");
	}
}

public class ExtendsSample2 {
	public static void main(String[] args) {
		Son4 son = new Son4();
	}

}
