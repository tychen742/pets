package book.java7.chapter3;

class MyOuterClass4 {

	private int x = 7;
	static private int sx = 9;

	static class MyStaticInner4 {
		private int x = 77;
		static private int sx = 99;

		public void fooA() {
			System.out.println(sx);
			System.out.println(MyOuterClass4.sx);
			System.out.println(x);
			System.out.println(this.x); // THIS direct access
			// System.out.println(MyOuterClass4.this.x); // x
		}

		public static void fooB() {
			// System.out.println(x); static only
			System.out.println(sx);
			System.out.println(MyOuterClass4.sx);
		}
	}
}

public class StaticInnerClass2 {
	public static void main(String[] args) {
		MyOuterClass4.MyStaticInner4 s = new MyOuterClass4.MyStaticInner4();
		s.fooA();
		s.fooB();
	}
}
