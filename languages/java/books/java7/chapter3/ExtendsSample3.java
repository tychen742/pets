package book.java7.chapter3;

class Father5 {
	Father5() {
		System.out.println("A");
	}
	Father5(char c) {
		System.out.println(c);
	}
}

class Son5 extends Father5 {
	Son5() {
//		super('A');
		System.out.println("B");
	}
}

public class ExtendsSample3 {
	public static void main(String[] args) {
		Son5 son = new Son5();
	}

}
