<<<<<<< HEAD
package exam803;

public class Q018Speak {
	public static void main(String[] args) {
		Q018Speak speakIT = new Tell();
		Tell tellIt = new Tell();
		((Tell)speakIT).tellItLikeItIs();
		((Truth)speakIT).tellItLikeItIs();
		((Truth)speakIT).tellItLikeItIs();
		tellIt.tellItLikeItIs();
		((Truth)tellIt).tellItLikeItIs();
		((Truth)tellIt).tellItLikeItIs();
	}
}

class Tell extends Q018Speak implements Truth {

	public void tellItLikeItIs() {
		System.out.println("Right on!");
	}
	
}

interface Truth {
	public void tellItLikeItIs();
=======
package exam803;

public class Q018Speak {
	public static void main(String[] args) {
		Q018Speak speakIT = new Tell();
		Tell tellIt = new Tell();
		((Tell)speakIT).tellItLikeItIs();
		((Truth)speakIT).tellItLikeItIs();
		((Truth)speakIT).tellItLikeItIs();
		tellIt.tellItLikeItIs();
		((Truth)tellIt).tellItLikeItIs();
		((Truth)tellIt).tellItLikeItIs();
	}
}

class Tell extends Q018Speak implements Truth {

	public void tellItLikeItIs() {
		System.out.println("Right on!");
	}
	
}

interface Truth {
	public void tellItLikeItIs();
>>>>>>> main
}