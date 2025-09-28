package ch03_Loop;

public class Cert_Questions {
	public static void main(String[] args) {
		String str = "";
		b: for (int x = 0; x < 3; x++) {
			for (int y = 0; y < 2; y++) {
				if (x == 1)
					break;
				if (x == 2 && y == 1)
					break b;
				str = str + x + y;
			}
		}
		System.out.println(str);

		String str2 = "";
		String str3 = str2 + 1 + 2;
		System.out.println(str3);

		String string = "";
		string = string + 2;
		// string = string + 100;
		// System.out.println("string = " + string);
		b: for (int x =	 3; x < 8; x++) {
			if (x == 4)
				break;
			if (x == 6)
				break b;
			string = string + x;
			System.out.println(string);
		}
		System.out.println(string);
	}

}
