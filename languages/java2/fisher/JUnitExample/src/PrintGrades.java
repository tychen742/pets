public class PrintGrades {

    public String print(int grade) {
        if (grade > 93)
            return "You got an A!";
        else if (grade > 83)
            return "You got a B";
        else if (grade > 73)
            return "You receved a C";
        else
            return "You need to study harder";
    }

}
