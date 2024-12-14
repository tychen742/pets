package part23_Interfaces;

public class Machine implements Info {

	int id;

	void start() {
		System.out.println("Machine started.");
	}

	@Override
	public void showInfo() {
		System.out.println("Machine ID is: " + id);
	}
	
	void machTest() {
		System.out.println("Test");
	}
}
