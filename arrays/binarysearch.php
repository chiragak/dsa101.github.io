<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary search</title>
    <link href="includes/style.css" rel="stylesheet">  

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
  include 'header.php';?>
<div class="outer-card">
        
        <div class="inner-card">
<h2>Binary Search</h2>
<p>
    Imagine you have a dictionary that contains words in alphabetical order. You want to find a specific word in the dictionary without reading every single word from the beginning.
    <br><br>
    So, let's say you want to find the word "<span class="bold-text">banana</span>" in the dictionary. Instead of starting from the first page and reading every word, you can be clever and start from the middle.
    <br><br>
    You open the dictionary to the middle page and check the word written there. Let's say it's "<span class="bold-text">elephant</span>". Now, you know that "<span class="bold-text">banana</span>" comes before "<span class="bold-text">elephant</span>" in alphabetical order.
    <br><br>
    Since the dictionary is in order, you can ignore all the pages that come after "<span class="bold-text">elephant</span>" because you know "<span class="bold-text">banana</span>" won't be there. You focus only on the pages before "<span class="bold-text">elephant</span>".
    <br><br>
    Next, you divide that section in half and go to the middle page again. Let's say the word on that page is "<span class="bold-text">cat</span>". Now, you know that "<span class="bold-text">banana</span>" comes after "<span class="bold-text">cat</span>".
    <br><br>
    Again, you ignore all the pages that come before "<span class="bold-text">cat</span>" because you know "<span class="bold-text">banana</span>" won't be there. You focus only on the pages after "<span class="bold-text">cat</span>".
    <br><br>
    You repeat this process, dividing the remaining section in half each time and comparing the middle word until you find the word "<span class="bold-text">banana</span>" or realize it's not in the dictionary.
    <br><br>
    This clever way of searching is called binary search. By dividing the search space in half at each step, you quickly narrow down the possibilities and find the word you're looking for.
    <br><br>
    So, instead of reading the entire dictionary, you smartly jump around and find the word you need. It's like finding a needle in a haystack, but with the help of a magical dictionary!
</p>
<p class="question">Question: Suppose you have an array called arr containing the following elements: [2, 4, 6, 8, 10]. Write a Java program that implements the binary search algorithm to search for a key element in the array. Ask the user to enter the key element and display the index where the key is found. If the key is not found, display a message indicating that the key is not present in the array.</p>
    <pre><code class="language-java">import java.util.Scanner;

public class Main {
    // Method to perform binary search on the given array
    public static void binarySearch(int arr[], int key) {
        int high = arr.length - 1;
        int low = 0;
        int flag = 0;

        // Perform binary search until the search space is valid
        while (low <= high) {
            int mid = (low + high) / 2;
            if (key == arr[mid]) {
                // Key found at index 'mid'
                flag = 1;
                System.out.println("Key found at index: " + mid);
                break;
            } else if (key < arr[mid]) {
                // Key is smaller, search in the left half
                high = mid - 1;
            } else {
                // Key is larger, search in the right half
                low = mid + 1;
            }
        }

        // If key is not found
        if (flag == 0) {
            System.out.println("Key not found");
        }
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int arr[] = {2, 4, 6, 8, 10};

        System.out.println("Enter the key that has to be searched");
        int key = sc.nextInt();

        // Perform binary search on the array
        binarySearch(arr, key);
    }
}</code></pre>
    

<div class="prevnext">
            <a href="">← Previous</a>
            <a class="next" href="reverse.php">Next →</a>
          </div>

    </div>
    </div>
    <?php include'footer.php'?>
</body>
</html>