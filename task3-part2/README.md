#### Solution to the second part of task 3.

This folder includes the code corresponding to the improvements stated in the previous task.

The code uses Symfony in the version 7.1. For a production project it would be recommended to use the latest LTS version, in order to have updates for the next years. The code was developed with PHP 8.2, using some specific features of this version such as readonly classes.

All improvements from the previous task were introduced as a proof of concept, to the point of having the email notification sent from an event instead of having it in the same use case. The only exception is the refactor of the name of the User entity, which hasn't changed. Code is not functional (it lacks infrastructure logic for example), but aims to show a real case of how I would implement the changes.

A starting point for a code review can be the new controller, located in the path `task3-part2/src/Leadtech/Infrastructure/Controllers/User/Register.php`.

It was included a small unit test, with in memory repositories, in the path `task3-part2/tests/Leadtech/Unit/RegisterUser.php`.