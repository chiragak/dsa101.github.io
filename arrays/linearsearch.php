<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear search</title>
    <link href="../assets/css/style.css" rel="stylesheet">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/components/prism-java.min.js"></script>
        <style>
          .language-java {
            border-radius: 22px;
      
          }
          </style>
</head>
<body>
<?php
  $pageTitle = "ARRAYS";
  include '../includes/header.php';
?>
<div class="outer-card">
        
        <div class="inner-card">
<h2>Linear Search</h2>
          <p>Imagine you have a classroom with 30 students, and you're looking for a particular student named "Emma" in the
            class. You don't know where Emma is sitting, so you need to search through each student, one by one, until you
            find her.</p>
    
          <p>Here's how the linear search would work:</p>
    
          <ol>
            <li>Start at the first student in the classroom.</li>
            <li>Ask the student, "Are you Emma?"</li>
            <li>If the student says, "Yes, I'm Emma," then you have found her!</li>
            <li>If the student says, "No, I'm not Emma," move on to the next student and repeat steps 2 and 3.</li>
            <li>Repeat this process until you either find Emma or you reach the last student in the classroom.</li>
          </ol>
    
          <p>This is an example of a linear search because you are searching through the students one by one, in a linear
            order, until you find the target student (Emma) or reach the end of the list.</p>
    
          <p>In programming, a linear search is similar. You have a list of elements, and you iterate through the list
            sequentially, comparing each element to the target until you find a match or reach the end of the list.</p>
    
          <p>Here's a simplified Java code snippet representing the linear search for Emma in the classroom:</p>
    
          <pre>
    <code class="language-java">String[] students = { "Alice", "Bob", "Emma", "David" };
      // Array of student names
      
      for (int i = 0; i < students.length; i++) {
        // Iterate through each student in the array
        if (students[i].equals("Emma")) {
          // Check if the current student is "Emma"
          System.out.println("Emma found sitting at position: " + i);
          // Print the position where Emma is found
        }
      }</code></pre>
    
    
          <p>In this example, the <span class="bold-text">students</span> array represents the list of students' names. The
            code iterates through each student's name using a <span class="bold-text">for</span> loop and compares it to the
            target name "Emma". If a match is found, the program prints the position where Emma is found.</p>
    
          <p class="remember">
            Remember to note that when comparing strings in Java, we should use the <span class="bold-text">equals()</span>
            method instead of the <span class="bold-text">==</span> operator, as <span class="bold-text">==</span> compares
            the memory addresses of the objects rather than their contents.
          </p>

          <h2>Largest in a</h2>
          <p>
    1. Start by initializing a variable called <span class="bold-text">"largest"</span> with the smallest possible integer value.<br>
    2. Iterate through each element in the array.<br>
    3. Compare the current element with the current largest value.<br>
    4. If the current element is larger than the current largest value, update the value of <span class="bold-text">"largest"</span> to be the current element.<br>
    5. Repeat steps 3 and 4 for all elements in the array.<br>
    6. After iterating through all elements, <span class="bold-text">"largest"</span> will hold the largest value found.<br>
    7. Print the value of <span class="bold-text">"largest"</span> to display the result.
</p>


          <pre><code class="language-java">public class Main {
    public static void main(String[] args) {
        int numbers[] = {1, 5, 9, 2, 6, 11, 0};
        int largest = Integer.MIN_VALUE; // Initialize largest with the minimum possible value
        
        for (int i = 0; i < numbers.length; i++) {
            // Check if current element is greater than the current largest value
            if (numbers[i] > largest) {
                largest = numbers[i]; // Update largest if a larger value is found
            }
        }
        
        System.out.println("Largest value is: " + largest);
    }
}</code></pre>
<div class="prevnext">
            <a href="">← Previous</a>
            <a class="next" href="binarysearch.php">Next →</a>
          </div>

    </div>
    </div>
    <?php include'../includes/footer.php'?>
</body>
</html>