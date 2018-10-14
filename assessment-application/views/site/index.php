<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<?php if (Yii::$app->session->hasFlash('mailResult')): ?>
    <div class="alert alert-info alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?= Yii::$app->session->getFlash('mailResult', null, true) ?>
    </div>
<?php endif; ?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>
    </div>

    <div class="body-content">

        <h1>TASKS TO COMPLETE</h1>

        <h3>Required Functionality</h3>
        <ul>
            <li>Implement the bug report form <a href="http://localhost:8080/assessment/index">http://localhost:8080/assessment/index</a>
            </li>
            <ul>
                <li>The name, email and body fields must be filled in to submit the form</li>
                <li>This should send an email to the admin email containing the details submitted</li>
                <li>The uploaded screenshot should be attached to the email</li>
                <li>Display a message to the user 'Thank you for reporting this bug, we will respond to you via email
                    shortly.'
                </li>
            </ul>
            <li>Prevent the bug report form from being accessed by unauthenticated users</li>
            <li>Prevent inactive users (eg the 'disabled' user) from logging in</li>
        </ul>

        <h3>Additional optional functionality</h3>

        <ul>
            <li>Restrict the screenshot to a maximum of 1MB and 800x600px</li>
            <li>Create tests for completed functionality</li>

        </ul>

        <h3>All code must</h3>
        <ul>
            <li>Use the framework where possible</li>
            <li>Be PSR2 compliant</li>
            <li>Autoload via PSR4 standard</li>
            <li>Follow clean code principles</li>
            <li>Be secure</li>
        </ul>
    </div>
</div>
