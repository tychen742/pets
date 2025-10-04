package book.java7.chapter3;

class OuterClass2 {
	private static int sx = 9;
	private int x = 7;
	
	class InnerClass {
		private int x = 77;
		public void foo() {
			int x = 777;
			System.out.println("Local x = " + x);
			System.out.println("InnerClass's x = " + this.x);
			System.out.println("OuterClass's x = " + OuterClass2.this.x);
			System.out.println("OuterClass's x = " + OuterClass2.sx);
		}
		
	}
}


public class RegularInnerClass2 {

	public static void main(String[] args) {
		new OuterClass2().new InnerClass().foo();
	}
}
