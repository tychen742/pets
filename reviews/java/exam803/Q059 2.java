package exam803;

public class Q059 {
	
	public static void main(String[] args) {
		
		String [] table = {"aa", "bb", "cc"};
		
		int i = 0;
		for (String element : table) {
			while (i < table.length) {
				System.out.println(i);
				System.out.println(element);

				i++;
				break;
			}
		}
		
	}

}
