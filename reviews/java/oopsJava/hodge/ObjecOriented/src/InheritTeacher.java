public class InheritTeacher {

    int numberOfStudents;
    String school;

    public InheritTeacher(int numberOfStudents, String school) {
        this.numberOfStudents = numberOfStudents;
        this.school = school;
    }

    public String getRole() {
        return "This teacher teaches at " + this.school +
                " and has " + this.numberOfStudents + " students.";


    }
}