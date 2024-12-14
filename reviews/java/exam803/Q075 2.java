package exam803;

public class Q075 {

	public String name = "";
	public int age = 0;
	public String major = "Undeclared";
	public boolean fullTime = true;

	// public int year = 0;
	public void display() {
		System.out.println("Name: " + name + " Major: " + major);
	}

	public boolean isFullTime() {
		return fullTime;
	}
}
