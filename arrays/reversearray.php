<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse an Array</title>
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
  include '../includes/header.php';?>
<div class="outer-card">
        
        <div class="inner-card">
<h2>Reverse an Array</h2>
<p>
Have you ever wondered how to reverse the order of array elements? In this code snippet, we'll look at a simple but effective technique for doing just that! Let's get started and figure out how it works.
</p>
<p>Let's take it one step at a time:</p>
    <ol>
        <li>
            <p>We begin with an integer array of '2, 4, 6, 8, 10, 12'.</p>
        </li>
        <li>
            <p>We want to reverse the array's element order.</p>
        </li>
        <li>
            <p>To accomplish this, we use a loop that traverses the first half of the array.</p>
        </li>
        <li>
            <p>We swap the elements at the beginning and end of the array within the loop.</p>
        </li>
        <li>
            <p>We repeat this process until we reach the middle of the array.</p>
        </li>
        <li>
            <p>When the loop is finished, the array will be reversed, with the elements being '12, 10, 8, 6, 4, 2'.</p>
        </li>
        <li>
            <p>The process is simple but effective in reversing the order of the array's elements.</p>
        </li>
    </ol>
    <pre><code class="language-java">public class Main {
    public static void main(String[] args) {
        int[] arr = {2, 4, 6, 8, 10, 12};
        int n = arr.length;

        // Perform the swap to reverse the array
        for (int i = 0; i < n / 2; i++) {
            int temp = arr[i];
            arr[i] = arr[n - i - 1];
            arr[n - i - 1] = temp;
        }
    }
}</code></pre>
    

<div class="prevnext">
            <a href="">← Previous</a>
            <a class="next" href="reversearray.php">Next →</a>
          </div>

    </div>
    </div>
    <?php include'../includes/footer.php'?>
</body>
</html>