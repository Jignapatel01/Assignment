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

Q-9. How to call parent constructer?
Ans=>Parent constructors are not called implicitly if the child class defines a constructor. 
    In order to run a parent constructor, a call to parent::__construct(). within the child constructor is required. 
    
Q-10. How to call parent constructer?
Ans=>  parent::__constucter

Q-11. Are Parent Constructor Called Implicitly When Create An ObjectOf Class? 
Ans=>  Parent constructors are not called implicitly if the child class defines a constructor.

Q-12. What Happen, If Constructor Is Defined As Private Or Protected?
Ans=>  If a constructor is declared as private, then its objects are only accessible from within class. 
       You cannot access its objects from outside the constructor class.

Q-13. Create multiple Traits and use it in to a single class?
            <?php

                trait disaplay
                {
                    public function test1()
                    {
                        echo " Hello ! Welcome to my page.";
                    }
                }
                trait display2
                {
                    public function test2()
                    {
                        echo "My name is palak";
                    }
                }
                class welcome
                {
                    use display , display2
                }
                $disp=new welcome()
                $disp->display;
                $disp->display2;
            ?>

 Q-14. Write PHP Script of Object Iteration?


    Q-15. Use of The $this keyword 
        <?php
            class A 
        {
            public $a=10;
            public  $b=20;
            public function test()
            {
                return $this->a+$this->b;
       
            }
        }
        $obj=new A;
        echo "additions of numbers is :".$obj->test();  

        ?>




