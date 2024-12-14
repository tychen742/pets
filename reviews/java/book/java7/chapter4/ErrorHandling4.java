package book.java7.chapter4;

class MemberIDException extends Exception {

	public MemberIDException(String mID) {
		super("Member ID (currently " + mID + ") length needs to be between 6 and 20 characters.");
	}

	public void contactWith() {
		System.out.println("Please conteact the Service Department at service@xxx.com for any questions you might have.");
	}
}

public class ErrorHandling4 {
	public static void main(String[] args) {
		boolean verify = true;

		try {
			checkMemberID("123456");
		} catch (MemberIDException e) {
			System.out.println("Error: " + e.getMessage());
			e.contactWith();
			verify = false;
		}
		if (verify == true) {
			System.out.println("Membership ID verification successful.");
		} else {
			System.out.println("Membership ID verification failed.");

		}
	}

	public static void checkMemberID(String mID) throws MemberIDException {
		if (mID.length() < 6 || mID.length() >20 ) {
			throw new MemberIDException(mID);

		}
	}
}