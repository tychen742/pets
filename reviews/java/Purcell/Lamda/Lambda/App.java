interface Executable {
	int execute(int a);
}

interface StringExecutable {
	int execute(String a);
}

class Runner {
	public void run(Executable e) {
		System.out.println("Executing code block ...");
		int value = e.execute(12);
		System.out.println("Return value is: " + value);
	}
	/*
	public void run(StringExecutable e) {
		System.out.println("Executing code block ...");
		int value = e.execute("Hello");
		System.out.println("Return value is: " + value);
	}
	*/
}

/*
 * { System.out.println("This is code passed in a lambda expression.");
 * System.out.println("Hello there."); return
 */

public class App {

	public static void main(String[] args) {
		Runner runner = new Runner();
		runner.run(new Executable() {
			public int execute(int a) {
				System.out.println("Hello there.");
				return 7;
			}
		});

		System.out.println("===========================");

		runner.run( a -> {
			System.out.println("Hello there.");
			return 7 + a;
		});
	}

}
