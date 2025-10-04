import java.util.Stack;

public class Stacks {

    public static void main(String[] args) {

        Stack<String> deckOfCards = new Stack();
        String card1 = "Jack : Diamonds";
        String card2 = "8 : Hearts";
        String card3 = "3 : Clubs";
        System.out.println("Stack: " + deckOfCards);

        // Insert Push
        deckOfCards.push(card1);
        deckOfCards.push(card2);
        deckOfCards.push(card3);
        System.out.println("Stack: " + deckOfCards);

        // retrieve
        String top = deckOfCards.peek();
        System.out.println("Top of Stack = last add: " + top);

        int size = deckOfCards.size();
        System.out.println("Stack size(): " + size);

        // Remove
        while (!deckOfCards.empty()) {
            String removedItem = deckOfCards.pop();
            System.out.println("Removed: " + removedItem);
        }
        System.out.println("Stack: "+deckOfCards);

        // Pop from an empty Stack
//        String popEmptyStack = deckOfCards.pop();
//        System.out.println(popEmptyStack);
        while (deckOfCards.empty()) {
            deckOfCards.pop();
        }
    }
}
