package exam803;

public class Q108 {
	
	void x(Object o) {
		System.out.println("one");
	}
	
	void x(Number n) {
		System.out.println("two");
	}
	
	void x(Integer i) {
		System.out.println("three");
	}
	
	public static void main(String[] args) {
		new Q108().x("hello");
	}

}
