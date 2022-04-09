<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VETERAN Level 1</title>
    <link rel="stylesheet" href="mcqs.css">
</head>
<body>

    <div class="main-div">
    <div class="logo">VETERAN LEVEL 2</div>
    <div class="inner-div">
            <h3 class="question">Question:<span></span>
                In computer science, a priority queue is an abstract data type which is like a regular queue, but where additionally each element has a "priority" associated with it. In a priority queue, an element with high priority is served before an element with low priority. - Wikipedia

                In this problem we will test your knowledge on Java Priority Queue.
                
                There are a number of students in a school who wait to be served. Two types of events, ENTER and SERVED, can take place which are described below.
                
                ENTER: A student with some priority enters the queue to be served.
                SERVED: The student with the highest priority is served (removed) from the queue.
                A unique id is assigned to each student entering the queue. The queue serves the students based on the following criteria (priority criteria):
                
                The student having the highest Cumulative Grade Point Average (CGPA) is served first.
                Any students having the same CGPA will be served by name in ascending case-sensitive alphabetical order.
                Any students having the same CGPA and name will be served in ascending order of the id.
                Create the following two classes:
                
                The Student class should implement:
                The constructor Student(int id, String name, double cgpa).
                The method int getID() to return the id of the student.
                The method String getName() to return the name of the student.
                The method double getCGPA() to return the CGPA of the student.
                The Priorities class should implement the method List<Student> getStudents(List<String> events) to process all the given events and return all the students yet to be served in the priority order.
                
            </h3>
            
            <button id="submit"><a href="https://www.hackerrank.com/challenges/java-priority-queue/problem?isFullScreen=true"> CLICK HERE TO COMPILE </a> </button>
            <button id = "nextLevel" ><a  href="questionlevel3.php" target ="_self">NEXT LEVEL</a> </button>
            
        </div>
    </div>

</body>
</html>