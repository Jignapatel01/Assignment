Q-1. What Is Object Oriented Programming? 
Ans.=> onject oriented programming structured language. it used to secure data
       using private, protected and public.
       oops is advanced part of web programming language.
       php5,php7 and php8 is supported oops.
       core php or php4 is not supported oops.



Q-2. • What Are Properties Of Object Oriented Systems?
Ans.=> it has to enable to working with class and object as well as 
    impplimantation and use of fundamental object oriented principles and concepts that is
    inheritance, abstraction, polymorpohism, encapsulation.

    

Q-3. What Is Difference Between Class And Interface? 
Ans.=> the main diffrence between class and interface is that a class describe 
       the behaviour of an object.
      •  An interface contain behaviour assigned and define by class.
      •  class is created using class keyword and interface create using interface keyword.
      •  class can be inherited by using keyword extend.
      •  interface can be inherited by using keyword implement.



Q-4 What Is Overloading?     
Ans=> when we use same function and pass different 
      argument to create any application that is called overloading.
      All overloading method must be define as public.
      

Q-5 . What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with
      Example 
Ans=>  When We create any method as static it means we don't create object of class 
       static method direct access class and its method using 
       scope resolution operator (::).
       Ex:
       <?php
            class A
            {
                public static function display()
                {
                    echo " i am using static method";
                }
            }
            A::display();
        ?>


Q-6. What are the differences between abstract classes and interfaces? 
Ans=> When we create an abstract class we never create an object of abstract.
      
    • interface is used to support hierachy it means access parent class 
      properties by multiple child class.      
    • any member of an interface cannot be static.
    • a member of an abstrac class can be static.
    • Interface does not allow contaioner.
    • Abstract does  allow contaioner.


 Q-7. Define Constructor and Destructor?
 Ans=> constructor is a same name of class when we create an object of 
       class constructor automatically called.
       Constuct function start with two underscores(__) like __constuct.