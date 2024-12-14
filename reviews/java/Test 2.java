import java.util.ArrayList;

public class Test {

	public static void main(String[] args) {

		String[] myList = new String[2];
		
		String a = "WOW";
		myList[0] = a;

		String b = "whohoo";
		myList[1] = b;
		
		boolean isIn = false;

		for (int i = 0; i < myList.length; i++) {
			if (myList[i].equals(b)) {
				isIn = true;
				System.out.println(isIn);
				break;
			}
		}
		
		ArrayList<Integer> al = new ArrayList<Integer>();
		
		al.add(10);
		al.add(20);
		al.add(2, 100);
		al.add(0, 101);
		al.add(0, 102);
		for (int element : al) {
			System.out.println(element);
		}
		
		ArrayList al2 = new ArrayList();
		al2.add(100000);
		al2.add("random string");
		al.get(0);
		System.out.println(al2.get(0));
		System.out.println(al2.get(1));
		
		
		
	}
}
