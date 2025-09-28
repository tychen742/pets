package book.java7.chapter3;

import book.java7.chapter3.MyOuter3.MyStaticInner3;

class MyOuter3 {
	static class MyStaticInner3 {
		public void fooA() {
			System.out.println("Hello " + "static inner class A.");
		}

		public static void fooB() {
			System.out.println("Hello " + "static inner class B.");
		}
	}
}

public class StaticInnerClass {
	public static void main(String[] args) {
		MyOuter3.MyStaticInner3 s = new MyStaticInner3();
		s.fooA();
		s.fooB();
		MyOuter3.MyStaticInner3.fooB(); // 直接存取，不必new
		// MyOuter3.MyStatic3.fooB(); // Can't do the same
	}
}
