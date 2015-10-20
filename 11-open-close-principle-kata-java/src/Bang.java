public class Bang implements FizzNum {

    public String say(int number) {
        if (number % 7 == 0) {
            return "Bang";
        }
        else {
            return "";
        }
    }
}
