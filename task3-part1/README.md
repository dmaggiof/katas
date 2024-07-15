#### Solution to the first part of task 3.

In a first iteration, I would start applying some SOLID and architectural patterns to the example code, like:

- Following the Single Responsibility Principle (SRP), I would extract from the register_and_Notify two methods, one for the registry of the user into the database and another for the email notification.

- Said methods would belong to a use case called "User Registry" for example. Following the principles of hexagonal architecture,the use case would be in the application layer, while the controller would be an element of infrastructure.

- The concept of "User" could be changed to something more specific, like Customer, if the code belonged to an ecommerce for example.

- The use case would receive the dependencies as arguments in the constructor of the class. And following the  Dependency inversion principle, said arguments would be abstractions (interfaces) of concrete classes implementing the infrastructure logic. In this case we would need a repository with the logic for the database and an object for sending the email notification.

- Finally, following hexagonal architecture principles and DDD, we would have the Domain layer. In this layer we would have the "User" concept, encapsulating the validations and another necessary logic for the correct instantiation of a new user, as well as the business logic which belonged to that entity, in order to have a rich model.

In a second iteration, if it were convenient it could be proposed to delete the email sending from the use case code and instead of it launch an event which signals the creation of the new user. Said event would be consumed by the appropriate subscriber to send the email.