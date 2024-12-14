package ch06_Objects_and_Classes;

public class StaticTestB {
	// static int a = StaticTestA.id;
	// static int b = StaticTestA.id2;
	// static int c = StaticTestA.id3;
	// static int d = StaticTestA.id4;

	static int aa = TestA.id;
	int b = TestA.id2;
	int c = TestA.id3;
	static int d = TestA.id4;
	

	public static void main(String[] args) {
		// int a = StaticTestA.id;
		// int b = StaticTestA.id2;
		// int c = StaticTestA.id3;
		// int d = StaticTestA.id4;

		System.out.println(aa);
		// System.out.println(b);
		// System.out.println(c);
		 System.out.println(d);
	}

}
