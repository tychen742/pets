package linked_list;

public class Link { // a linked list of popular books
	String bookName;
	int millionsSold;
	public Link next;

	public Link(String bookName, int millionsSold) {
		this.bookName = bookName;
		this.millionsSold = millionsSold;
	}

	public void display() {
		System.out.println(bookName + ": " + millionsSold + ",000,000");
	}

	public String toString() {
		return bookName;
	}

	public static void main(String[] args) {
		LinkList theLinkedList = new LinkList();
		theLinkedList.insertFirstLink("Don Quixote", 500);
		theLinkedList.insertFirstLink("A Tale of Two Cities", 200);
		theLinkedList.insertFirstLink("The Lord of the Rings", 150);
		// theLinkedList.insertFirstLink("Harry Potter and the Sorcerer's Stone", 107);
		theLinkedList.display();
		// theLinkedList.removeFirst();
	}
}

class LinkList {
	public Link firstLink;

	LinkList() {
		firstLink = null; // by default, objects get a value of null
	}

	public boolean isEmpty() {
		return (firstLink == null);
	}

	public void insertFirstLink(String bookName, int millionsSold) {
		Link newLink = new Link(bookName, millionsSold);
		// connects the firstLink field to the the new Link
		newLink.next = firstLink;
		firstLink = newLink;
	}

	public Link removeFirst() {
		Link linkReference = firstLink;
		if (!isEmpty()) {
			firstLink = firstLink.next;
		} else {
			System.out.println("Empty LikedList");
		}
		return linkReference;
	}

	public void display() {
		Link theLink = firstLink;
		while (theLink != null) {
			theLink.display();
			System.out.println("Next Link: " + theLink.next);
			theLink = theLink.next;
			System.out.println();
		}
	}

	public Link find(String bookName) {
		Link theLink = firstLink;
		if (!isEmpty()) {
			while (theLink.bookName != bookName) {
				if (theLink.next == null) {
					return null;
				} else {
					theLink = theLink.next;
				}
			}
		} else {
			System.out.println("Empty LinkedList");
		}
		return theLink;
	}

	public Link removeLink(String bookName) {
		Link currentLink = firstLink;
		Link previousLink = firstLink;

		while (currentLink.bookName != bookName) {

			if (currentLink.next == null) {
				return null;
			} else {
				previousLink = currentLink;
				currentLink = currentLink.next;
			}
		}

		if (currentLink == firstLink) {
			firstLink = firstLink.next;
		} else {
			System.out.println("Found a match.");
			System.out.println("currentLink: " + currentLink);
			System.out.println("firstLink: " + firstLink);

			previousLink.next = currentLink.next;
		}

		return currentLink;
	}
}
