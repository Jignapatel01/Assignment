(a) What is Jquery?
Ans=> jQuery is a lightweight, "write less, do more", JavaScript library.
      jQuery is a JavaScript library. it is built using JavaScript, it accepts Javascript methods and functions. 

(b) How are JavaScript and jQuery different? 
Ans=> JavaScript is an independent language and can exist on its own. 
    jQuery is a JavaScript library. 
    It would not have been invented had JavaScript was not there. 
    jQuery is still dependent on JavaScript as it has to be converted to JavaScript for the browser in-built JavaScript engine to interpret and run it.

(c) Which is the starting point of code execution in jQuery?
Ans=>  $document.ready() or Jquery($document).ready()

(d) Document Load Vs Window. Load() jQuery
Ans=> The key difference between $(document). ready() and $(window). load() event is that the code included inside 
      onload function will run once the entire page(images, iframes, stylesheets,etc) are loaded whereas 
      the $(document). ready() event fires before all images,iframes etc.

(e) What is the difference between prop and attr?
Ans=> prop() : This method return current value.
               This method is mainly used when the user wants to change the value for an HTML tag’s attribute.   
               It takes three parameters Property , value and a function.

      attr() :  This method return default value.
                This method is mainly used to set the default value for an HTML tag’s attribute.
                It takes three parameters an attribute, value, and a function.

(f) Explain Difference Between JQuery And JavaScript? 
Ans=> JavaScript is a programming language.
      JavaScript is an independent language and can exist on its own. 

      jQuery is an Application Programming Interface (API).
      It would not have been invented had JavaScript was not there. 
      jQuery is a JavaScript library. 
    jQuery is still dependent on JavaScript as it has to be converted to JavaScript for the browser in-built JavaScript engine to interpret and run it.

(i) How We Can Implement Animation Effects In Jquery? 
Ans=> The jQuery animate() method is used to create custom animations.
        $("button").click(function()
        {
           $("div").animate({left: '250px'});
        }); 

(j) Apply jQuery validation using library. 
Ans=> 