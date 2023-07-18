<!-- arrays 1 -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/includes/style.css">
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-java.min.js"></script>
        <style>
          .language-java {
            border-radius: 22px;
      
          }

          
          
        </style>
      
        <title>Problem Solving in Java</title>
      
      </head>
<head>

    
    
 
<body>
<?php
include 'header.php';
?>

  
    <div class="outer-card">
        <h1 class="outer-heading">Arrays</h1>
        <div class="inner-card">
          <p>Imagine you have a basket, and you want to collect different types of fruits in it. To keep track of the fruits
            you collect, you can use an array. An array is like a special container that can hold multiple items of the same
            type.</p>
          <p>Let's say you want to collect three types of fruits: apples, bananas, and oranges. You can create an array
            called <span class="bold-text">'fruitBasket'</span> in Java, which can hold these fruits.</p>
          <pre><code class="language-java">String[] fruitBasket = new String[3];</code></pre>
          <p>In this code, we declare an array called <span class="bold-text">'fruitBasket'</span> that can hold three
            strings (fruits). The <span class="bold-text">'new String[3]'</span> part tells Java that we want an array with
            three slots to store strings.</p>
          <p>Now, let's imagine you collect the fruits one by one and put them into the <span
              class="bold-text">'fruitBasket'</span> array. Here's how you would do it:</p>
          <pre><code class="language-java">fruitBasket[0] = "apple";
    fruitBasket[1] = "banana";
    fruitBasket[2] = "orange";</code></pre>
          <p>In this code, we assign the value <span class="bold-text">"apple"</span> to the first slot of the <span
              class="bold-text">'fruitBasket'</span> array, <span class="bold-text">"banana"</span> to the second slot, and
            <span class="bold-text">orange"</span> to the third slot.</p>
          <p>Now, you can access the fruits from the <span class="bold-text">'fruitBasket'</span> array whenever you want.
            For example, if you want to get the fruit in the second slot (which is the banana), you can do this:</p>
          <pre><code class="language-java">System.out.println("The second fruit in the basket is: " + fruitBasket[1]);</code></pre>
    
          <h2>Passing Arrays as Arguments</h2>
          <p>When you pass an array as an argument in Java, it's like sharing your fruit basket with a friend. You tell
            them, "Hey, I have some delicious fruits in my basket. Would you like them?" They say, "Yes, please pass me your
            fruit basket." So you give them your fruit basket.<br>
            In Java, when you pass an array to a method or function, it's like sharing the contents of your array so that
            the method or function can use them.</p>
          <pre><code class="language-java">public static void shareFruits(String[] basket) {
        // The method receives the fruit basket as an argument
        // and can access the fruits inside it.
        for (String fruit : basket) {
          System.out.println("Shared fruit: " + fruit);
        }
      }
      
      public static void main(String[] args) {
        String[] myBasket = { "apple", "banana", "orange" };
        
        // Call the shareFruits method and pass your fruit basket (array) to it.
        shareFruits(myBasket);
      }</code></pre>
          

          <div class="prevnext">
            <a href="">← Previous</a>
            <a class="next" href="linearsearch.php">Next →</a>
          </div>
    
    
        </div>
      </div>

  <?php
  include'footer.php';
  ?>
      
      
</body>
</html>
