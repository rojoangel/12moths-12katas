import java.util.ArrayList;
import java.util.List;

public class Ocp {

    private List<FizzNum> conditions;

    public Ocp() {
        conditions = new ArrayList<FizzNum>();
        conditions.add(new Fizz());
        conditions.add(new Buzz());
        conditions.add(new Bang());
    }
    public String say(int number) {
        String result = "";
        for (int i = 0; i < conditions.size(); i++) {
            result += conditions.get(i).say(number);
        }

        if ("".equals(result)) {
            result += String.valueOf(number);
        }
        return result;
    }
}