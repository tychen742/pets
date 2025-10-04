package book.java7.chapter3;

class OuterClass {

	class InnerClass {
		public void foo() {
			System.out.println("Hello, my Inner class!");
		}
	}
}

public class RegularInnerClass {
	public static void main(String[] args) {
		OuterClass outer = new OuterClass();
		OuterClass.InnerClass inner = outer.new InnerClass();
		inner.foo();
		
		OuterClass.InnerClass inner2 = new OuterClass().new InnerClass();
		inner2.foo();
		
		new OuterClass().new InnerClass().foo();
	}

}
