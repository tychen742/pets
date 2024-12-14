package exceptions;
// Arithmatic_ArrayOutOfBound
public class  Input {
	
	public static void main(String[] args) {
		String s = "-";
		try {
			doMath(args[0]);
			s += "t "; // line 6
		} finally {
			
		}
	}
	
	public static void doMath (String a) {
		int y = 7 / Integer.parseInt(a);
	}

}
