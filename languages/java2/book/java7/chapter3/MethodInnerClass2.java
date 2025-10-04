package book.java7.chapter3;

public class MethodInnerClass2 {
	public static void main(String[] args) {

		new MethodInnerClass2().see2();
	}

	void see2() {
		final int fx = 7;
		int x = 77;
		class MyInner {
			void foo2() {
				System.out.println("Non-final local attribute x = " + x);
				System.out.println("Final local attribute fx = " + fx);
			}
		}
		MyInner mi = new MyInner();
		mi.foo2();
	}

}
