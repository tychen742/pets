<<<<<<< HEAD
package exceptions;

import java.io.*;

class Master {
	String doFileStuff() throws FileNotFoundException {
		return "a ";
	}
}

public class Slave extends Master {
	public static void main(String[] args) {
		String s = null;
		try {
			s = new Slave().doFileStuff();
		} catch (Exception x) {
			s = "b";
		}
		System.out.println(s);
	}

	String doFileStuff() {
		return "b";
	}

=======
package exceptions;

import java.io.*;

class Master {
	String doFileStuff() throws FileNotFoundException {
		return "a ";
	}
}

public class Slave extends Master {
	public static void main(String[] args) {
		String s = null;
		try {
			s = new Slave().doFileStuff();
		} catch (Exception x) {
			s = "b";
		}
		System.out.println(s);
	}

	String doFileStuff() {
		return "b";
	}

>>>>>>> main
}