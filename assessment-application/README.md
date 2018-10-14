DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.

TASKS TO COMPLETE
------------

**Required Functionality**

* Implement the bug report form [http://localhost:8080/assessment/index](/assessment/index)
  * The name, email and body fields must be filled in to submit the form
  * This should send an email to the admin email containing the details submitted
  * The uploaded screenshot should be attached to the email 
  * Display a message to the user 'Thank you for reporting this bug, we will respond to you via email shortly.'
* Prevent the bug report form from being accessed by unauthenticated users 
* Prevent inactive users (eg the 'disabled' user) from logging in

**Additional Optional Functionality**

* Restrict the screenshot to a maximum of 1MB and 800x600px
* Create tests for completed functionality

**All code must**
 
* Use the framework where possible
* Be PSR2 compliant 
* Autoload via PSR4 standard
* Follow clean code principles
* Be secure 

INSTALLATION
------------

### Install via Composer
1. Install dependencies with Composer 

    ```
    composer install  
    ```
2. Set up the database 
 
     ```
     php yii migrate  
     ```   
     
3. Start web server:

    ```
    php yii serve
    ```
    
4. View the application in the browser:
	[http://localhost:8080](http://localhost:8080)


CONFIGURATION
-------------

The application is set up to use an SqlLite database

**NOTES:**
- Refer to the README in the `tests` directory for information specific to basic application tests.
