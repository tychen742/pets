package book.java7.chapter2;

public class ForEach {
	public static void main(String[] args) {

		String [] javas = { "Java6", "Jav7", "Java8"};
		for (String java : javas) {
			System.out.println(java);
		}
		
		String [][] dogs = {{"labrador", "pug", "sheperd"}, {"hound", "bulldog", "beagle"}};
		for (String[] dog : dogs) {
			for (String d : dog) {
				System.out.println(d);

			}
		}
	}
}
