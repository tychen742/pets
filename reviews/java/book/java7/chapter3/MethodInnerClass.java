package book.java7.chapter3;
public class MethodInnerClass {
	public static void main(String[] args) {
		new MethodInnerClass().see();
	}
	void see() {
		class MyInner {
			void foo() {
				System.out.println("Hello " + "MethodIOnner Class!" );
			}
		}
		MyInner mi = new MyInner();
		mi.foo();
	}
}
