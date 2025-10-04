package arraylistexample;

import java.util.ArrayList;
import java.util.Arrays;

public class ArrayListExample {

    public static void main(String[] args) {

        String[] platform1 = {"PS4"};
        String[] platform2 = {"3DS", "Wii U"};
        VideoGame game1 = new VideoGame("Battlefield 1", 2001, "M", platform1);
        VideoGame game2 = new VideoGame("Pokemon Sun", 2016, "E", platform2);
        VideoGame game3 = new VideoGame("The Legend of Zelda", 2017, "E", platform2);

        ArrayList<VideoGame> games = new ArrayList<VideoGame>();
        games.add(game1);
        games.add(game2);
        games.add(0, game3);

        System.out.println(games);

        for (int i = 0; i < games.size(); i++) {
            System.out.println(games.get(0).toString());
            System.out.println(games.get(1));
            System.out.println(games.get(2));
        }

    }
}
