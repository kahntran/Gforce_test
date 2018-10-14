# Steps to set up local:

1. Move to folder laradock.

2. Build Docker (workspace, php-fpm, nginx)
    * Use command: docker-compose up nginx
    
3. Testing
    * Use URL: gforce.yii/
    
4. Review result.

**Note: For sending email to work, please, reference "Assumption description" below

# G-Forces Home Test
* This is a G-Forces Home Test project.

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

# Requirements
* The minimum requirement by this project template that your Web server supports PHP 5.4.0.

# Assumption description
* Send Mail feature using pre-defined Gmail account with app password :

    * Enable the 2-step verification to google. Link: https://www.google.com/landing/2step/
    * Create App Password to be use by your system. Link: https://security.google.com/settings/security/apppasswords
    * Selected Others (custom name) and clicked generate
    * Edit web.php:
        * ['mailer']['transport']['username'] = gmail_account
        * ['mailer']['transport']['password'] = gmail_app_password
        
# Local result
* Test failed:
      * BugReportFormCest (Failed: submitEmptyForm, submitFormSuccessfully)
      * UserTest (Failed: testFindUserById, testFindUserByUsername . Skipped: testValidateUser)

* "Create tests for completed functionality" : Not Done

