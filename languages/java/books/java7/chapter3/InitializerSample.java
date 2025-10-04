package book.java7.chapter3;

public class InitializerSample {

	String id;
	int birthday;
	String name;
	
	InitializerSample() {
		id = "B987654321";
	}
	InitializerSample(int kind) {
		int kind2 = kind; 
		System.out.println(kind2);
	}
	
	{ 
		id = "A123456789";
		birthday = 20050101;
		name = "pcschool";
	}
	
	void getInfo() {
		System.out.println("id = " + id);
		System.out.println("birthday = " + birthday);
		System.out.println("name = " + name);
	}
	
	public static void main(String[] args) {
		new InitializerSample().getInfo();
		new InitializerSample(100).getInfo();
	}
}
