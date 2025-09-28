

public class Test {

	public static void main(String[] args) {
		int a = 4;
		int b = 5;
		int test = (a + b)/2;
		System.out.println(test);

		String[] obj1 = { "Java", "Python" };
		aMethod(obj1);

		int obj2 = 22222;
		bMethod (obj2);

		String x = "Java";
		String y = "Java";
		String z = "java";
		System.out.println(x.hashCode());
		System.out.println(y.hashCode());
		System.out.println(z.hashCode());
	}

	static void aMethod(String[] o) {
		System.out.println(o);
	}


	public static void bMethod (int p) {
		System.out.println(p);
	}

}
