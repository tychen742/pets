package book.java7.chapter3;

public class MessageServiceSingleTon {

	private static final MessageServiceSingleTon instance = new MessageServiceSingleTon();

	// private Constructor
	private MessageServiceSingleTon() {
	}

	// Factory Method
	public static MessageServiceSingleTon getInstance() {
		return instance;
	}

}
