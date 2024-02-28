<?php


  // Challenge 1: Sum of an array
  
  // 1. Create an array of numbers 
$my_arr = [1, 2, 3, 4, 5];
  // 2. Get the sum of all of the numbers combined and put into a variable.
$arr_sum = array_sum($my_arr);
  // 4. Get the amount of numbers in the array and put into a variable.
$amount_numbers = count($my_arr);
  // 5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 

echo '<h3>Sum Of An Array</h3>';
echo "The sum of the {$amount_numbers} numbers is: {$arr_sum}";


//   Challenge 2: Colors array
$colors = ['red', 'blue', 'green', 'yellow'];

//   1. Reverse the `$colors` array.
$colors = array_reverse($colors);
//   2. Add 'purple' and 'orange' to the end of the array.
array_push($colors, 'purple', 'orange');
//   3. Replace the second color with 'pink'
$colors[1] = 'pink';
//   4. Remove the last element of the array.
array_pop($colors);

// You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']


echo '<h3>Colors Array</h3>';
print_r($colors);




  // Challenge 3: Job listings array

  // 1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
$jobListings = [
  [
      "id" => 'some_id',
      "job_title" => 'some_job',
      "company" => 'some_company',
      "contact_email" => 'some_email',
      "contact_phone" => 'some_phone',
      "skills" => ['PHP', 'MySQL', 'JavaScript']
  ],
  [
      "id" => '2',
      "job_title" => 'some_job2',
      "company" => 'some_company2',
      "contact_email" => 'some_email2',
      "contact_phone" => 'some_phone2',
      "skills" => ['PHP2', 'MySQL2', 'JavaScript2']
  ],
  [
      "id" => 'some_id3',
      "job_title" => 'some_job3',
      "company" => 'some_company3',
      "contact_email" => 'some_email3',
      "contact_phone" => 'some_phone3',
      "skills" => ['PHP3', 'MySQL3', 'JavaScript3']
  ],
];
  // 2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.

array_push($jobListings, [
  "id" => 'some_id4',
  "job_title" => 'some_job4',
  "company" => 'some_company4',
  "contact_email" => 'some_email4',
  "contact_phone" => 'some_phone4',
  "skills" => ['PHP4', 'MySQL4', 'JavaScript4']
]);

  // 3. Print out the job_title of the second job listing in the array.


// 4. Print out the first skill of the third job listing in the array.


echo '<h3>Job Listings</h3>';
// print_r($jobListings);
echo $jobListings[1]['job_title'];
echo "<br>";
echo $jobListings[2]['skills'][0];