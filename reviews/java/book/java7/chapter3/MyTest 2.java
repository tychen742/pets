package book.java7.chapter3;

public class MyTest {
	MyTest() {
		System.out.println("Run MyTest() constructor.");
	}
	
	public static void main(String[] args) {
		MyTest t = new MyTest();
		new MyTest();
	}

}
