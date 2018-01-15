<html>
    <head>
        <meta charset="UTF-8">
        <title>COMP4711 Lab 1</title>
    </head>
    <body>
        <?php

        include('Student.php');

        $students = array();
        
        // create and store first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // create and store second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // create and store third student (me!)
        $third = new Student();
        $third->surname = "Zeeman";
        $third->first_name = "Nathaniel";
        $third->add_email('home','nathanielzeeman@gmail.com');
        $third->add_grade(100); // hopeful
        $students['n789'] = $third;
        
        ksort($students);

        // display all students
        foreach($students as $student) {
            echo $student->toString();
        }

        ?>
    </body>
</html>
