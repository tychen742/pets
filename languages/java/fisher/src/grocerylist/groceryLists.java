package grocerylist;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class groceryLists {

    public static void main(String[] args) {
        ArrayList<String> oldList = new ArrayList();
        oldList.add("Egg");
        oldList.add("Milk");
        oldList.add("Coffee");
        oldList.add("Cheeze");

//        ArrayList newList = new ArrayList();
//        List<String> newList = Arrays.asList("Egg", "Beef", "Chicken", "Scalops");

        ArrayList<String> newList = new ArrayList();
        newList.add("Egg");
        newList.add("Beef");
        newList.add("Chicken");
        newList.add("Scalops");

        System.out.println(oldList);
        System.out.println(newList);

        System.out.println(oldList.getClass());
        System.out.println(newList.getClass());

        for (String ele : newList) {

            if (oldList.contains(ele)) {
                newList.remove(ele);
                System.out.println("Removed " + ele);
            }
        }

        newList.remove("Egg");

        System.out.println("newList now: " + newList);

        oldList.addAll(newList);

        System.out.println(newList);
        System.out.println(oldList);
//        for ( String ele : oldList ) {

//        }


    }

}
