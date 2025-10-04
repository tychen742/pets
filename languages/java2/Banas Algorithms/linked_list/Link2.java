package linked_list;

public class Link2 {
	public String bookName;
	public int millionsSold;

	public Link2 next;

	public Link2(String bookName, int millionsSold) {
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
		LinkList2 theLinkedList = new LinkList2();
		theLinkedList.insertFirstLink("Don Quixote", 500);
		theLinkedList.insertFirstLink("A Tale of Two Cities", 200);
		theLinkedList.insertFirstLink("The Lord of the Rings", 150);
		theLinkedList.insertFirstLink("Harry Potter and the Sorcerer's Stone", 107);
		theLinkedList.insertFirstLink("Outliers", 1);
		theLinkedList.display();

		// theLinkedList.removeFirst();
		// theLinkedList.display();

//		System.out.println(theLinkedList.find("The Lord of the Rings").bookName + " was found");
//
//		theLinkedList.removeLink("The Lord of the Rings");
//		theLinkedList.display();

	}
}

class LinkList2 {
	public Link2 firstLink;

	LinkList2() {
		firstLink = null;
	}

	public boolean isEmpty() {
		return (firstLink == null);
	}

	public void insertFirstLink(String bookName, int millionsSold) {
		Link2 newLink = new Link2(bookName, millionsSold);
		newLink.next = firstLink;
		firstLink = newLink;
	}

	public Link2 removeFirst() {
		Link2 linkReference = firstLink;
		if (!isEmpty()) {
			firstLink = firstLink.next;
		} else {
			System.out.println("This LinkedList is empty.");
		}
		return linkReference;
	}

	public void display() {
		Link2 theLink = firstLink;
		while (theLink != null) {
			theLink.display();
			System.out.println("   Next Link: " + theLink.next);
			theLink = theLink.next;
			System.out.println();
		}
	}

	public Link2 find(String bookName) {
		Link2 theLink = firstLink;
		if (!isEmpty()) {
			while (theLink.bookName != bookName) {
				if (theLink.next == null) {
					return null;
				} else {
					theLink = theLink.next;
				}
			}
		} else {
			System.out.println("Empty Linkedlist");

		}
		return theLink;

	}

	public Link2 removeLink(String bookName) {
		Link2 currentLink = firstLink;
		Link2 previousLink = firstLink;
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
			previousLink.next = currentLink.next;
		}
		return currentLink;
	}
}