# Form Validation using AngularJS

The purpose of this task is to implement a process of validation and an integration with external API for a simple login form.

### Functional requirement

1. Validation
  - the email and password are mandatory
  - the email address must be valid
  - the password must be at least 8 characters long and must contain at least one digit, one lowercase letter and one uppercase letter

2. Integration with the external API
  - Data must be sent to API as JSON via AJAX (only the POST method is allowed)
  - The request format must be as follow: {email: "email_value", password: "password_value"}
  - The endpoint of API must be taken from the action attribute
  - Following API responses must be supported

    - HTTP Status 200 The authentication is valid
    ¦ expected result : "access granted" is displayed, form disappears
    
    - HTTP Status 401 Unauthorized
    ¦ expected result : "invalid login or password" is displayed
    
    - HTTP Status 400 Bad request
    ¦ expected result : "Bad request" is displayed
    
    - HTTP Status 500 Server error
    ¦ expected result : "Server error" is displayed

### Non-functional requirement

1. Application must be in line with ECMA­262, HTML5, CSS3 standards
2. UTF8 encoding must be used for each text file
3. Unit tests for the functional requirements must be provided
4. IE9+, Chrome, Firefox (the last two versions) must be supported
5. Implementation of the external API are not needed and will not be checked
6. You can use application framework like ex. Angular, Backbone, Ember etc.
