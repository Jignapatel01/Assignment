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

(g) How We Can Select The Specified <li> Element From The ListOf <li> Elements In <ul>?   
Ans=>  The <li> HTML element is used to represent an item in a list. In list items are usually displayed using    
      bullet points. 

(h) In <table> Design Change The Color Of Even <tr> Elements To “green”And Change The Color Of Odd <tr> Elements To 
    “blue” Color? Give An Example Code?      
Ans=> 
<h1>Employee</h1>  
  
  <table>  
    <tr>  
      <th>Name</th>  
      <th>City</th>  
      <th>Address</th>  
    </tr>  
     
   <tr>  
      <td>jigna</td>  
      <td>patel</td>  
      <td>rajkot</td>  
    </tr>  
     <tr>  
      <td>raj</td>  
      <td>patel</td>  
      <td>ahemdabad</td>  
    </tr>  
   <tr>  
      <td>Vishal</td>  
      <td>vaghasiya</td>  
      <td>rajkot</td>  
    </tr>  
     
  </table>  

  .css file

  <style>  
table {  
  font-family: arial, sans-serif;  
  border-collapse: collapse;  
  width: 100%;  
}  
  
td, th {  
  border: 2px solid #DFFF00;  
  text-align: left;  
  padding: 8px;  
}  
tr:nth-child(even) {  
  background-color: #DFFF00;  
}  
</style>  

(i) How We Can Implement Animation Effects In Jquery? 
Ans=> The jQuery animate() method is used to create custom animations.
        $("button").click(function()
        {
           $("div").animate({left: '250px'});
        }); 

(j) Apply jQuery validation using library. 
Ans=>  We have to include the below jQuery library in the head section of the page.

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

</head>
<body>
   
 <section class="container">
        <form class="cmxform" id="commentForm" method="post" action="" >
            <fieldset>
                <div class="form-copy-wrap">
                    <input class="checkbox" type="checkbox" />
                    <p>
                        <label for="aname">Name</label>
                        <input name="name[]" minlength="5" type="text" required/>
                    </p>
                    <p>
                        <label for="aemail">Email</label>
                        <input name="email[]" type="email" required/>
                    </p>
                    <p>
                        <label for="aage">Age</label>
                        <input name="age[]" type="number" required/>
                    </p>
                </div>
               
            </fieldset>
        </form>
    </section>

    <section class="container">
        <form class="hform" id="selectForm" action="">
    
    <div class="sbutton">
        <input type="button" id="submit_form" value="submit" />
    </div>

        <div class="addButton">
            <button type="button" value="add">Add</button>
        </div>
   
    
</form>
</section>



    <script>
        $("#submit_form").on('click', function (e) {
            e.preventDefault();
            $("form#commentForm").submit();
            
        });
        
    </script>

    <script>
        $(document).ready(function ()
         {
            var max_fields = 10;
            var counter = 0;

            $('.addButton').on('click', function () 
            {
                counter++;
                if (counter >= max_fields) 
                {
                    console.log('You have reached a max limit fields')
                    return;
                }
                var copy = $('.form-copy-wrap').first().clone();

                $("#commentForm fieldset").append(copy);
            });

            
                });
           
    </script>
</body>
</html>

