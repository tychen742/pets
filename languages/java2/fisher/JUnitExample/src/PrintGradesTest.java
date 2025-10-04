import org.junit.jupiter.api.Test;

import static org.junit.jupiter.api.Assertions.*;

class PrintGradesTest {

    @Test
    public void test() {

        PrintGrades pg = new PrintGrades();
        String result = pg.print(95);
        assertEquals("You got an A!", result);

        PrintGrades pg2 = new PrintGrades();
        String result2 = pg2.print(90);
        assertEquals("You got an A!", result2);

    }

}