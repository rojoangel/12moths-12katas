"SQL String Generator Kata" done on PHP with TDD and Clean Code coding techniques.
http://www.solveet.com/exercises/SQL-String-Generator/139

Given table metadata (name, columns/types, etc.), generate a well-formed SQL string. 
For example:
```
String[] columns = { "a", "b" };
assertEquals("select a,b,c from x", sql.select(tableName, columns));
```

Do this for the usual SQL queries: SELECT, INSERT, UPDATE, DELETE. 
To simplify the problem, consider only this data types: strings, integers and booleans.

Remember to only do one thing at a time, and try not to think of the solution "ahead of time". Let the methods and objects just grow by themselves, as you write more and more tests.

Don't forget:
- Try to use TDD to write code. Free Spanish book here.
- Write unit tests for generated code.
- Try to apply SOLID Principles.
