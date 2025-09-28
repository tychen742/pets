package book.java7.chapter3;

public class SubClass2 extends SuperClass2 {

	public static void main (String[] args) {
		SubClass2 sc = new SubClass2();
		sc.amethod();
	}
	
	@Override
	void amethod() {
		System.out.println("calling amethod from class SubClass2");
	super.amethod();
	}
	
}



