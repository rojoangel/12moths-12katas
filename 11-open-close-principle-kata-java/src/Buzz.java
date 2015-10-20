public class Buzz implements FizzNum {

    public String say(int number) {
        if (number % 5 == 0) {
            return "Buzz";
        }
        else {
            return "";
        }
    }
}
