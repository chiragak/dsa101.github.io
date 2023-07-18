<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linear search</title>
    <link href="includes/style.css" rel="stylesheet">  
</head>
<body>
  <?php include'header.php'?>
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
      }
    </code>
    </pre>
    
    
          <p>In this example, the <span class="bold-text">students</span> array represents the list of students' names. The
            code iterates through each student's name using a <span class="bold-text">for</span> loop and compares it to the
            target name "Emma". If a match is found, the program prints the position where Emma is found.</p>
    
          <p class="remember">
            Remember to note that when comparing strings in Java, we should use the <span class="bold-text">equals()</span>
            method instead of the <span class="bold-text">==</span> operator, as <span class="bold-text">==</span> compares
            the memory addresses of the objects rather than their contents.
          </p>

    </div>
    </div>
    <?php include'footer.php'?>
</body>
</html>