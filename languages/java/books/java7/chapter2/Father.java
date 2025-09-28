package book.java7.chapter2;

public class Father {

	private final void aMethod() {
		System.out.println("calling superclass aMethod!");
	}
	public void main (String[] args) {
		aMethod();
	}

	
	
}

class Son extends Father {
	 //@Override
	void aMethod() {
		System.out.println("calling the subclass aMethod!");
	}

	public void main (String[] args) {
		aMethod();
	}

}

