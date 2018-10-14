RUNNING TESTS
------------

1. Install dependencies with Composer 

    ```
    composer install  
    ```
2. Set up the database 
 
     ```
     php tests/bin/yii migrate  
     ```   
     
3. Run tests:

All Tests
    ```
    vendor\bin\codecept run
    ```
    
Unit Tests
    ```
    vendor\bin\codecept run unit
    ```
    
Functional Tests
    ```
    vendor\bin\codecept run functional
    ```
